
## Requirements to run this project

This project was developed in a development environment using the following technologies:

* xampp
* mysql
* laravel
* eloquent

## First steps

### Database
You will need to create a local database named `"ict-db"` (ict stands for infocasas test), or if you want you can change the ref database name that is stored in the variable`"DB_DATABASE"` stored in the `.env` file.

### To run the project
Open a terminal and execute:
* `composer install`.
* Then to run the migration run `php artisan migrate`, if executing this command results in a message that says: 'Nothing to migrate', please first run `php artisan migrate:reset` and then run `php artisan migrate`.
* To have test data run `php artisan db:seed`.
* At this point you should have everything, make sure your `apache` and `mysql` services are running in `xampp` and run `php artisan serve` in your terminal.

## Testing endpoints
You can test the endpoints using the `front end` or you can test them by using the `postmark collection` attached on the email I have sent you containing the links to the repos.

To import the postmark collection simply click on the `import` button in your postmark workspace and drag and drop the file.
