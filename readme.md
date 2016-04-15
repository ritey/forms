Forms
==========

Forms is a PHP library class to make dynamic form building easy

[![Latest Stable Version](https://poser.pugx.org/ritey/forms/v/stable.svg)](https://packagist.org/packages/ritey/forms) [![Total Downloads](https://poser.pugx.org/ritey/forms/downloads.svg)](https://packagist.org/packages/ritey/forms) [![Latest Unstable Version](https://poser.pugx.org/ritey/forms/v/unstable.svg)](https://packagist.org/packages/ritey/forms) [![License](https://poser.pugx.org/ritey/forms/license.svg)](https://packagist.org/packages/ritey/forms)

## Composer

To install Forms as a Composer package, simply add this to your composer.json:

```json
"ritey/forms": "dev-master"
```

..and run `composer update`.  Once it's installed, if you're using Laravel 5, you can register the service provider in `app/config/app.php` in the `providers` array add :

```php
Ritey\Forms\FormsServiceProvider::class
```

You can also benefit from using a Forms Facade in Laravel 5 by adding to the alias array also in app.php below the providers array

```php
'Forms'    => Ritey\Forms\Facades\FormsFacade,
```

## Documentation

If you're using Laravel, publish the config file by running

```php
php artisan vendor:publish
```

If you aren't using Laravel then you can create a Forms object by:

```php
use Forms\Forms;

$forms = new Forms();
```

For more information about how to use the Forms class, read the [Wiki](https://github.com/ritey/forms/wiki)

## Copyright and Licence

Forms has been written by David Wright and is released under the MIT License.