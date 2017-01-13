
composer require sharmaji/jsonviewer:dev-master
```
## Register with config/app.php
Register the service providers to enable the package:
```
Sharmaji\Jsonviewer\Providers\AppServiceProvider::class,
```

Autoload it:
```
composer dumpautoload
```
## Test with Laravel
```
php artisan serv
```
Browse to http://localhost:8000/dashboard

# Test the Package
In the packages repository folder:
```
composer install
vendor/bin/phpunit
```
