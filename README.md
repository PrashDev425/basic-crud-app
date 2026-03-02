# Basic CRUD App in PHP 

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Dependencies](#dependencies)
  - [Backend](#backend)
  - [Frontend](#frontend)
  - [Web Server](#web-server)
  - [Development Environment](#development-environment)
- [Database Schema](#database-schema)
- [Project Structure](#project-structure)
- [Run the Application](#run-the-application)
- [Tutorials and Resources](#tutorials-and-resources)
- [Security Warnings](#security-warnings)
- [License](#license)

## Introduction

A simple **CRUD (Create, Read, Update, Delete)** web application built using **PHP**, **MySQL**, and **Pico CSS**.  

This project manages ``student`` records in a ``school_db`` database using **POP (Procedural Oriented Programming)** approach.

## Features

- **Dashboard** with summary statistics
- Add new students
- View all students
- Update student information 
- Delete student records  
- **Responsive UI** using `Pico CSS`

## Technologies Used

- **Backend:** PHP (Core PHP)
- **Database:** MySQL
- **Frontend:** HTML5 + Pico CSS
- **Server:** Apache (**XAMPP**)

## Dependencies

### Backend

- **PHP**  
  - Version: `8.2.12` 
  - Purpose: Server-side scripting and application logic.

- **MariaDB**  
  - Version: `10.4+` (Recommended: `10.6+`)  
  - Purpose: Relational database management system, drop-in replacement for `MySQL`.

### Frontend

- **Pico CSS**
  - Version: `Latest stable`
  - Link: [https://picocss.com/](https://picocss.com/)
  - CDN:
    ```html
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@latest/css/pico.min.css">
    ```
  - Purpose: Lightweight, classless CSS framework for responsive UI.

### Web Server

- **Apache HTTP Server**  
  - Required to serve PHP application.

### Development Environment

- **XAMPP**
    - Link: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)
    - Local development stack (`Apache`, `PHP`, `MySQL`).

- **Visual Studio Code**
    - Link: [https://code.visualstudio.com/](https://code.visualstudio.com/)
    - Recommended code editor for editing ``PHP``, ``HTML``, ``CSS``, and ``JavaScript`` files

## Database Schema

**Link:** [https://github.com/PrashDev425/mysql-lab-12](https://github.com/PrashDev425/mysql-lab-12)

## Project Structure

```
📦basic-crud-app
 ┣ 📂controller
 ┃ ┣ 📂dashboard
 ┃ ┃ ┗ 📜index.php
 ┃ ┗ 📂student
 ┃ ┃ ┣ 📜create.php
 ┃ ┃ ┣ 📜delete.php
 ┃ ┃ ┣ 📜edit.php
 ┃ ┃ ┗ 📜index.php
 ┣ 📂database
 ┃ ┗ 📜connect.php
 ┣ 📂layout
 ┃ ┣ 📜footer.php
 ┃ ┗ 📜header.php
 ┣ 📜config.php
 ┣ 📜index.php
 ┗ 📜README.md
```

### 📂 `controller/`
Contains the application logic.

- **dashboard/**
  - `index.php` : Displays the main dashboard page.
- **student/**
  - `index.php` : Lists all students (Read).
  - `create.php` : Handles student creation (Create).
  - `edit.php` : Updates existing student data (Update).
  - `delete.php` : Deletes a student record (Delete).

### 📂 `database/`
- `connect.php` : Establishes the MySQL database connection.

### 📂 `layout/`
Contains reusable UI components.
- `header.php` : Common header section.
- `footer.php` : Common footer section.

### 📜 `config.php`
Stores global configuration settings.

### 📜 `index.php`
Entry point of the application. Typically redirects or loads the dashboard.

### 📜 `README.md`
Project documentation explaining setup, usage, and security notes.

## Run the Application

### 1. Download & Place Files
- **Copy your project folder** into ``C:\xampp\htdocs\`` (e.g., ``basic-crud-app``).

### 2. Update `config.php`
- Open ``config.php`` and set the ``BASE_URL``:
  ```php
  <?php
  define('BASE_URL', "http://localhost/basic-crud-app/");
  ?>
  ```

### 3. Start XAMPP
  - Start ``Apache`` and ``MySQL`` in the ``XAMPP Control Panel``.

### 4. Create Database (Optional)

- Open : http://localhost/phpmyadmin/.

- Create a new database : https://github.com/PrashDev425/mysql-lab-12

### 5. Access Your App

- In your browser, go to http://localhost/basic-crud-app/.

## Tutorials and Resources

### YouTube Shorts

- **God Tier HTML Programming**:  
  [Watch on YouTube Shorts](https://youtube.com/shorts/ZtyMdRzvi0w?si=mQT5LJ32MyFIgeZS)  

- **PHP in 60 Seconds: The Basics**:  
  [Watch on YouTube Shorts](https://youtube.com/shorts/bXTspwWR9uY?si=z2LKwRLCnhBRmc5E)  

- **PHP Basics: Server-Side Rendering HTML**:  
  [Watch on YouTube Shorts](https://youtube.com/shorts/Z0GsiVQRJJo?si=s29NW2304pp-GbXu)  

### YouTube Videos

- **How to Install XAMPP Server on Windows 11**:  
  [Watch on YouTube](https://youtu.be/G2VEf-8nepc?si=MPT-w3WZ78PQtkGs)  
  A step-by-step tutorial on setting up XAMPP for local development.

- **VS Code in 100 Seconds**:  
  [Watch on YouTube](https://youtu.be/KMxo3T_MTvY)  

- **HTML in 100 Seconds**:  
  [Watch on YouTube](https://youtu.be/ok-plXXHlWw)  

- **HTML - Introduction - W3Schools.com**:  
  [Watch on YouTube](https://youtu.be/it1rTvBcfRg?si=b1ik-vYg9hRIrIYk) 

- **HTML - Forms - W3Schools.com**:  
  [Watch on YouTube](https://youtu.be/VLeERv_dR6Q) 

- **HTML - Tables - W3Schools.com**:  
  [Watch on YouTube](https://youtu.be/e62D-aayveY)  

- **PHP in 100 Seconds**:  
  [Watch on YouTube](https://youtu.be/a7_WFUlFS94) 

- **PHP $_GET and $_POST explained**:  
  [Watch on YouTube](https://youtu.be/6AzAYU8AOhQ)

- **SQL Explained in 100 Seconds**:  
  [Watch on YouTube](https://youtu.be/zsjvFFKOm3c)  

- **PHP how to connect to MySQL database**:  
  [Watch on YouTube](https://youtu.be/-1DTYAQ25bY?si=oURYpYtKaG2m-KBG)    

- **PHP how to query MySQL database**:  
  [Watch on YouTube](https://youtu.be/om_GHl6BrdM)  

- **PHP For Beginners | 3+ Hour Crash Course**:  
  [Watch on YouTube](https://youtu.be/BUCiSSyIGGU?si=IyPYfca60Cl4C7g2)  

### Useful Links

- **HTML5**: [https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)  
  The latest major version of the HyperText Markup Language used to structure content on the web. HTML5 introduces semantic elements, multimedia support (audio and video), improved forms, and enhanced APIs for modern web development.

- **Pico.css**: [https://picocss.com/](https://picocss.com/)  
  A lightweight, open-source CSS framework that provides clean and elegant default styling for HTML elements. Pico.css uses semantic markup and requires no classes for basic styling, making it ideal for minimal and responsive web projects.

- **XAMPP**: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)  
  A free and open-source cross-platform web server solution stack package, which includes Apache, MySQL, and PHP.

- **phpMyAdmin**: [https://www.phpmyadmin.net/](https://www.phpmyadmin.net/)  
  A web-based tool to manage MySQL databases easily.

- **PHP Official Documentation**: [https://www.php.net/docs.php](https://www.php.net/docs.php)  
  The official documentation for PHP.

- **MySQL Documentation**: [https://dev.mysql.com/doc/](https://dev.mysql.com/doc/)  
  Comprehensive documentation for MySQL database management.

## Security Warnings

> [!NOTE]
> **Educational Purposes Only:** This project is intended for learning and demonstration purposes only.

> [!IMPORTANT] 
> This app demonstrates **PHP** & **MySQL** integration. For educational simplicity, the code may use patterns that are **unsafe** for real-world use.

> [!CAUTION]
> This database implementation is intentionally simplified for teaching Class 12 concepts and is **not secure** for production environments.

### **Security Risks Included**

- [x] **SQL Injection (SQLi):** The project demonstrates basic SQL queries that don't use prepared statements, which exposes the system to **SQL injection**. **SQL injection** can allow attackers to execute arbitrary SQL queries on your database, such as bypassing authentication or even dropping tables.

- [x] **Client-Side Validation Only (HTML Default Validation):** The project relies primarily on built-in HTML form validation (e.g., `required`, `type="email"`), without implementing proper server-side validation and sanitization. Since client-side validation can be easily bypassed by ``disabling JavaScript`` or ``modifying requests``, this can allow attackers to submit malicious or invalid data to the server.

- [x] **No Authentication**: The application has ``zero user authentication`` or ``access control``. Anyone with the ``URL`` can create, read, update, or delete student records. No login system, sessions, or role-based permissions exist, making it completely open to ``unauthorized access``.

### **Instructions:**

- Run this only on **localhost** (using **XAMPP**).
- Use a **disposable database** with dummy data.
- Treat every user input as **untrusted** and **dangerous**.

## License

This project is open-source and free to use for learning purposes.