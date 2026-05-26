<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
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

        return redirect('/#beta')->with('success', 'Merci ! Vous êtes inscrit à l\'accès anticipé 🎉');
    }
}
