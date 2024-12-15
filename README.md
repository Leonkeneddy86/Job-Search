
# 👋 Welcome to our JobSearch! 👋

I decided to create a program to keep track of job offers, with the type of offer, the description, the status of the offer, and the date I launched the offer.


## Screenshots


<img width="960" alt="Captura de pantalla 2024-12-08 195750" src="https://github.com/user-attachments/assets/070eac9e-1483-40fe-8af5-4c6c7a3e2c06">



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
DB_DATABASE=jobs
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

    
## API Reference offers

#### Get all items

```Method: GET
URL: /offers
Code: 200 OK
```

#### Get a specific offer

```Method: GET
URL: /offers/{id}
Code: 200 OK
```

### Create a new offer

```Method: POST
URL: /offers
Code: 200 OK
```

### Remove an offer

```Method: DELETE
URL: /offers/{id}
Code: 200 OK
```
### Updating an existing offer

```Method: PUT
URL: /offers/{id}
Code: 200 OK
```
### Api Reference Feedback


### List News of an Offer

```Method: GET
URL: /offers/{offerId}/news
Code  : 200 OK
```

### Create a New Notice for an Offer
```Method: POST
URL: /offers/{offerId}/news
Code  : 200 OK
```
### Show a Specific News

```Method: GET
URL: /offers/{offerId}/news/{newsID}
Code  : 200 OK
```
### Update a Specific News Item

```Method: PUT
URL: /offers/{offerId}/news/{newsID}
Code  : 200 OK
```
### Delete a Specific News Item

```Method: DELETE
URL: /offers/{offerId}/news/{newsId}
Code  : 200 OK
```

### Common Errors

400 Bad Request: The request could not be processed due to invalid data.
404 Not Found: The offer with the specified ID was not found.
500 Internal Server Error: A server error occurred.

### Additional Notes

Be sure to properly handle errors and validations in the FeedbackController.
Consider implementing authentication and authorisation if necessary to protect these routes.


## 🏃‍♂️🧪 Running Tests

To run tests, run the following command

```bash
  php artisan test

```
## Diagrams made
<img width="960" alt="Captura de pantalla 2024-12-10 132314" src="https://github.com/user-attachments/assets/2b33d588-29b7-45e2-972f-a41301ec55d5">

## Contributing

https://draculatheme.com/


## 🛠 Tech Stack
- Languages: Html, Css, Blade
- Framework: Laravel
- Server: Xampp, Apache, Nodejs
- Database: Mysql
- Others: Composer
