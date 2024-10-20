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

- Open your project

```sh
cd config/app.php
```

- register provider below in 'providers' section

```sh
Mateo\Rtch\ChatServiceProvider::class
```

### publish routes & views

```sh
php artisan vendor:publish --tag=views
php artisan vendor:publish --tag=routes
php artisan vendor:publish --tag=controllers
php artisan vendor:publish --tag=events
php artisan vendor:publish --tag=resources

```

### Routes web.php

```sh
Route::get('/rtch',[PusherController::class,'index'])->name('rtch');
Route::post('/rtch/broadcast',[PusherController::class,'broadcast'])->name('rtch.broadcast');
Route::post('/rtch/receive',[PusherController::class,'receive'])->name('rtch.receive');
```
