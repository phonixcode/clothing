# Project 

Clothing E-commerce API using Laravel. This API is responsible for handling product, order and cart within an application, including operations such as creating, updating, viewing, and deleting products.

## Setup Instructions

Follow these steps to set up the project on your local machine.

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL or any other supported database

### Installation

1. Clone the repository:

```shell
   git clone https://github.com/phonixcode/clothing.git
```

2. Navigate to the project directory:

```shell
   cd clothing
```

3. Install dependencies:

```shell
   composer install OR composer update
```

4. Copy the `.env.example` file to `.env`:

```shell
   cp .env.example .env
```

Update the .env file with your database credentials and email settings. 
`DB_DATABASE = database_name`,
`DB_USERNAME = user_name`, 
`DB_PASSWORD = password`.
`MAIL_MAILER`,
`MAIL_HOST`,
`MAIL_PORT`,
`MAIL_USERNAME`,
`MAIL_PASSWORD`,
`MAIL_ENCRYPTION`,
`MAIL_FROM_ADDRESS`,
`MAIL_FROM_NAME`,

5. Run migrations to create the database tables and seed data:

```shell
   php artisan migrate:fresh --seed
```

6. Setup your redis connection (Optional): change `QUEUE_CONNECTION = redis`

You need to start the queue worker to process queued jobs.

```shell
   php artisan queue:work
```

This command starts the queue worker, which will continuously process jobs from the queue until you stop it manually.

Emails will be sent asynchronously in the background using the configured queue driver (Redis).

7. Start the development server:

```shell
   php artisan serve
```

You can now access the application at <http://localhost:8000>.


### Troubleshooting

If you encounter any issues during the setup process, you can refer to the <a href="https://laravel.com/docs/">Laravel documentation</a> for more information and troubleshooting tips.

## Additional Configuration (Optional)

Replace placeholders like `Project Name`, `your-username`, and `project-name` with actual details relevant to your project. This README.md file provides instructions for setting up the project, running migrations, seeding the database, starting the server, and running tests. You can add any additional sections or information as needed.
