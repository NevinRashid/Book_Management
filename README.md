# Book management system

## System analysis
We have a book management system, so we need several entities:
1) Book, which has the properties (title, cover, published_at, author_id, language_id, and category_id).
2) Author, which has the properties (author_name, birth_date, nationality).
3) Category, which has the property (category_name).
4) Language, which has the property (language_name).
- **The relationships between the entities we have are**:
1) Between the book and the author, the relationship is (one to many), as each book has only one author, while the author can write more than one book.
2) Between the book and the category, the relationship is (one to many), as each book belongs to only one specific category, while there can be more than one book within one category.
3) Between the book and the language, the relationship is (one to many), where one book is written in only one language, while more than one book can be written in a language **(here it was not discussed that the book can be translated into other languages, the intention is the original language of the book)**

### Description
This project is a **Book management** built with **Laravel 12** .It allows users to perform **CRUD operations** (Create, Read, Update, Delete) on Book ,It also allows CRUD (create, read, update, delete) operations on author, category, and language. 

### Key Features:
- **CRUD Operations**: Create, read, update, and delete book in the system .
- **CRUD Operations**: Create, update, and delete category,author,language in the system .
- **Form Requests**: Validation is handled by custom form request classes.
- **Seeders**: Populate the database with initial data for testing and development.

### Technologies Used:
- **Laravel 10**
- **PHP**
- **MySQL**
- **XAMPP** (for local development environment)
- **Composer** (PHP dependency manager)

---

## Installation

### Prerequisites

Ensure you have the following installed on your machine:
- **XAMPP**: For running MySQL and Apache servers locally.
- **Composer**: For PHP dependency management.
- **PHP**: Required for running Laravel.
- **MySQL**: Database for the project

### Steps to Run the Project

1. Clone the Repository  
   ```bash
   git clone https://github.com/NevinRashid/Book_Management.git
2. Navigate to the Project Directory
   ```bash
   cd book-task
3. Install Dependencies
   ```bash
   composer install
4. Create Environment File
   ```bash
   cp .env.example .env
   Update the .env file with your database configuration (MySQL credentials, database name, etc.).
5. Generate Application Key
    ```bash
    php artisan key:generate
6. Run Migrations
    ```bash
    php artisan migrate
7. Seed the Database
    ```bash
    php artisan db:seed
8. Run the Application
    ```bash
    php artisan serve
