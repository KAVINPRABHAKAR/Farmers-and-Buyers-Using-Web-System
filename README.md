# 🌾 Farmers and Buyers Using Web System

A full-stack web platform that connects farmers and buyers to enable direct agricultural transactions. This system helps eliminate middlemen, improves transparency, and supports rural commerce with a simple user-friendly interface.

---

## 🔧 Tech Stack

- Frontend: HTML, CSS  
- Backend: PHP  
- Database: MySQL

---

## 📁 Project Structure

| File               | Description |
|--------------------|-------------|
| `index.html`       | Landing page for the application |
| `register.php`     | Registration page for farmers and buyers |
| `login.php`        | Login functionality with role-based welcome |
| `dashboard.php`    | Placeholder dashboard after login |
| `config.php`       | MySQL database connection |
| `style.css`        | Styling for UI elements |
| `database.sql`     | SQL script to create the users table and database |

---

## 🚀 How to Run This Project Locally

### 1. Requirements
- PHP installed (XAMPP/WAMP/LAMP/MAMP)
- MySQL or phpMyAdmin
- Web browser

---

### 2. Setup Instructions

1. Clone this repo or download the ZIP  
2. Place the folder in your server root:
   - For XAMPP: `htdocs/farmers-buyers-system/`  
3. Start **Apache** and **MySQL** from XAMPP

---

### 3. Import the Database

1. Open **phpMyAdmin**  
2. Click "Import" and select `database.sql`  
3. This will create the database `farmers_db` and the `users` table

---

### 4. Run the App

Name: Ramesh  
Email: ramesh@farmmail.com  
Password: ****  
Role: Farmer  
✅ Registered successfully!
Email: buyer123@gmail.com  
Password: ****  
👋 Welcome, Priya (buyer)
Email: wrong@user.com  
Password: wrongpass  
❌ Invalid credentials!
index.html → Welcome page

register.php → New user registration

login.php → Existing user login

dashboard.php → Basic dashboard placeholder
### 🖼 Screenshots

#### 🔐 Login Page  
![Login Page](screenshots/login.png)

#### 📝 Registration Page  
![Registration Page](screenshots/register.png)
