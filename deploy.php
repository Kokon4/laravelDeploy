<?php
namespace Deployer;
require 'recipe/laravel.php';

// Config

set ('application','todolist');
set('repository', 'git@github.com:Kokon4/laravelDeploy.git');

set('keep_releases', 3);
add('shared_files', ['.env']);
add('shared_dirs', ['storage']);

add('writable_dirs', ['storage', 'bootstrap/cache']);
set('allow_anonymous_stats', false);

// Hosts

host('34.237.244.74')
    ->setRemoteUser('deployer')
    ->setHostname('34.237.244.74')
    ->set('deploy_path', '/var/www/backoffice')
    ->set('identity_file', '~/.ssh/deployer');


task('deploy:push_env', function () {
    upload('.env', '{{deploy_path}}/shared/.env');
});

task('reload:php-fpm', function () {
    run('sudo /etc/init.d/php8.3-fpm restart');
});

before('deploy:shared', 'deploy:push_env');
// Hooks
after('deploy:failed', 'deploy:unlock','reload:php-fpm');
                            