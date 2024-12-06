# Job Listing Platform

Welcome to the **Job Listing Platform**, a web application where users can create accounts to post job openings, and others can browse or search for jobs that suit their skills and interests.

## Features

- **User Registration and Authentication**:
  - Create an account to access features.
  - Secure login/logout functionality.

- **Post Jobs**:
  - Registered users can post job listings with details like job title, description, location, salary, and required skills.
  - Edit or delete job posts.

- **View and Search Jobs**:
  - All users can browse a list of available jobs.
  - Filter jobs based on name, and skills.

## Technologies Used

- **Frontend & Backend**:
  - HTML, CSS, JavaScript
  - Framework/Library: [Laravel-Breeze]
    
- **Database**:
  - [SQLite]

- **Authentication**:
  - [Custom Made]

- **Deployment**:
  - [Currently not being hosted]

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/WineSteward/Jobs-Listings.git
    cd Jobs-Listings
    ```

2. **Install dependencies**:
    ```bash
    cd Jobs-Listings
    composer install
    npm install
    ```

3. **Set environment variables**:
    ```bash
   Create a `.env` file directory on the root of the project.
   Change the database name to whatever it may suit you.
   Also you'll need to generate an application key - php artisan key:generate
    ```

5. Run Migrations
    ```bash
   php artisan migrate
    ```

7. Run locally
    ```bash
    npm run dev
    php artisan serve
    ```
