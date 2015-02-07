yii2-articles-module
====================

Articles management for multilingual web applications

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require alexander-emelyanov/yii2-articles-module "dev-master"
```

or add

```
"alexander-emelyanov/yii2-articles-module": "dev-master"
```

to the require section of your ```composer.json``` and run ```composer update```

and the next step...

### Configure you Yii2 application

Add 'articles' module to 'module' section of configuration file your application (i recommend add this module to backend application)

```
    'modules' => [
      // ... some modules
      'articles' => [
          'class' => 'AlexanderEmelyanov\yii\modules\articles\Module',
      ],
      // ... some modules
    ],
```

### Update database

Run migrations for this module

```
./yii migrate --migrationPath=@AlexanderEmelyanov/yii/modules/articles/migrations
```

### Customization

You can use module layout by default (which extend main layout of application and contains main menu of module) or specify your desirable layout in module config:

```
'modules' => [
      // ... some modules
      'articles' => [
          'class' => 'AlexanderEmelyanov\yii\modules\articles\Module',
          'layout' => '@app/views/layouts/main',
      ],
      // ... some modules
    ],
```
