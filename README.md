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

Detailed write-up (in repo): [https://github.com/kfwong/cvwo-assignment-1/blob/master/cvwo-assignment-1-writeup.pdf](https://github.com/kfwong/cvwo-assignment-1/blob/master/cvwo-assignment-1-writeup.pdf)

Live demo @ AWS: [http://52.25.200.39/](http://52.25.200.39/)

Default login credential:
Email: writer@example.com
Password: password
## Installation
This project is programmed mainly using PhpStorm by Jetbrains. Recommend to clone the project directly into PhpStorm.

Make sure you have `composer`, `npm`, `gulp` and `php` installed in the your system, `mysql` service is running.

All configuration resides in .env file, change the settings according to your system.

By default, the database configuration:

```
DB_DATABASE=cvwo_assignment_1
DB_USERNAME=root
DB_PASSWORD=root
```
### Using `start.sh`
Run the `start.sh` bash script:

```bash
./start.sh
```

The script will attempt to update composer and pull in npm packages required by the project, as well as executing DDL in database and seeding them with data for testing.

Comment out the composer & npm update for faster subsequent startup.

If you do not have composer installed globally, make sure you change the syntax in `start.sh` to reference the `composer.phar` in your system.

### Manually

1. Install composer dependencies 
```bash
php composer.phar install
```
2. Install npm dependencies
```bash
npm install
```
3. Run the Laravel Migration Script with seeding option
```bash
php artisan migrate:refresh --seed
```
4. Run Gulp task (For compiling javascript/stylesheets to proper folder)
```bash
gulp
```
5. Starts the server locally, by default visit: [http://localhost:8000](http://localhost:8000)
```bash
php artisan serve
```

### Deployment (AWS)
1. Create a new Ubuntu Server AMI instance.
2. Configure AWS security group, allow access on following ports: SSH(22), HTTP(80), MYSQL(3306)
3. Create server keypair, setup association so local machine is recognize by the server through SSH/
4. On the server, execute apt-get command to install apache, php, php5-mcrypt, mariadb, git-core
5. Enable pdo extension in php.ini
6. Clone the cvwo-assignment-1 to /var/www
7. Install composer
8. install npm, node
9. Create empty database schema
10. Create a copy of .env.example and rename it to .env
11. Execute artisan command to generate a new APP_KEY.
12. Fill in database details in .env
13. Run artisan migration with seeding option
14. Globally install gulp module through npm
15. Execute gulp task
16. Edit apache virtual host to point to /var/www/cvwo-assignment-1/public folder
17. Enable apache mod_rewrite and restart apache service
18. Add AllowOverride All directive to virtual host.
19. Execute chmod to storage folder to make it writable by apache server.
20. Start mysql and apache service.

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
- Server timezone