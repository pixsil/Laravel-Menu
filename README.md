# Laravel-Menu
An awesome Laravel menu service provider

This documentation is not yet finished.

## What is it?

..

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

## Usage

Set an active menu:
```php
app('App\Classes\Menu\MenuFactory')->setActive('name')
```

With the following code you can render the word "active" if name corresponse to the active menu.
```php
app('App\Classes\Menu\MenuFactory')->renderActive('name')
```

I am working on facades to use.

If you dont want to set the active menu in the controller, there is also an middleware you can use.
```php
Route::get('/post/{id}', function ($id) {
    //
})->middleware('menu:blog');
```


## Additional knowledge

..

## Example

..
