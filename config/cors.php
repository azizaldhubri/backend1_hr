<?php

return [  

    // 'paths' => ['api/*', 'sanctum/csrf-cookie'],
    // 'allowed_methods' => ['*'],
    // 'allowed_origins' => ['http://localhost:3000'],
    // 'allowed_origins' => ['*'],
    // 'allowed_origins_patterns' => [],
    // 'allowed_headers' => ['*'],
    // 'exposed_headers' => [],
    // 'max_age' => 0,  
    // 'supports_credentials' => true,
 

    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,

];

  // 'supports_credentials' => false,

    // 'paths' => ['api/*'],
    // 'allowed_methods' => ['*'],
    // 'allowed_origins' => ['*'],  // أو 'http://localhost:3000'
    // 'allowed_headers' => ['*'],
