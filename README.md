# Sprint 5 Larevel CRUD library

Simple CRUD project made with larevel

### Project Features

-   Show list of books
-   Authentication
-   When logged in, admin can add, remove or edit authors and books
-   Books and authors are saved to mySQL database.

### Prerequisites

-   [AMPPS](https://ampps.com/)
-   [Composer](https://getcomposer.org/)

### Installation

-   Clone repository or download and extract .zip file into _www_ folder inside ampps directory
-   Navigate to project directory and use command line to install required dependancies
-   -   example **composer install**
-   -   example **npm install**
-   Rename **.env.example** file to **.env**:

**Option 1**
Import database into MySQL from project directory _/dump_

**Option 2**

1. create MySQL database
2. Enter your database parameters into **.env** file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD
```

3. Type **php artisan migrate** into command line to create required tables
4. Type **php artisan db:seed --class=UserSeeder** to create admin user (**name:** admin **pass:** admin123)

**Finnaly**
Type **php artisan serve** into command line to start your server.
On first start press **generate key** and refresh the page

_hope it works_

### Author

[Lukas](https://github.com/Lukasring)
