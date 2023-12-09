<h1 align="center">Test Technique Laravel : Application de Blog avec BackOffice Voyager</h1>

## About Project

This project serves as documentation for a blog application created using Laravel, Voyager for the dashboard, and Laravel UI for user authentication.

## How to use it Step By Step

First, clone the project than set up the environment for the project.

```bash
composer install
```

```bash
npm install
```

```bash
npm run dev
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

now change APP_URL=http://localhost to APP_URL=http://localhost:8000





<h3>Step 1: Migrate the Database</h3>
Migrate the database by running the following command:

```bash
php artisan migrate
```

<h3>Step 2: Populate the Database</h3>
Populate the database with sample data using the following command:

```bash
php artisan db:seed

```


<h3>Step 3: Run Tests</h3>
Run tests to ensure everything is functioning as expected:

```bash
php artisan test
```

<h3>Step 4: Create Admin Credentials</h3>
Create admin credentials to access the dashboard:

```bash
php artisan voyager:admin --create
```


<h3>Step 5: Run the Application</h3>
Finally, run the application using : 

```bash
php artisan serve
npm run dev
```


<h3>Now, everything should be set up, and you can try the application.</h3>
<h5>Side note:</h5>
<p>When adding an article, make sure to clear the cache, as caching is used for the 'article to read' section.</p>

```bash
php artisan cache:clear
```


