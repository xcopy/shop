#Setup
- Clone the repo `git@github.com:xcopy/store.git`
- Install packages `composer install`
- Copy `.env.example` file to `.env` 
- Generate app key `php artisan key:generate --ansi`
- Setup database settings in your `.env` file
- Create database `php artisan db:create`
- Run migrations/seeds `php artisan migrate:refresh --seed`
- Run application `php artisan serve`
- Voilà!

#Testing
- Copy `.env.example` file to `.env.testing`
- Setup database settings in your `.env.testing` file (usually, database name will be `<database>_testing`)
- Run `php artisan db:create --env=testing`
- Run `php artisan migrate:refresh --seed --env=testing`
- Run `php artisan test`
