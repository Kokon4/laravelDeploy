<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/Kokon4/laravelDeploy.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('3.225.53.211')
    ->set('remote_user', 'deployauto')
    ->set('deploy_path', '~/var/www/autodeployercrud/html');

// Hooks

after('deploy:failed', 'deploy:unlock');

task('build', function () {
    run('cd {{release_path}} && build');
   });
