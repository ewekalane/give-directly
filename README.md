https://docs.google.com/document/d/14CYN6fp4vJnnRWdPoElRkoLkLQqdPSHqdMm4cP7u4eY/edit#


# Slim Framework 4 Skeleton Application

[![Coverage Status](https://coveralls.io/repos/github/slimphp/Slim-Skeleton/badge.svg?branch=master)](https://coveralls.io/github/slimphp/Slim-Skeleton?branch=master)

Use this skeleton application to quickly setup and start working on a new Slim Framework 4 application. This application uses the latest Slim 4 with Slim PSR-7 implementation and PHP-DI container implementation. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

```bash
composer create-project slim/slim-skeleton [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writable.

To run the application in development, you can run these commands 

```bash
cd [my-app-name]
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
cd [my-app-name]
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

Run this command in the application directory to run the test suite

```bash
composer test
```

That's it! Now go build something cool.









# Task -



Written portion
Instructions: Please answer the question below to help us understand how you think about different technologies. At GiveDirectly, we value concise yet thorough writing, so try to keep your response under 500 words. 


> What are a couple programming languages you like, and why? What are a couple you dislike, and why?

Deliverable: attach PDF with question and answer to this section. Name the PDF as your firstname_lastname.pdf



Engineering task
Instructions: Implement a service that exposes the endpoints described below. This service is for a library, and we are adding a new ​/request endpoint which allows a user to request a book by title. Endpoints should accept and return valid JSON.  You may use Python/Flask, Ruby/Sinatra, or other reasonably mainstream language or microframework, with a datastore of your choice (Dockerized DB, sqlite3, flatfiles, etc., are all fine).

Note: Please don’t spend much more than 3 hrs on this. If you hit the 3 hour mark and are not done, let us know in your documentation and write up what the remaining steps would have been. We are mainly looking to understand how you approach technical problems. 

Deliverable: public git repo with codebase. Please include basic installation instructions.

Endpoints
Add request endpoint 
This allows users to request a particular book. Ensure email is of a valid format and title exists in our list of titles in the database. Book titles in the library may be seeded and generated however you see fit.
Request

POST /request

- email (string): Requesting user's email address
- title (string): Desired book title

Response

- id (int): ID of the book
- available (boolean): return whether a specific book is available (a book is available if it has not been requested by anyone)
- title (string): Title of the book
- timestamp (string): ISO-8601 formatted date/time the book was requested

Retrieve request endpoint
Allows users to retrieve/see an existing request by using an id, or a list of all existing requests if id is omitted.

Request

GET /request/ -or- GET /request/<id>

Response

If id isn't set, return all existing requests. Otherwise, return the specified request data.

Delete request endpoint
Allows a user to remove an existing request, making that book available.

Request

DELETE /request/<id>

Response

Empty response body

