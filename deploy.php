<?php

namespace Deployer;

require 'recipe/laravel.php';

// ─────────────────────────────────────────────────────────────────────────────
// Config
// ─────────────────────────────────────────────────────────────────────────────

set('repository', 'git@github.com:cothinking-dev/blue-education-laravel.git');
set('keep_releases', 5);
set('default_timeout', 600);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// ─────────────────────────────────────────────────────────────────────────────
// Hosts
// ─────────────────────────────────────────────────────────────────────────────

host('168.119.253.191')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/home/deployer/blue-education-laravel')
    ->set('branch', 'main')
    ->set('identity_file', '~/.ssh/hetzner-blue-education');

// ─────────────────────────────────────────────────────────────────────────────
// Custom tasks
// ─────────────────────────────────────────────────────────────────────────────

desc('Install npm dependencies and build Vite assets');
task('npm:build', function () {
    run('cd {{release_or_current_path}} && npm ci --no-audit --no-fund');
    run('cd {{release_or_current_path}} && npm run build');
});

desc('Restart queue workers so they pick up the new code');
task('artisan:queue:restart', function () {
    run('cd {{release_or_current_path}} && {{bin/php}} artisan queue:restart');
});

desc('Verify a production .env exists in the shared directory');
task('deploy:verify_env', function () {
    $envPath = '{{deploy_path}}/shared/.env';
    if (! test("[ -f $envPath ]")) {
        writeln('');
        writeln('  <error>Missing {{deploy_path}}/shared/.env on the server.</error>');
        writeln('  <comment>SCP your production .env there before re-running:</comment>');
        writeln("  <comment>  scp .env.production deployer@{{hostname}}:$envPath</comment>");
        writeln('');
        throw new \Exception('Refusing to deploy without a production .env.');
    }
});

desc('Run database migrations with --force (production-safe)');
task('artisan:migrate:force', function () {
    run('cd {{release_or_current_path}} && {{bin/php}} artisan migrate --force --no-interaction');
});

desc('Apply the curated Wix → Laravel redirect map (idempotent)');
task('artisan:seed:wix-redirects', function () {
    run('cd {{release_or_current_path}} && {{bin/php}} artisan db:seed --class=WixRedirectsSeeder --force --no-interaction');
});

// ─────────────────────────────────────────────────────────────────────────────
// Hooks
// ─────────────────────────────────────────────────────────────────────────────

before('deploy:prepare', 'deploy:verify_env');
after('deploy:vendors', 'npm:build');
after('deploy:vendors', 'artisan:migrate:force');
after('deploy:symlink', 'artisan:queue:restart');
after('deploy:failed', 'deploy:unlock');
