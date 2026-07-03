<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function hubdoc()
    {
        return view('hubdoc');
    }

    public function sitemap()
    {
        return response()->view('sitemap', [], 200)
            ->header('Content-Type', 'text/xml');
    }

    public function french()
    {
        return view('fr');
    }

    public function download($platform)
    {
        $valid = ['windows', 'macos', 'linux'];
        if (!in_array($platform, $valid)) {
            abort(404);
        }

        // Log download
        $log = storage_path('app/downloads.json');
        $logs = [];
        if (file_exists($log)) {
            $logs = json_decode(file_get_contents($log), true) ?? [];
        }
        $logs[] = [
            'platform' => $platform,
            'ip' => request()->ip(),
            'referer' => request()->header('referer'),
            'user_agent' => request()->header('user-agent'),
            'timestamp' => now()->toIso8601String(),
        ];
        // Keep last 10K entries
        if (count($logs) > 10000) {
            $logs = array_slice($logs, -10000);
        }
        file_put_contents($log, json_encode($logs, JSON_PRETTY_PRINT));

        // Redirect to actual download (placeholder)
        return redirect("https://github.com/martinfou/ocr-receipt/releases");
    }

    public function stats()
    {
        $log = storage_path('app/downloads.json');
        if (!file_exists($log)) {
            return response()->json([
                'total_downloads' => 0,
                'by_platform' => ['windows' => 0, 'macos' => 0, 'linux' => 0],
                'by_day' => [],
            ]);
        }

        $logs = json_decode(file_get_contents($log), true) ?? [];

        $total = count($logs);
        $byPlatform = ['windows' => 0, 'macos' => 0, 'linux' => 0];
        $byDay = [];

        foreach ($logs as $entry) {
            $p = $entry['platform'] ?? 'unknown';
            $byPlatform[$p] = ($byPlatform[$p] ?? 0) + 1;

            $day = substr($entry['timestamp'] ?? '', 0, 10);
            if ($day) {
                $byDay[$day] = ($byDay[$day] ?? 0) + 1;
            }
        }

        krsort($byDay);

        return response()->json([
            'total_downloads' => $total,
            'by_platform' => $byPlatform,
            'last_7_days' => array_slice($byDay, 0, 7, true),
        ]);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'profession'=> 'nullable|string|max:255',
        ]);

        $firstname = $request->input('firstname');
        $email     = $request->input('email');
        $profession = $request->input('profession', '');
        $ip        = $request->ip();
        $date      = now()->format('Y-m-d H:i:s');

        $line = implode(',', [
            $date,
            $firstname,
            $email,
            $profession,
            $ip,
        ]);

        $csvPath = storage_path('app/leads.csv');
        file_put_contents($csvPath, $line . PHP_EOL, FILE_APPEND | LOCK_EX);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Merci ! Vous êtes inscrit à l\'accès anticipé 🎉'
            ]);
        }

        return redirect('/#beta')->with('success', 'Merci ! Vous êtes inscrit à l\'accès anticipé 🎉');
    }
}
