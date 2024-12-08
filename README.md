# Livewire Laravel Authentication Demo

This project demonstrates a Laravel application integrated with Livewire, featuring user authentication. It showcases how Livewire can be used to build dynamic, reactive, and fast front-end interfaces with Laravel.

## Features

- User Registration
- User Login and Logout
- Dynamic, real-time validation with Livewire
- Fully responsive front-end

## Installation and Setup

Follow these steps to set up the project locally:

### Prerequisites

Ensure you have the following installed:

- PHP >= 8.0
- Composer
- Node.js and npm
- MySQL or any other database supported by Laravel

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/vatsal-ajmera/Laravel-Livewire-Application.git
   cd Laravel-Livewire-Application
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install JavaScript dependencies:
   ```bash
   npm install
   npm run dev
   ```

4. Configure the environment:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database credentials:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password
     ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Seed the database (optional):
   ```bash
   php artisan db:seed
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

9. Visit the app in your browser at:
   ```
   http://localhost:8000
   ```

## Usage

- Register as a new user.
- Log in using your credentials.
- Explore features like email verification and password reset.

## Technologies Used

- Laravel 10.x
- Livewire
- Tailwind CSS (or your preferred CSS framework)
- Blade Templates
- MySQL (or your configured database)

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or fixes.

## License

This project is licensed under the [MIT License](LICENSE).
