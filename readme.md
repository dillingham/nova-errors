# Nova Errors

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-errors.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-errors)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-errors.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-errors)

A field to display all form errors

<img width="100%" alt="Laravel Nova Validation Error Package" src="https://user-images.githubusercontent.com/29180903/60738637-0bb0ed80-9f2d-11e9-86c2-2409dbf56e6f.png">

```
composer require dillingham/nova-errors
```

```php
use NovaErrorField\Errors;
```

```php
return [
    Errors::make(),
]
```

->asModal()
->asHeading('The Form has errors')