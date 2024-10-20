# RTCH - Real Time CHAT

## Register provider

### composer.json

```sh
    "require": {
        "mateo/rtch": "dev-main"
    },

    "repositories":[
        {
            "type" : "path",
            "url": "packages/rtch",
            "options":{
                "symlink": true
            }
        }
    ],

```

-   Open your project

```sh
cd config/app.php
```

-   register provider below in 'providers' section

```sh
Mateo\Rtch\ChatServiceProvider::class
```

### publish routes & views

```sh
php artisan vendor:publish --tag=views
php artisan vendor:publish --tag=routes
php artisan vendor:publish --tag=controllers
php artisan vendor:publish --tag=events
```

### Routes web.php

```sh
Route::get('/',[PusherController::class,'index']);
Route::post('/broadcast',[PusherController::class,'broadcast']);
Route::post('/receive',[PusherController::class,'receive']);
```
