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
..
```

Then add the following line to your config/app.php

```php
App\Providers\MenuServiceProvider::class,
```

## Usage

Set an active menu:
```
app('App\Classes\Menu\MenuFactory')->setActive('name')
```

With the following code you can render the word "active" if name corresponse to the active menu.
```
app('App\Classes\Menu\MenuFactory')->renderActive('name')
```


## Additional knowledge

..

## Example

..
