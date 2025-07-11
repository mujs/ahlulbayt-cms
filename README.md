# Ahlulbayt CMS

A modernized PHP web application for managing articles, pages, links, and gallery content, with a focus on best practices, security, and maintainability. This project has been refactored from a legacy codebase to incorporate modern PHP standards.

## Features

*   **Modern PHP Standards:** Refactored to use up-to-date PHP best practices.
*   **Composer for Dependency Management:** Efficiently manages project dependencies.
*   **PSR-4 Autoloading:** Clean and efficient class loading.
*   **Environment Variables:** Secure configuration using `.env` files.
*   **PDO Database Interaction:** Secure and modern database operations.
*   **Improved Project Structure:** Clear separation of concerns with a `public` web root and dedicated controllers.
*   **Centralized Routing:** A custom router handles URL mapping for better organization.
*   **Modular Block System:** Encapsulated block logic for reusability and maintainability.
*   **Admin Panel:** A secure administration interface for content management.

## Requirements

*   PHP (>= 7.4 recommended)
*   Composer
*   MySQL-compatible database server
*   Web server (Apache, Nginx, or PHP's built-in server)

## Installation

Follow these steps to get the project up and running on your local machine.

1.  **Clone the Repository:**

    ```bash
    git clone https://github.com/YOUR_USERNAME/ahlulbayt-portal.git
    cd ahlulbayt-portal
    ```

2.  **Install Composer Dependencies:**

    ```bash
    composer install
    ```

3.  **Environment Configuration:**

    Create a `.env` file in the project root by copying the example file:

    ```bash
    cp .env.example .env
    ```

    Open the newly created `.env` file and update your database credentials:

    ```
    DB_HOST=localhost
    DB_NAME=your_database_name
    DB_USER=your_database_user
    DB_PASS=your_database_password
    ```

    **Important:** Replace `your_database_name`, `your_database_user`, and `your_database_password` with your actual database credentials.

4.  **Database Setup:**

    *   Ensure your MySQL server is running.
    *   Access the installation script through your web server.
        *   **Using PHP's built-in server:**
            Start the server from the project root:
            ```bash
            php -S localhost:8000 -t public
            ```
            Then, open your web browser and navigate to:
            `http://localhost:8000/install.php`
        *   **Using Apache/Nginx:**
            Configure your web server to point its document root to the `public/` directory of this project. Then, navigate to:
            `http://your-domain.com/install.php` (replace `your-domain.com` with your actual domain or localhost setup).

    *   Follow the on-screen instructions to install the database.

    *   **Security Warning:** After successful installation, **immediately delete** the `install.php` and `install_data.php` files from the `public/` directory:

        ```bash
        rm public/install.php public/install_data.php
        ```

## Usage

### Public Website

Access the main website through your web server:

*   **Using PHP's built-in server:** `http://localhost:8000/index.php`
*   **Using Apache/Nginx:** `http://your-domain.com/index.php` (or `http://your-domain.com/` if pretty URLs are configured)

### Admin Panel

Access the administration panel for content management:

*   **Using PHP's built-in server:** `http://localhost:8000/admin_login.php`
*   **Using Apache/Nginx:** `http://your-domain.com/admin_login.php`

You will need to log in with an administrator account. If you don't have one, you'll need to manually create a user in the `users` table of your database.

## Contributing

Contributions are welcome! Please feel free to open issues or submit pull requests.

## License

This project is open-source and available under the [MIT License](LICENSE).
