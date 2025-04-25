# 📚 Class Booking System

A Laravel-based class booking system featuring **three dashboards**:

-   🛠️ **Admin**
-   👨‍🏫 **Instructor**
-   👤 **User**

---

## 🚀 Features

### 👨‍🏫 Instructor

-   Schedule classes with time and date.
-   View upcoming classes.
-   Cancel scheduled classes.
-   📧 Students get notified by email when a class is cancelled.

### 👤 User

-   View available classes created by instructors.
-   Book classes.
-   View and cancel their bookings.

### 🔐 Authentication

-   Sign up and login system.
-   Role-based dashboards for Admin, Instructor, and User.

---

## 🛠️ Getting Started

1. **Clone the Repository**

    ```bash
    git clone https://github.com/abdullah-ayyash/class-booking-system.git
    cd class-booking-system
    ```

2. **Setup Environment**

    ```bash
    cp .env.example .env
    ```

    Edit the `.env` file and update:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_db_username
    DB_PASSWORD=your_db_password

    MAIL_MAILER=smtp
    MAIL_HOST=mailpit
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"
    ```

3. **Install Dependencies**

    ```bash
    composer install
    npm install
    ```

4. **Docker & Laravel Sail**
   Make sure **Docker Desktop** is installed.

    Add this to your shell config file (`~/.bashrc`, `~/.zshrc`, etc.):

    ```bash
    alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
    ```

    Then restart your terminal or run:

    ```bash
    source ~/.bashrc   # or source ~/.zshrc
    ```

    Start the application:

    ```bash
    sail up -d
    ```

5. **Run Vite (Frontend Dev Server)**

    ```bash
    npm run dev
    ```

6. **Run Laravel Queue Worker**

    To process queued jobs like email notifications:

    ```bash
    sail artisan queue:work
    ```

7. **Access the Web App**
   Open your browser to:
    ```
    http://localhost
    ```

---

🎉 That’s it! Your Laravel class booking system is now up and running.
