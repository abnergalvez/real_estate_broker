# Real Estate Broker  🏷️ [1.0.0]

This is a prototype that showing the first steps for the construction of a system for a real estate brokerage company, which has clients (sellers), with their respective properties, and associated agents and interested buyers and also the management of their visits and shows their relationships.

This is part of a challenge requested by "Financia Capital".


## 📦 Installation

There are two ways to run the application:

**A) Server integrated in Application:**

Dependencies: Mysql, Composer and PHP 7.3 or higher.

- Download the complete directory.

- With Composer installed run the following command (inside the application directory):
    ```bash
    composer install
    ```
- Create a new database(mysql) with your favorite client.
- You must configure the .env file inside the application in the following variables:
    DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
- Run the migrations and seeders
    ```bash
    php artisan migrate:fresh --seed
    ```
- Run the application with the following command:
    ```bash
    php artisan serve
    ```

- Access http://localhost:8000/


**B) Run a Docker Container**

- Download the complete directory.

- With Docker installed run the following commands (inside the application directory):
    ```bash
    docker-compose up -d
    ```

- Access http://localhost:8000/

## 💻 Usage

    Login in /login with the following credentials : 
    email: super@mail.cl
    password: 123123
    and you will be able to see in the home page, each item and its associated data. 

## 👥 Authors

Abner Galvez C., using PHP Laravel 8.*

## 🛠️ Project status

Completed, awaiting review.