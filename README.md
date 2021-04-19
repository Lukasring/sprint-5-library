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
-   -   example _composer install_
-   -   example _npm install_

**Then**
Import database into MySQL from project directory _/dump_

**or**

1. create MySQL database
2. inside _.env_ file add your connection to database parameters:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD
```

3. Type _php artisan migrate_ into command line to create required tables
4. Type _php artisan db:seed --class=UserSeeder_ to create admin user (**name:** admin **pass:** admin123)

**Finnaly**
Type **php artisan serve** into command line to start your server.

_hope it works_

### Author

[Lukas](https://github.com/Lukasring)
