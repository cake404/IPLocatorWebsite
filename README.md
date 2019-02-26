IP Locator Website
--------------------
This project was a exercise given to me during my internship at etailinsights. The goal of this project was to a create a website that is able to parse through a given IP access log and determine the location and HTTP response of clients that connected to a web server. Another requirement of this website was that it must be able to take IP addresses given by the user and determine their exact location. This website was written in PHP and used an MVC framework called Yii2.

Demo
----
![alt text](https://i.imgur.com/mStrlX0.gif)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

### Install MySQL

Install MySQL on you computer either through a package manager:

```(Ubuntu 18.04 example) $ sudo apt-get install mysql-server```

Or through the MySQL website:

https://dev.mysql.com/downloads/mysql/


CONFIGURATION
-------------

### Database

Create a database in mysql using this command:

```create database iplocatordb;```

Then enter in this command to fill in the database with the necessary information:

```mysql -u username -p database_name < /path/to/IPLocatorWebsite/iplocatordb.sql```

Lastely, Edit the file `config/db.php` with your MySql username and password, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=iplocatordb',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

### Dependencies with Composer

Go to the directory where this project has been cloned:

```cd /path/to/IPLocatorWebsite/```

Then run this command to download any dependencies that this project requires:

```composer install```


RUNNING SERVER LOCALLY
----------------------
Type this command to start the server locally:

```/path/to/IPLocatorWebsite/yii serve```

Then go to ```localhost:8080``` in you web browser, and the index page should be displayed!
