# Laravel-Menu
An awesome Laravel menu service provider

This package adds an Menu service provider to your Laravel application. Easy to use, easy to extend.

## Donate

Find this project useful? You can support me on Patreon

https://www.patreon.com/pixsil

## Installation

For a quick install, run this from your project root:
```bash
mkdir -p App/Classes/Menu
wget -O App/Classes/Menu/MenuFactory.php https://raw.githubusercontent.com/pixsil/Laravel-Menu/main/Classes/Menu/MenuFactory.php
wget -O App/Http/Middleware/MenuMiddleware.php https://raw.githubusercontent.com/pixsil/Laravel-Menu/main/Http/Middleware/MenuMiddleware.php
wget -O App/Providers/MenuServiceProvider.php https://raw.githubusercontent.com/pixsil/Laravel-Menu/main/Providers/MenuServiceProvider.php
```

Then add the following line to your config/app.php

```php
App\Providers\MenuServiceProvider::class,
```

For the middleware to work, add the following to $routeMiddleware in Http/Kernel.php:

```php
'menu' => \App\Http\Middleware\MenuMiddleware::class,
```


## Usage

You can set the active menu with a route middleware or in the controller. See for the controller configuration below.

This is how you set the active menu with in the route file:

```php
Route::get('/post/{id}', function ($id) {
    //
})->middleware('menu:blog');
```

With the following code you can render the word "active" if name corresponse to the active menu.
```php
app(MenuFactory::class)->renderActive('name')
```

### Set per controller

You can use the following function to set the active menu from the controller:

```php
app(MenuFactory::class)->setActive('name');
```

## Extend ideas

Is it nice to create a facade for this?
