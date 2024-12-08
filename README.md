
# 👋 Welcome to our JobSearch! 👋

I decided to create a program to keep track of job offers, with the type of offer, the description, the status of the offer, and the date I launched the offer.


## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)


## ▶️💻 Installation
- Clone repository
```
git clone https://github.com/Leonkeneddy86/Job-Search.git
```

- Install Composer dependencies

```
composer install
```
- Install Nodejs dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, you uncomment the DB connection lines which are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=insideout_db
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command
```
php artisan key:generate
```
- Execute migrations
```
php artisan migrate:fresh
php artisan migrate:fresh --seed
```
- How to run the Laravel server
```
php artisan serve
```

- If you want to run all this in development environment run the following command
```
npm run dev
```

    
## API Reference

#### Get all items

Method: GET
URL: /offers
Code: 200 OK

#### Get a specific offer

Method: GET
URL: /offers/{id}
Code: 200 OK

### Create a new offer

Method: POST
URL: /offers
Code: 200 OK

### Remove an offer

Method: DELETE
URL: /offers/{id}
Code: 200 OK

### Updating an existing offer

Method: PUT
URL: /offers/{id}
Code: 200 OK

### Common Errors

400 Bad Request: The request could not be processed due to invalid data.
404 Not Found: The offer with the specified ID was not found.
500 Internal Server Error: A server error occurred.
## 🏃‍♂️🧪 Running Tests

To run tests, run the following command

```bash
  php artisan test

```

## Contributing

https://draculatheme.com/


## 🛠 Tech Stack
- Languages: Html, Css, Blade
- Framework: Laravel
- Server: Xampp, Apache, Nodejs
- Database: Mysql
- Others: Composer
