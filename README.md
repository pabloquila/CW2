# 🚀 CW2: Admin Dashboard & User Management System

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

Welcome to **CW2**! This is a robust, PHP-based web application designed to handle user authentication, administrative tasks, and reporting. 

---

## ✨ Features

* **🔐 Secure Login System:** Dedicated portal for user and admin access (`login.php`).
* **📊 Interactive Dashboard:** A central hub to view system metrics and navigate the app (`dashboard.php`).
* **👥 User Management:** Add, edit, and manage system users efficiently (`edit.users.php`, `users/`).
* **📈 Reporting:** Built-in tools for generating and viewing reports (`reports/`).
* **🛡️ Admin Controls:** Segregated administrative functionalities for elevated access (`admin/`).

---

## 💻 Technologies

* **PHP** 🐘
* **HTML5 & CSS3** 🖌️
* **JavaScript** ⚡
* **MySQL / MariaDB** 🗄️ *(for user management and database needs)*

---

## 📁 Project Structure

Here is a quick overview of the file structure and what everything does:

* **`admin/`** 🛡️ Administrative scripts and elevated actions
* **`includes/`** 🧩 Reusable PHP components (e.g., database connections, functions)
* **`reports/`** 📄 Scripts and templates related to report generation
* **`static/`** 🎨 Static assets (CSS styles, JS scripts, images)
* **`templates/`** 🖼️ UI layout files and frontend views
* **`users/`** 👤 User-specific actions and profile management
* **`body.php`** ⚙️ Main body layout component
* **`dashboard.php`** 🎛️ The main dashboard interface after logging in
* **`edit.users.php`** ✏️ Page dedicated to modifying user data
* **`index.php`** 🏠 The landing page of the application
* **`login.php`** 🔑 The authentication portal

---

## 🛠️ Installation & Setup

To get this project running on your local machine, follow these simple steps:

### 1. Prerequisites
Make sure you have a local server environment installed. We recommend:
* XAMPP (Windows/Mac/Linux)
* MAMP (Mac)
* WampServer (Windows)

### 2. Clone the Repository
Open your terminal and clone this repository into your local server's root directory:
> `git clone https://github.com/pabloquila/CW2.git`

### 3. Database Setup
* Open phpMyAdmin.
* Create a new database for the project.
* Update your database credentials inside the `includes/` folder.

### 4. Run the App
Open your web browser and navigate to:
> `http://localhost/CW2/index.php`

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! 

1. Fork the Project
2. Create your Feature Branch
3. Commit your Changes 
4. Push to the Branch 
5. Open a Pull Request

---
