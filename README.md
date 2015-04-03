OPENi API Builder
================================

OPENi API Builder is a web project that allows developers to add Objects
and combine methods for use with the official [OPENi API Framework](https://github.com/OPENi-ict/api-framework).

[![Latest Stable Version](https://poser.pugx.org/openi-ict/api-builder/v/stable.png)](https://packagist.org/packages/openi-ict/api-builder)
[![Build Status](https://travis-ci.org/OPENi-ict/api-builder.svg?branch=master)](https://travis-ci.org/OPENi-ict/api-builder)


DIRECTORY STRUCTURE
-------------------

      .docs/              contains Documents for building the API Builder (mockups etc.)
      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      migrations/         contains migrations for the database to be configured automatically
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application (not yet fully charged)
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources
      widgets/            contains additional widgets used in this app



REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.
Additional packages required are marked in the composer.json file.


INSTALLATION
------------

Download and extract the zipped master source code from [api-builder](https://github.com/OPENi-ict/api-builder/archive/master.zip)
into a directory named `api-builder` that is directly under the Web root.

Run a command prompt in that directory and type:
~~~
composer install
~~~

This will fetch all the required packages and save them in your vendor folder.

You can then access the application through the following URL:

~~~
http://localhost/api-builder/web/
~~~

**NOTE:** If you do not have [Composer](http://getcomposer.org/), you may install
it by following the instructions at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).


CONFIGURATION
-------------

### Database

Create a file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=apiBuilder',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

Or rename the dbSample.php with your actual data.

Also check and edit the other files in the `config/` directory to customize your application.
If your website is different than http://localhost/api-builder/ , you need to update the url property of the js file in /web/js/swagger/site.js .

At last, you need to rename the /web/indexSample.php to /web/index.php for the application to work and comment out the environment lines if you are in production environment.


TECH STACK USED FOR DEVELOPMENT - MANY THANKS!
---------------------------------------------

[yii 2](http://www.yiiframework.com)

[composer](https://getcomposer.org/)

[bootstrap](http://getbootstrap.com/)

[bootstrap-material-design](https://github.com/FezVrasta/bootstrap-material-design/)

[Krajee Yii Extensions](http://demos.krajee.com/)