<?php

return [

    

    'default' => env('FILESYSTEM_DRIVER', 'local'),

   

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

   

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

 'upl_avatar' => [
    'driver' => 'local',
    'root'   => public_path() . '/assets/avatar',
 ],

'upl_arquivos' => [
  'driver' => 'local',
  'root' => public_path().'/assets/arquivos'
],

];
