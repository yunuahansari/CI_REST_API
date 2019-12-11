<?php 

$params = require_once('params.php');

$account = require_once('account.php');


//$user = require_once('user.php');



$paths =  array_merge($account['paths']);

$definitions =  array_merge($account['definitions']);

echo json_encode([
    'tags' => [
        [
            'name' => 'account',
            'description' => 'guest user operations.',
        ],
        
        
    ],
    "swagger" => "2.0",
    "info" => [
        "version" => "2.0.0",
        "title" => "service provider API"
        ],
    "host" => $params['host'],
    "basePath" => $params['basePath'],
    "schemes" => [
        "http",
        "https"
    ],
    'paths' => $paths,
    'definitions' => $definitions
]);
