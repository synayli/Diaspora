# Diaspora Website

A company website for Diaspora, rebuilt from scratch using Laravel.

## About the Project

The website presents Diaspora's information security and technology services, company information, media and insights, and contact details.

## Technologies Used

- **Framework:** Laravel
- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Database:** SQLite (development configuration; update if the project uses another database)
- **Build Tool:** Vite
- **Package Managers:** Composer and npm

## Features

- Company overview and information
- Services pages
- Media and insights section with a dynamic news feed
- Certifications and training information
- Contact form
- Responsive website design

## Local Development

1. Clone the repository.
2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install frontend dependencies:

   ```bash
   npm install
   ```

4. Create the environment file:

   ```bash
   cp .env.example .env
   ```

   On Windows, you can copy `.env.example` and rename the copy to `.env` instead.

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure the database and other environment settings in `.env`.
7. Run database migrations if required:

   ```bash
   php artisan migrate
   ```

8. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

9. In a separate terminal, start Vite:

   ```bash
   npm run dev
   ```

## Notes

This project is developed using Laravel and is intended for local development and demonstration before deployment.
