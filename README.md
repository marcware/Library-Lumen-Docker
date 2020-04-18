# DATA BASE

## Creación de datos
### Migrations
> database/migrations/2020_04_18_101530_create_authors_table.php
````bash
$ php artisan make:migration CreateAuthorsTable --create=authors
````
````bash
$ php artisan migrate
````

### Factory
Crear una factorya para crear Authors
> database/factories/ModelFactory.php


### Seeder
Generar automáticamente instancias
> database/seeds/DatabaseSeeder.php

````bash
php artisan db:seed
````

## Eliminar Datos
````bash
php artisan migrate:fresh --seed
````

# CONTROLLER

> app/Http/Controllers/AuthorController.php