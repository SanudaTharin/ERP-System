
# ERP System

This is a web-based ERP (Enterprise Resource Planning) system built using PHP and MySQL. The application allows users to manage customers, items, and generate insightful reports with ease.

## Table of Contents
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)

## Features
- Customer management
- Item management
- Report generation for invoices and items
- User-friendly interface with Bootstrap

## Prerequisites
Before you begin, ensure you have met the following requirements:
- PHP (version 7.4 or higher)
- MySQL (version 5.7 or higher)
- A web server (e.g., Apache, Nginx)
- Composer (optional, for dependency management)

## Installation

Follow these steps to set up the application in your local environment:

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/erp-system.git
   cd erp-system
   ```

2. **Set up the database**
   - Create a new MySQL database named `erp_system`.
   - Import the provided SQL scripts in the `sql` folder to create the necessary tables and initial data.

3. **Configure database connection**
   - Open the `includes/db_connect.php` file.
   - Update the database connection settings:
     ```php
     $host = 'localhost'; // Your database host
     $username = 'your_username'; // Your database username
     $password = 'your_password'; // Your database password
     $database = 'erp_system'; // Your database name
     ```

4. **Start the web server**
   - If you're using a built-in PHP server, you can start it by running:
     ```bash
     php -S localhost:8000
     ```
   - Otherwise, configure your local web server to point to the project directory.

5. **Access the application**
   - Open your web browser and navigate to `http://localhost:8000` (or the configured URL for your web server).

## Usage
- Follow the prompts in the web application to register customers, manage items, and generate reports.

