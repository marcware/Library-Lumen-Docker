# DATA BASE

## Migrations
> database/migrations/2020_04_18_101530_create_authors_table.php
````bash
$ php artisan make:migration CreateAuthorsTable --create=authors
````
````bash
$ php artisan migrate
````

## Factory
> database/factories/ModelFactory.php
````bash
php artisan make:factory AuthorFactory
````



## Seeder
Generar automáticamente instancias
> database/seeds/DatabaseSeeder.php

php artisan make:seeder AuthorsTableSeeder