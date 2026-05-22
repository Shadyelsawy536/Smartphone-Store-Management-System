# Smartphone Store Management System

# Smartphone Store Management System

A web-based inventory management system built with PHP and MySQL for managing smartphone products with secure authentication and CRUD operations.

## Features

* User Authentication System
* Add New Products
* Edit Product Information
* Delete Products
* View Product List
* Secure Database Queries using Prepared Statements
* Responsive User Interface using Bootstrap
* Object-Oriented PHP Structure

## Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap 5
* JavaScript
* Composer

## Project Structure

```bash
project/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── classes/
│   ├── DB.php
│   ├── Item.php
│   └── Authenticate.php
│
├── pages/
│   ├── login.php
│   ├── register.php
│   ├── productsView.php
│   ├── createItem.php
│   └── updateItem.php
│
├── vendor/
├── inventory.sql
├── composer.json
└── README.md
```

## Installation

### 1. Clone Repository

```bash
git clone https://github.com/Shadyelsawy536/smartphone-store-management.git
```

### 2. Open Project Folder

```bash
cd smartphone-store-management
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Create Database

* Open phpMyAdmin
* Create a new database
* Import the `inventory.sql` file

## Database Configuration

Update database credentials inside:

```php
DB.php
```

Example:

```php
private $host = "localhost";
private $user = "root";
private $password = "";
private $dbname = "inventory";
```

## Run the Project

* Start Apache & MySQL using XAMPP
* Move project folder to:

```bash
htdocs/
```

* Open in browser:

```bash
http://localhost/project
```

## Security Features

* Prepared Statements
* Input Validation
* Session Authentication
* Password Protection

## Future Improvements

* Search Functionality
* Pagination
* Product Image Upload
* Admin Dashboard
* User Roles (Admin/User)
* Responsive Design Improvements
* REST API Integration

## Author

**Shady Elsawy**
ظظ
