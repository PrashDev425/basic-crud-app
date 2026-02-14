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

- Place project folder inside:
    - `htdocs` (**XAMPP**)

- Start **Apache** and **MySQL**

- Open browser:

  ```
  http://localhost/basic-crud-app/
  ```

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