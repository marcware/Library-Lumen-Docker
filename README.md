# DATA BASE

## Creación de datos
### Migrations
> database/migrations/2020_04_18_101530_create_authors_table.php
````bash
$ php artisan make:migration CreateAuthorsTable --create=authors
$ php artisan make:migration CreateBooksTable  --create=books
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

## Controler
> app/Http/Controllers/AuthorController.php

## Router
> /routes/web.php


# COMPOSER

> composer clearcache
> composer dump-autoload
>

#OATUH 2
````bash
    php artisan migrate
````

````bash
    php artisan passport:install
````
> /storage/oauth-private.key
> /storage/oauth-public.key

Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client secret: m6k3wVIDyDvM2SW4sDIm0a5J51wq5MHw80IVhsc3
Password grant client created successfully.
Client ID: 2
Client secret: OzpeLGZB5F7RCnZwtlEMG2x5RispkJNnkcrUyjUC

