Building a Blog using Laravel
<p>
This is a demo application showing how to build a simple content management system using Laravel. You can read about how it was created on my blog.
</p>

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites

What things you need to install the software.

    Git.
    PHP.
    Composer.
    Laravel CLI.
    Laravel Valet (optional).
    A webserver like Nginx or Apache.
    A Node Package Manager ( npm or yarn ).


## Install

Clone the git repository on your computer

$ git clone https://github.com/chimexGitHub/devblog.git

You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

$ cd devblog

$ composer install

## Setup

    When you are done with installation, copy the .env.example file to .env

$ cp .env.example .env

    Generate the application key

$ php artisan key:generate


    Add your database credentials to the necessary env fields

    Migrate the application

$ php artisan migrate

    Seed Database

php artisan db:seed

    Install node modules

$ npm install

## Run the application

$ php artisan serve

## Built With

[Laravel](https://laravel.com/) - The PHP framework for The PHP framework for Web Artisan

## Acknowledgments

[Laravel](https://laravel.com/docs/) - The excellent documentation explaining how to get started with Laravel.

