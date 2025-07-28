# MY_PHP_PROJECT ON TRIP
# Trip Registration Form (PHP + MySQL)

This is a PHP project that collects user trip details through a form and stores them in a MySQL database using phpMyAdmin.

## Files

- `index.php` – Main file for form and PHP MySQL code  
- `style.css` – Styling for the form  
- `index.js` – Optional JavaScript file  
- `vaction.jpg` – Background image  
- `trip.csv` – (Optional) backup storage file  
- `README.md` – Project instructions

## Features

- User form with fields like name, email, gender, etc.
- Form data saved to MySQL database (phpMyAdmin)
- Data can also be saved in CSV (optional)
- CSS styling for layout and design

## Database Setup

1. Open phpMyAdmin at `http://localhost/phpmyadmin`
2. Create a database named: `lpu trip`
3. Create a table named `trip` with columns:
   - `sno` (INT, AUTO_INCREMENT, PRIMARY KEY)
   - `name` (VARCHAR)
   - `gender` (VARCHAR)
   - `email` (VARCHAR)
   - `phone` (VARCHAR)
   - `desc` (TEXT)
   - `dt` (TIMESTAMP DEFAULT CURRENT_TIMESTAMP)

## How to Run

1. Place the folder inside `C:\xampp\htdocs\`
2. Start **Apache** and **MySQL** in XAMPP
3. Open browser and go to:  
   `http://localhost/PHP_Trip_Form/index.php`
4. Fill the form and submit

## Author

Mani Vardhan
