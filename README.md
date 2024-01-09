<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Custom Login with Laravel

This repository demonstrates a simple custom login system built with Laravel, offering flexibility without relying on external packages like Breeze or Fortify.

## Getting Started

### Step 1: Clone the Repository

Clone this repository to your local machine using the following command:

```bash
git clone https://github.com/zibu9/customLogin/
```

### Step 2: Navigate to the Project Directory

Clone this repository to your local machine using the following command:

```bash
cd customLogin
```

### Step 3: Copy Environment Configuration

Copy the env.example file to create a new .env file:

```bash
cp .env.example .env
```

### Step 4: Generate Application Key

Generate the application key with the following command:

```bash
php artisan key:generate
```

### Step 5: Set up the Database

Create a SQLite database for the project:

```bash
touch database/database.sqlite
```

If you are using a different database, update your .env file accordingly.


### Step 6: Run Migrations

Run the migrations to create the necessary database tables:

```bash
php artisan migrate
```

### Step 7: Start the Development Server

Start the Laravel development server:

```bash
php artisan serve

```

Visit http://localhost:8000 in your browser to access the custom login application.





