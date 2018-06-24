# Kyto Developer Task

API that processes a transaction and returns a receipt with the result.

Berlin, 24.06.2018, by Jovan Bojchevski for Kyto.

## Requirements

- PHP >= 7.1.3
- composer

## Setup

Change to the project directory and run `composer install`.

## Implementation

The implementation uses the Laravel 5.6 `framework-bundle`

I wanted to make the core business logic as decoupled as possible from the underlying framework. To make it clear,
it lives under the `App\Figures` namespace. To print the result on the browser there is 2 specific url's and the code you can find into `App\Http\Controllers`. 
If you want to see the same result into the command line the code you can under the `App\Console\Commands` namespace.   
Everything outside of that namespaces is related to the integration with Laravel.

This application is developed in a way to print figures from the documentation into the browser and into the console.

Both sides are able to accept values what should be minimum size 
(how many lines should have S version, and increase for the other figures based on some rules)
and how many figures should be printed.

## Running the application

1. Change to the project directory
2. Execute the `php artisan serve` command;
3. Browse to the http://localhost:8000/ URL.

Quit the server with CTRL-C.

## Using the API

Example of triangle API:
- first parameter which is the start point
- second parameter how many triangles should be printed

```
http://localhost:8000/api/square/6/3
```

Example of square API:
- first parameter which is the start point
- second parameter how many square should be printed

```
http://localhost:8000/api/triangle/6/3
```

## Using the Command

Example of triangle command:
- first parameter which is the start point
- second parameter how many triangles should be printed
```
php artisan draw:triangle 5 3
```

Example of triangle command:
- first parameter which is the start point
- second parameter how many triangles shou

```
php artisan draw:square 5 3 
```
