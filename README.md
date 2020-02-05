# "PROJECT NAME"

"DESCRIPTION"

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

- Php 7
- Composer
- "OTHER..."

### Installing

**Step 1:** Download the folder "PROJECT NAME"
```
git clone "LINK REPO GITLAB"
```

**Step 2 [Optional]:** Change branch
```
git checkout dev
```

**Step 3:** Install composer dependencies
```
composer install
```

**Step 4:** Create a .env file
<br />
*You can copy the ".env.example" and rename it to ".env" but be careful not to forget to replace the data*
```
cp .env.example .env
```

**Step 5:** Generate an app encryption key
```
php artisan key:generate
```

<br />

**Launch the server**
```
php -S localhost:80 -t ./public
```

## Development

"DESCRIPTION SPECIFIC DEVELOPMENT"

## Deployment

**Warning:** For installation to composer, do not forget to install it in production mode
```
composer install --no-dev
```

**Step 1:** Change APP_DEBUG in .env by false

    APP_DEBUG=false

"DESCRIPTION SPECIFIC DEPLOYMENT"


**The application is now deploy**

## Built With

* [Lumen](https://lumen.laravel.com/) - The web framework used

## Authors

Project done by the develop team of Fidensio

* **["FUNCTION IN FIDENSIO"] "FISTNAME LASTNAME"** ("FIDENSIO EMAIL") - *Initial work*
