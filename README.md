# Laravel Contact Package

## input name, email and message, then system will send you an email

### Install Package
```
composer require daycod/contact
```

### Publish the Vendor
```
php artisan vendor:publish
```
then, select the service provider class below:
```php
DayCod\Contact\ContactServiceProvider::class
```

### Config File in config/contact.php
```php

<?php


return [
    'email_from_name' => 'Your Companies',
    'email_from' => 'yourcompanies@support.com',
];

```
