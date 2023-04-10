
---
E Space Mobile App helps people to find e-car charger nearby and charge their electric cars easily.
E Space also gives opportunity to business with giving them **Business Module** that gives people opportunity to have their own chargers and to make use of **Business Module** service to manage those chargers: create tariffs, monitor them, have analytical dashboard and more...

#
### Table of Contents
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Project Structure](#project-structure)
* [Service Interaction Map](#service-interaction-map)
* [Server Infrastructure](#server-infrastructure)
* [Database Backups](#database-backups)

#
### Prerequisites

* <img src="https://github.com/RedberryInternship/example-project-laravel/raw/master/readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
* <img src="https://github.com/RedberryInternship/example-project-laravel/raw/master/readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> *MYSQL@8 and up*
* <img src="https://github.com/RedberryInternship/example-project-laravel/raw/master/readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> *npm@6 and up*
* <img src="https://github.com/RedberryInternship/example-project-laravel/raw/master/readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2 and up*


#
### Tech Stack

* <img src="https://github.com/RedberryInternship/example-project-laravel/raw/master/readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
* <img src="https://github.com/RedberryInternship/example-project-laravel/raw/master/readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#
### Getting Started
1\. First of all you need to clone E Space repository from github:
```sh
git clone https://github.com/RedberryInternship/giorgi-zanqaidze-movie-quotes
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to build your JS/SaaS resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****

##### Now, you should be good to go!


#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```

#
### Running Unit tests
Running unit tests also is very simple process, just type in following command:

```sh
composer test
```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

when working on JS you may run:

```sh
  npm run dev
```
it builds your js files into executable scripts.
If you want to watch files during development, execute instead:

```sh
  npm run watch
```
it will watch JS files and on change it'll rebuild them, so you don't have to manually build them.



#
### Project Structure

```bash
├─── app
│   ├─── Console
│   ├─── Exceptions
│   ├─── Http
│   ├─── Providers
│   │___ Rules
│   │... Models
├─── bootstrap
├─── config
├─── database
├─── node-modules
├─── packages
├─── public
├─── resources
├─── routes
├─── scripts
├─── storage
- .env
- artisan
- composer.json
- package.json
```

Project structure is fairly straitforward(at least for laravel developers)...

For more information about project standards, take a look at these docs:
* [Laravel](https://laravel.com/docs/6.x)

Aside from laravel/nova specific structure here are some of the key points that worth pointing out.

In **app/Library** we have isolated the core project(E Space) functionality concerning heavy calculation, cron jobs and most of the complex procedures that happen on daily bases. 
For more information about task scheduling in Laravel, please take a look:
[Laravel - Task Scheduling](https://laravel.com/docs/6.x/scheduling)

When request hits controller, controller speaks to the one of the **Interactor** in the **app/Library/Interactor** folder, which understand the task and with the help of *Entities* in the **app/Library/Entities** this task is decomposed into several small tasks and each of them is assigned to the entity to take care of.

As a result entities solve decomposed tasks and speak back to the interactor and interactor himself responds to the controller and then controller sends back an appropriate response to the user.

[Database Design Diagram](./readme/uml/uml.md "Draw.io")

<a href="https://ibb.co/N2nZVj7"><img src="https://i.ibb.co/N2nZVj7/Movie-quotes-draw-Sql.png" alt="Movie-quotes-draw-Sql"></a>