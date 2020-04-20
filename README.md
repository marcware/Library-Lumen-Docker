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
Client secret: mNUu6TyjXWDytb25jZbUDeD3fXAHSYBhUr7o7UoO
Password grant client created successfully.
Client ID: 2
Client secret: 43cdyaQkJlNvgTuzS4V3MHQg9GMcl5dptXINooFZ


````bash
    php artisan passport:client
````
Client ID: 3
Client secret: EIR7jES5JdjqLzAubTIbZxWbp94pOr8YGIvTWpM2


{
    "token_type": "Bearer",
    "expires_in": 31536000,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImI4ZThjZWJiM2ExZTg4Nzg5MDhjYjEwMTZjY2I3ZDcwOTk5NzY0ZmJiZGVmMzVhNDRjNmJiMDQwZTE2M2FlNDM2YjdhODQzOWUwOWNlNzk5In0.eyJhdWQiOiIzIiwianRpIjoiYjhlOGNlYmIzYTFlODg3ODkwOGNiMTAxNmNjYjdkNzA5OTk3NjRmYmJkZWYzNWE0NGM2YmIwNDBlMTYzYWU0MzZiN2E4NDM5ZTA5Y2U3OTkiLCJpYXQiOjE1ODczMTQ1MjksIm5iZiI6MTU4NzMxNDUyOSwiZXhwIjoxNjE4ODUwNTI5LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.veSl0xgdU78w8qlXr0y63UU61OGRW6cPwOLpWf4nvGttNAanXxMVpDyTSiKrJip2gvOZ2maHbnTjcLmu4FmcOfR1aL3sPyNXgRnqZfPuy3W3SoTd6l20XHAm5AF9S1jtSOReVTvPWobj_7bSQk5e4Oabz4eROQoDakYoY1V6-z5rhv004p55ostHo2sPXO9X58qzI2LlfgGHrZo_jrshJMe8M_I_1_oX31EYIT0iuJNxgrunoXIeM6I1WCUeR8HS_wfpclZeCkt2kRQ9E09S3cp5JqPQMo6Fb5hGVNr49SobH1vfQJoKUc1oIqauVz39v7LoUSafu8RgSK8NPpj7XaYAofN1wMx75v5ZKSMiyHqWV79txNUB11_7kYTfZFEvQKJwrCYJnObdYq15IWSoHpfhhY4hDclOd35h9P3GEYJ453VBcJHhmmQUS_LCPR5sIZBYMW2oAX7s8yzIhYUNbHpQukZSO_j3smyS8c9l4yqlzTO4yw4k5Ch4db6KYIkJic-8NBfW90yO9M6Qocv035GFux8pU0nfh6IXUuF9v8_FvEuzgzOWZZp3vhL6JW1QOz8oWmNIgwU9lJXFiFKUZNEfy5yo4Xs09TlQykHbK9OHffuMgWy3mRFpvJCJCokOVxhdwxG-FQI1vNqXhIlJyL09OwoK0-t7nm8J_zUUSb8"
}

