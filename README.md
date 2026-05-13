# Survey & Newsletter Management System

A Laravel-based web application with dynamic admin panel 
for content management, newsletter system, and survey management.

## Features
- Dynamic admin panel for content management
- Custom newsletter creation (heading, description, content)
- Website content display managed from admin panel
- Email subscription system for users
- Bulk newsletter delivery to all subscribers
- Noise at Work Survey with complete CRUD operations
- Survey creation and management

## Tech Stack
- Laravel, PHP, MySQL, JavaScript, Blade Templates

## Installation
git clone [repo-url]
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve