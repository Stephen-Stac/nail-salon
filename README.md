# Nail Salon Management System

Welcome to the **Nail Salon Management System** project! This Laravel application helps nail salons manage appointments, clients, services, staff, and more.
NB: This project is still in progress
---

## Features

- **Appointment Scheduling:** Book, edit, and cancel appointments with ease.
- **Client Management:** Store and manage client information and visit history.
- **Service Catalog:** List and update available nail services and pricing.
- **Staff Management:** Assign staff to appointments and track schedules.
- **Reporting:** Generate daily, weekly, or monthly business reports.
- **Inventory Tracking:** Monitor product usage and stock levels.

---

## Getting Started

### Prerequisites

- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or another supported database
- [Node.js & npm](https://nodejs.org/) (for frontend assets)
- [Git](https://git-scm.com/)

---

## Installation

1. **Clone the repository:**
   ```
   git clone https://github.com/your-username/nail-salon.git
   cd nail-salon
   ```

2. **Install PHP dependencies:**
   ```
   composer install
   ```

3. **Install Node.js dependencies:**
   ```
   npm install
   ```

4. **Copy and configure environment variables:**
   ```
   cp .env.example .env
   ```
   - Edit `.env` and set your database credentials and other settings.

5. **Generate application key:**
   ```
   php artisan key:generate
   ```

6. **Run database migrations and seeders:**
   ```
   php artisan migrate --seed
   ```

7. **Build frontend assets:**
   ```
   npm run dev
   ```
   *(Or use `npm run build` for production)*

8. **Start the local development server:**
   ```
   php artisan serve
   ```
   - The app will be available at `http://localhost:8000`

---

## Usage

- Access the app at `http://localhost:8000`
- Use the dashboard to manage appointments, clients, and services.

---

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a pull request

---

