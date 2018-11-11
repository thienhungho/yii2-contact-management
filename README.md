Yii2 Contact Management System
====================
Contact Management System for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-contact-management "*"
```

or add

```
"thienhungho/yii2-contact-management": "*"
```

to the require section of your `composer.json` file.

### Migration

Run the following command in Terminal for database migration:

```
yii migrate/up --migrationPath=@vendor/thienhungho/ContactManagement/migrations
```

Or use the [namespaced migration](http://www.yiiframework.com/doc-2.0/guide-db-migrations.html#namespaced-migrations) (requires at least Yii 2.0.10):

```php
// Add namespace to console config:
'controllerMap' => [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'migrationNamespaces' => [
            'thienhungho\ContactManagement\migrations\namespaced',
        ],
    ],
],
```

Then run:
```
yii migrate/up
```

Config
------------

Add module ContactManage to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Contact Manage
     */
    'contact-manage' => [
        'class' => '\thienhungho\ContactManagement\modules\ContactManage\ContactManage',
    ],
    ...
],
...
```

Models
------------

[ContactForm](https://github.com/thienhungho/yii2-contact-management/tree/master/src/models/ContactForm.php)

Modules
------------

[ContactBase](https://github.com/thienhungho/yii2-contact-management/tree/master/src/modules/ContactBase), [ContactManage](https://github.com/thienhungho/yii2-contact-management/tree/master/src/modules/ContactManage)

Functions
------------

[Core](https://github.com/thienhungho/yii2-contact-management/tree/master/src/functions/core.php)

Models
------------

[Contact](https://github.com/thienhungho/yii2-contact-management/tree/master/src/models/Contact.php)