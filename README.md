yii-processlock
==============

[![License](https://poser.pugx.org/happyproff/yii-processlock/license.svg)](https://packagist.org/packages/happyproff/yii-processlock)

Easy publishing css and js in Yii project.

## Использование

Зависимость в `composer.json`:

```json
"happyproff/yii-statics": "*"
```

Регистрация компонента приложения:

```php
'components' => [
    ...,
    'statics' => [
        'class' => 'happyproff\YiiStatics\YiiStatics',
        'assetsAlias' = 'app.assets', // необязательно
    ],
    ...
]
```

Добавление css:

```php
Yii::app()->statics->css('shop/cart.css'); // Опубликует файл app/assets/shop/cart.css
Yii::app()->statics->js('services.js'); // Опубликует файл app/assets/services.css
```
