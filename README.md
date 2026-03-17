# Laravel User Management System

A Laravel admin dashboard for managing users with authentication, role-based access control, and full CRUD functionality.

## Features

- User authentication with Laravel Breeze
- Admin dashboard with user statistics
- User management CRUD
- Role management (admin, user)
- Protected admin routes using middleware
- Form validation
- MySQL database integration
- Blade templating

## Tech Stack

- Laravel
- PHP
- Blade
- MySQL
- Laravel Breeze
- Eloquent ORM

## Demo Pages

- /login
- /admin
- /admin/users

## Admin Login

Email: admin@example.com  
Password: password

## Installation

    git clone <your-repository-url>
    cd user-management-system
    composer install
    npm install
    cp .env.example .env
    php artisan key:generate

Set up your database in .env, then run:

    php artisan migrate --seed
    npm run build
    php artisan serve

## Project Purpose

This project demonstrates Laravel backend development skills including authentication, admin panels, CRUD operations, middleware, and database integration.