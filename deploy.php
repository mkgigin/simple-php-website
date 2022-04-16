<?php
namespace Deployer;

require 'recipe/codeigniter.php';

// Project name
set('application', 'simple-php-ws');

// Project repository
set('repository', 'https://github.com/banago/simple-php-website.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

// host('localhost')
//     ->set('deploy_path', '/Applications/XAMPP/htdocs/{{application}}');    
    
localhost()
    ->set('deploy_path', '/Applications/XAMPP/htdocs/{{application}}');    


    // Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

//172.21.0.3