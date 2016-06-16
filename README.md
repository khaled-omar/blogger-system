# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Dependencies
This project uses Laravel 5.2 php framework.
* A typical LAMP/WAMP/XAMP or whatever AMP stack you've got.
* Make sure you have [composer](https://getcomposer.org) installed.
* If you're a windows or mac user you may need laravel homestead.

## Set up development environment
* clone the repo.
* `cd blogger-system`
* `composer install`
* `mysql -u root -p`
* `create database blog;`
* `grant all privileges on weresick.* to 'weresickuser'@'localhost'identified by 'password';`
* open the .env.example file and fill in the following part:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=blog
DB_PASSWORD=password
```
and SAVE AS a new file called: `.env`.
* `exit` to get out of the mysql cmd.
* `php artisan migrate`
* `php artisan key:generate`

You're good to go!

## testing
You may test it with php's built-in webserver: `php -S localhost:8000 `. <br/>
And then type `localhost:8000` in your browser's address bar.
