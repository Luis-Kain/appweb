<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
        resource_path('views/dashboardCustomer'),
        resource_path('views/loginCustomer'),
        resource_path('views/registerCustomer'),
        resource_path('views/ordersCustomer'),
        resource_path('views/routesCustomer'),
        resource_path('views/salesCustomer'),
        resource_path('views/rolesAdmin'),
        resource_path('views/addClientCustomer'),
        resource_path('views/editClientCustomer'),
        resource_path('views/addOrderCustomer'),
        resource_path('views/editOrderCustomer'),

    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
