# comrat-core
This is the core repository of the comrat project

### Let's roll !!! ###

* `git clone https://github.com/project-comrat/comrat-core.git comrat`
* `cd comrat`
* `cp .env.example .env`
* `composer install`
* `php artisan key:generate`
* Create a database and inform *.env*
* `php artisan migrate --seed` to create and populate tables
* `php artisan serve` to start the app on http://localhost:8000/