# Laravel Project (GLAD Cooking Challenge) 
Example single page application built in Laravel 5.4, VueJS, HTML5 and CSS3.

## Quick installation

Clone the repository and run composer to install all dependencies
```bash
git clone git@github.com:bissolli/laravel-project.git cooking-challenge
cd cooking-challenge
composer install --prefer-dist
```

Create the .env file based on the given example and fill it with your own environment info (at the and generate the encrypt key)
```bash
cp .env.example .env
php artisan key:generate
```

Assuming you have already created the database and set it to the .env file, let's populate our tables and seed our first user
```bash
php artisan migrate --seed
```

Installing javascript dependencies and compiling assets
```bash
npm install
npm run prod
```

Good to go! If you are not using any pre-maid dev environment you can it direct through the artisan
```bash
php artisan serve
```

## First access
Now you just have to access the application by your browser and use the following credentials to log in!
> username: gustavo.bissolli@gmail.com
> password: mypass
