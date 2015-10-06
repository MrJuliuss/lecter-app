# Lecter

A flat file wiki built with Laravel 5 and Bootstrap 3.

This repository include a full Laravel app for Lecter. If you already have a Laravel application installed, please see the Lecter package for Laravel 5 https://github.com/MrJuliuss/lecter

<img src="https://raw.githubusercontent.com/MrJuliuss/lecter/master/screenshot.png"/>

## Install

PHP 5.5+ and Composer are required.

Get the app source : `git clone https://github.com/MrJuliuss/lecter-app.git` and launch `composer install`

Set write permissions to the storage folder : `chmod -R 777 storage`.

Launch Lecter install command `php artisan lecter:install`.

Go to your app url.

## Config

Lecter has 2 modes:

- Public mode:

Everybody can see the wiki, and you need to modify directly the markdown files. In `config/lecter.php` set the `private` key to `false`.

- Private mode:

Lecter can be a light private wiki build with the basic Laravel 5 authentication system.

In `config/lecter.php` set the `private` key to `false`.
Set the database config in `config/database.php` and launch `php artisan migrate`.

Now create a user : `php artisan lecter:create-user email password`.

#### App name :

In `config/lecter.php` change `app_name` key to set the app name.

#### Lecter location :

Lecter is by default available to `http://your.app`. To change the location of lecter, set the `uri`.

Example : with `uri` setted to `mywiki`, Lecter is available to `http://your.app/mywiki/`

## License

Lecter is licensed under the [MIT License](https://github.com/MrJuliuss/lecter/blob/master/LICENSE).
