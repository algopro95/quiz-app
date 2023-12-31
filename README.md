<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirement
- PHP 8.1.17

## Setup Quiz App

- git clone https://github.com/algopro95/quiz-app.git
- composer install
- npm install
- npm run dev and leave it running
- copy .env.example to .env
- change DB_DATABASE=laravel in .env file to your local database name
- php artisan key:generate
- php artisan migrate
- php artisan db:seed --class=QuizSeeder
- php arisan serve

## Setup Admin
- register
- go to the database, access the users table, and change is_admin from 0 to 1

## Running the Quiz
- register
- select the Quiz menu
- press mulai

## Accessing the API
- http://127.0.0.1:8000/api/quizzes
- http://127.0.0.1:8000/api/users

## Import xlsx
- sample quiz.xlsx
