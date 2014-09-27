yii-statics
==============

[![License](https://poser.pugx.org/happyproff/yii-statics/license.svg)](https://packagist.org/packages/happyproff/yii-statics)

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
Yii::app()->statics->css('shop/cart'); // Опубликует файл app/assets/shop/cart.css
Yii::app()->statics->js('services'); // Опубликует файл app/assets/services.js
```
