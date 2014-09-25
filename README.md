MobilePhone Application
=======================

MobilePhone Application

DIRECTORY STRUCTURE
-------------------

```
  assets/             contains assets definition
  commands/           contains console commands (controllers)
  config/             contains application configurations
  controllers/        contains Api controller classes
  mail/               contains view files for e-mails
  models/             contains model classes
  runtime/            contains files generated during runtime
  tests/              contains various tests for the basic application
  vendor/             contains dependent 3rd-party packages
  web/                contains the entry script and Web resources
```


REQUIREMENTS
------------

The minimum requirement by this application  that your Web server supports PHP 5.4.0.

INSTALLATION
------------

### Via Git (clone)

First, clone the repository:

git clone https://github.com/sunjieyong/MobilePhone.git

cd path/to/install

At this point, you need to use Composer to install dependencies. Assuming you already have Composer:

php composer.phar install

Set document roots of your Web server:

/path/MobilePhone/web/

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=MobilePhone',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
