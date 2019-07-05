# Nova Errors

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-errors.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-errors)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-errors.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-errors)

Display all form errors in a modal & scroll to the top of the page.

<img width="100%" alt="Laravel Nova Validation Error Package" src="https://user-images.githubusercontent.com/29180903/60738637-0bb0ed80-9f2d-11e9-86c2-2409dbf56e6f.png">


### Install

```
composer require dillingham/nova-errors
```

Add the `Errors` field to your resource

```php
use NovaErrorField\Errors;
```

```php
public function fields(Request $request)
{
    return [
    
        Errors::make(),
        
        ID::make()->sortable(),
        
        //
    ];
}
```

And when validation errors occur:

- it will scroll to the top of the page
- it will display a list of validation errors
