# Sales Performance Evaluation System

## Overview
The Sales Performance Evaluation System is a web-based application designed to assess and analyze sales performance. This system provides insights into sales metrics and helps organizations evaluate employee performance efficiently.

## Installation Guide
Follow these steps to install and set up the project on your local machine.

### Prerequisites
- XAMPP or any local server with Apache and MySQL
- PHP (>=7.4 recommended)
- Web browser (Google Chrome, Firefox, or Edge)

### Step 1: Clone the Repository
```bash
 git clone https://github.com/Kaveen1212/Sales-Performance-Evaluation-System.git
```

Alternatively, you can download the ZIP file and extract it to your local server directory (e.g., `C:\xampp\htdocs\SOF-21-B1-17`).

### Step 2: Start XAMPP
- Open **XAMPP Control Panel**.
- Start **Apache** and **MySQL**.

### Step 3: Create the Database
1. Open your web browser and go to:
   ```
   http://localhost/phpmyadmin/
   ```
2. Click on **New** and create a database named `spes_db`.
3. Import the database file:
   - Click on the `spes_db` database.
   - Go to the **Import** tab.
   - Select the `.sql` file (provided in the `database` folder of the project).
   - Click **Go** to execute the import.

### Step 4: Configure Database Connection
1. Open the file `db_conn.php` located in the project folder.
2. Ensure the database connection settings are correct:
   ```php
   $conn = mysqli_connect($sname, $unmae, $password, $db_name);
   ```
   If you use a different username/password for MySQL, update these values accordingly.

### Step 5: Run the Project
- Open your web browser and go to:
  ```
  http://localhost/SOF-21-B1-17/
  ```
- You should now see the login page for the Sales Performance Evaluation System.

## Employee Login Credentials
Each employee has a unique Agent Code and Password to access their respective dashboard.

| Position       | Agent Code | Password |
|---------------|-----------|----------|
| Manager       | 1010      | 2525     |
| Supervisor    | 1237      | 3535     |
| Team Leader  | 2743      | 4545     |
| Sales Agent  | 4036      | 5555     |
| Cashier      | 8090      | 6565     |

## Features
- User authentication system (Login/Logout)
- Dashboard with sales metrics
- Employee performance evaluation
- Data visualization and reports

## Troubleshooting
### Common Issues & Fixes
- **Error: Unknown database 'spes_db'**
  - Ensure you have created the database manually in phpMyAdmin.
  - Import the provided `.sql` file.

- **Error: Connection failed in `db_conn.php`**
  - Verify that XAMPP’s MySQL server is running.
  - Check the database credentials in `db_conn.php`.

## Contribution
If you'd like to contribute to this project, fork the repository, make changes, and submit a pull request.

## License
This project is open-source.

---
Developed by Kaveen C Deshapriya

