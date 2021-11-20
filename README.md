# Laravel_Trials

PHP 8.0.12 (cli) (built: Oct 21 2021 14:38:26) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.12, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.12, Copyright (c), by Zend Technologies
    
composer global require "laravel/installer"  

brew services start mysql@5.7

brew services stop mysql@5.7


php artisan make:model referral

php artisan make:migration referral

php artisan migrate:reset

php artisan migrate

php artisan make:controller ReferralController --resource

php artisan make:control PostManager/StoreController --invokable (prefered)

php artisan serve
