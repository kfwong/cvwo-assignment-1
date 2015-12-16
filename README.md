# CVWO Assignment 1 - Not Your Typical Blogging Assignment
NUS Computing for Voluntary Welfare Organisation, AY2015/16—Assignment 1.

Author: Wong Kang Fei

Matriculation No.: A0138862W

Learn about the programming skills required for CVWO’s summer project and go through a website development cycle.The focus of this assignment is to promote proper code structure and coding techniques, familiarity
with Structured Query Language (SQL) and the various development tools. Expected to build up a good web programming foundation through this assignment,
and prepare for one development cycle over the summer.

Issue date: 10 December 2015

Mid-assignment submission due date:   19 December 2015

Final submission due date:            5 January 2016
            
## Installation
This project is programmed mainly using PhpStorm by Jetbrains.

Make sure you have `composer`, `npm`, `gulp` and `php` installed in the your system, `mysql` service is running.

By default, the database configuration reside within .env file:

```
DB_DATABASE=cvwo_assignment_1
DB_USERNAME=root
DB_PASSWORD=root
```

Run the `start.sh` bash script:

```bash
./start.sh
```

The script will attempt to update composer and pull in npm packages required by the project, as well as executing DDL in database and seeding them with data for testing.

Comment out the composer & npm update for faster subsequent startup.

If you do not have composer installed globally, make sure you change the syntax in `start.sh` to reference the `composer.phar` in your system.


## Notes
- [Model Factory with seeder relationship setup](https://laracasts.com/discuss/channels/code-review/model-factory-referencing-a-foreign-key?page=1)
- [Laravel Development with PhpStorm](http://blog.jetbrains.com/phpstorm/2015/01/laravel-development-using-phpstorm/)
- [Laravel built-in Authentication Guide](http://laravel.com/docs/5.1/authentication)
- [Route Model Binding](https://laracasts.com/series/laravel-5-fundamentals/episodes/18)
- [Session Flash Message](https://laracasts.com/series/laravel-5-fundamentals/episodes/20)
- [Controller Middleware](http://laravel.com/docs/5.0/controllers#controller-middleware)

## Issue Unresolved
- Seeding with model relationship
- PhpStorm autocomplete hint (IDE issue)