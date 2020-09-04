# Closed on Sundays Game Score Backend API
## Requirements
In order to build and test this framework you will need Docker Engine 18 or higher and Docker Compose 1.25 or higher. It may work on older versions but is untested. 

## Usage
1. Clone the repo.
1. Navigate to the cloned repo copy .env.example to create a .env file.
1. Open a terminal and navigate to the cloned Repo. Run `docker-compose up -d`. This will start the required containers and detach from them. 
1. Run the command `docker-compose exec web php artisan key:generate` to create an application key. This will only need to be done the first time you run the application.
1. Confirm that the API works by opening a browser and navigating to http://localhost:8081/hello
1. You should get the message "Hello World" echoed to screen.
1. Before going further, run the command `docker-compose exec web php artisan migrate --seed` to seed the database with some example data.
1. In your browser, navigate to http://localhost:8081/endlessrunner/scores to see a JSON list generated of the scores from the database.

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
