# Laravel MySQL JSON internationalisation example

This repository contains a proof of concept for using MySQL's native JSON data type to provide internationalisation
(i18n) support to a Laravel application.

## Getting up and running

The project is homestead compatible, so you can use that to get up and running. If you don't have Homestead installed,
use whatever method you normally use to get a Laravel application up and running. Remember to run the migrations and
seed the database: `php artisan migrate --seed`.

## How it works

The [migration](https://github.com/cwhite92/laravel-json-translations-example/blob/master/database/migrations/2016_03_23_221443_create_posts_table.php)
sets up a posts table, where the translatable fields use the JSON data type. Returning translated field values is
handled by the [Translatable](https://github.com/cwhite92/laravel-json-translations-example/blob/master/app/Translatable.php)
trait.

To see it in action, browse to the `/posts` URL and try switching languages. You should see localised post titles
depending on what language you chose.
