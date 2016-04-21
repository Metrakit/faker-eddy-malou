# faker-eddy-malou

A [Faker](https://github.com/fzaninotto/Faker) provider for use Eddy Malou sentences as dummy text.

## Install

```sh
composer require metrakit/faker-eddy-malou
```

## Usage

```php
$faker = new Faker\Generator();
$faker->addProvider(new Metrakit\EddyMalou\EddyMalouProvider($faker));
$faker->addProvider(new Metrakit\EddyMalou\TextProvider($faker));

```

This will replace some faker native functions :

```
sentence             // One sentence
paragraph($nb = 3)   // Many sentences, by default it's 3
```
