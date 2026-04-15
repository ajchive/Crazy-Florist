# The Crazy Florist

## 📖 Overview

**Crazy Florist** is a web-based e-commerce system developed as a final project.
It allows users to browse flower products, add items to cart, and place orders using different payment methods such as **Cash on Delivery, GCash, and Maya**.

The system also includes an **Admin Panel** for managing products and orders.

---

## Features

### User Side

* Browse flower products with images 🌷
* Add to cart (login required)
* Checkout system with order details
* View order history (My Orders)
* Login & Registration system

### 🛒 Cart & Checkout

* Add / remove products
* Order summary with total amount
* Payment methods:

  * Cash on Delivery (COD)
  * GCash
  * Maya

### Authentication

* User login/logout system
* Admin login (separate access)
* Session-based access control

### 🛠️ Admin Panel

* Admin login
* Add / Edit / Delete products
* View customer orders
* Manage order status

---

## Technologies Used

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL (phpMyAdmin)
* **Server:** XAMPP

---

## Installation Guide (Local Setup)

### 1. Install XAMPP

Download and install XAMPP.

---

### 2. Move Project Folder

Place the project inside:

C:\xampp\htdocs\

---

### 3. Start Server

Open XAMPP Control Panel and start:

* Apache
* MySQL

---

### 4. Setup Database

1. Open: http://localhost/phpmyadmin
2. Create database:

   ```
   crazy_florist
   ```
3. Import the file:

   ```
   database.sql
   ```

---

### 5. Run the Website

Open your browser and go to:

```
http://localhost/CrazyFlorist/
```

---

## Sample Accounts

### Admin

* Email: [admin@example.com](mailto:admin@example.com)
* Password: admin123

### User

* Register a new account via the website

---

## Project Structure

```
CrazyFlorist/
│
├── admin/                # Admin panel
├── includes/             # Database connection & shared files
├── uploads/products/     # Product images
├── img/                  # Static images (logo, etc.)
├── css/                  # Stylesheets
│
├── index.php             # Homepage
├── shop.php              # Product listing
├── cart.php              # Cart page
├── checkout.php          # Checkout system
├── my_orders.php         # User orders
├── login.php             # User login
├── register.php          # Registration
├── logout.php            # Logout
├── add_to_cart.php       # Cart logic
│
└── database.sql          # Database file
```

---

## Notes

* Login is required before adding items to cart.
* Product images are stored in:

  ```
  uploads/products/
  ```
* Make sure the database is properly imported before running.

---

## Developers

* Your Name
* Group Members (optional)

---

## Project Purpose

This project was developed for academic purposes to demonstrate:

* Full-stack web development
* CRUD operations
* User authentication
* E-commerce system flow

---

## Future Improvements

* Online payment API integration
* Order tracking system
* User profile management
* Mobile responsiveness improvements

---
