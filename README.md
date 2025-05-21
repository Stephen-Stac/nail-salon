# Nail Salon Booking System (In Progress)

A full-featured web application for salon appointment booking, built with **Laravel** and **MySQL**. This project provides a seamless experience for clients to book appointments and for salon administrators to manage services, schedules, and gain real-time insights through an intuitive admin dashboard.

---

## Features

- **User Registration & Authentication:** Secure sign-up and login for clients and staff.
- **Appointment Scheduling:** Clients can book, view, and manage their appointments online.
- **Service Management:** Admins can add, edit, or remove salon services and set pricing.
- **Admin Dashboard:** Real-time insights into bookings, revenue, and staff schedules.
- **Staff Management:** Assign staff to appointments and manage their availability.
- **Notifications:** Email or SMS notifications for appointment confirmations and reminders.
- **Responsive Design:** Works on desktop and mobile devices.

---


## Installation & Setup

### Prerequisites

- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [Node.js & npm](https://nodejs.org/)
- [Git](https://git-scm.com/)

### Steps

1. **Clone the repository**
   ```
   git clone https://github.com/your-username/beauty-salon-booking.git
   cd beauty-salon-booking
   ```

2. **Install PHP dependencies**
   ```
   composer install
   ```

3. **Install Node.js dependencies**
   ```
   npm install
   ```

4. **Copy and configure environment variables**
   ```
   cp .env.example .env
   ```
   - Edit `.env` to set your database credentials and other settings.

5. **Generate application key**
   ```
   php artisan key:generate
   ```

6. **Run database migrations and seeders**
   ```
   php artisan migrate --seed
   ```

7. **Build frontend assets**
   ```
   npm run dev
   ```
   *(Use `npm run build` for production)*

8. **Start the development server**
   ```
   php artisan serve
   ```
   - Visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## Project Status

🚧 **This project is currently in progress.**  
Features are being actively developed and improved. Contributions and feedback are welcome!

---

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a pull request

---

## License

This project is licensed under the MIT License.

---


