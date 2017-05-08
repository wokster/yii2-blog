Blog module for yii2
====================
Blog module for yii2

Please do not use yet, still under development
Пожалуйста пока не пользуйтесь, еще на стадии разработки

used for educational purposes on my youtube channel:[Yii2 for Blondes and Dummies: lessons, notes, guides](https://www.youtube.com/channel/UC3jTSXXgSvQI2WJ5fX6oIwA)
используется в образовательных целях на моем канале в youtube: [Yii2 для Блондинок и Чайников: уроки, заметки, гайды](https://www.youtube.com/channel/UC3jTSXXgSvQI2WJ5fX6oIwA)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require wokster/yii2-blog "*"
```

or add

```
"wokster/yii2-blog": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply add in config  :
    'modules' => [
....
      'blog' => [
          'class' => 'wokster\blog\Blog',
      ],
....
    ],
