<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# API RESTful Basic Command

```bash
DB::connection()->getPdo();                         # check connect to db
composer require barryvdh/laravel-debugbar --dev    # i debugbar

php artisan make:model Book -m                      # table books
php artisan make:factory BookFactory --model=Book   # use faker
php artisan make:seeder BooksTableSeeder            # renders data seeder

php artisan migrate --seed  -->  default migrate & seed first time
    php artisan db:seed --class=UsersTableSeeder # -> only seed by class
    php artisan migrate:reset --seed # -> drop all table & data's 
    php artisan migrate:fresh --seed # -> rerender migrate table & down data seed

$ tip phpstorm https://phpstorm.tips/tips/page/4/    

$   php artisan make:controller BookController --resource    
```

# Clean Command

```bash
$ php artisan make:model People -mf
$ php artisan make:model Article -crmf # cr resource controller

$ php artisan make:factory MainFacetory
$ php artisan make:seeder ManagerSeeder

// for required
$table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');
```