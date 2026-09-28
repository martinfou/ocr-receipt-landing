<?php

/**
 * Diagnostic TEMPORAIRE — a supprimer apres usage (2026-09-28).
 *
 * But : comprendre pourquoi /sitemap.xml renvoie encore un ParseError en
 * production alors que le commit deploye contient bien le correctif.
 *
 * Hypothese principale : le serveur execute une copie perimee du blade, soit
 * par un drapeau d'index git (skip-worktree / assume-unchanged), soit par une
 * vue compilee residuelle, soit par un chemin de vue different de celui du
 * depot.
 *
 * N'est PAS expose sur le web (le docroot est public/).
 */

require __DIR__.'/vendor/autoload.php';

$app = require __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo 'HEAD            : '.trim((string) @shell_exec('git log -1 --oneline')).PHP_EOL;
echo 'PWD             : '.getcwd().PHP_EOL;
echo 'BASE_PATH       : '.$app->basePath().PHP_EOL;
echo 'APP_PATH        : '.$app->path().PHP_EOL;
echo 'PHP             : '.PHP_VERSION.PHP_EOL;

$view = app('view');
$finder = $view->getFinder();

echo 'VIEW PATHS      : '.implode(' | ', $finder->getPaths()).PHP_EOL;

try {
    $resolved = $finder->find('sitemap');
} catch (Throwable $e) {
    echo 'VUE INTROUVABLE : '.$e->getMessage().PHP_EOL;

    return;
}

echo 'VUE RESOLUE     : '.$resolved.PHP_EOL;
echo 'LIGNE 1 SOURCE  : '.trim((string) (file($resolved)[0] ?? '')).PHP_EOL;
echo 'MTIME SOURCE    : '.date('c', (int) filemtime($resolved)).PHP_EOL;

$compiler = $view->getEngineResolver()->resolve('blade')->getCompiler();
$compiled = $compiler->getCompiledPath($resolved);

echo 'COMPILE         : '.$compiled.PHP_EOL;
echo 'COMPILE EXISTE  : '.(file_exists($compiled) ? 'oui' : 'non').PHP_EOL;

if (file_exists($compiled)) {
    echo 'COMPILE MTIME   : '.date('c', (int) filemtime($compiled)).PHP_EOL;

    $body = (string) file_get_contents($compiled);
    $stale = strpos($body, '<?xml') !== false;

    echo 'XML BRUT DEDANS : '.($stale ? 'OUI -> compile perimee' : 'non').PHP_EOL;
    echo 'DEBUT COMPILE   :'.PHP_EOL;

    foreach (array_slice(explode("\n", $body), 0, 6) as $line) {
        echo '  '.substr($line, 0, 170).PHP_EOL;
    }
}

echo 'OPCACHE PRESENT : '.(function_exists('opcache_get_status') ? 'oui' : 'non').PHP_EOL;

$status = function_exists('opcache_get_status') ? @opcache_get_status(false) : null;

if (is_array($status)) {
    echo 'OPCACHE ACTIF   : '.(($status['opcache_enabled'] ?? false) ? 'oui' : 'non').PHP_EOL;
    echo 'VALIDATE_TS     : '.var_export(ini_get('opcache.validate_timestamps'), true).PHP_EOL;
    echo 'REVALIDATE_FREQ : '.var_export(ini_get('opcache.revalidate_freq'), true).PHP_EOL;
}

echo 'NB VUES COMPILEES : '.count(glob(storage_path('framework/views').'/*.php') ?: []).PHP_EOL;
