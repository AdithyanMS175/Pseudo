PSEUDO – Freelance Job Marketplace
📌 Project Overview

PSEUDO is a freelance job marketplace built with HTML,CSS,JavaScript PHP and MySQL.
It connects Clients who post projects with Freelancers who apply and work on them, while Admins manage and monitor the platform.

This project simulates real-world platforms like Upwork or Fiverr, making it a perfect academic project to demonstrate skills in web development, database design, and marketplace workflows.

👥 Modules & Features
1️⃣ Admin Module

🔐 Admin Authentication

👥 Manage Clients & Freelancers

📋 View & manage all posted jobs

🚨 Handle complaints raised by users


2️⃣ Client Module

📝 Register/Login as a Client

📢 Post new projects/jobs with budget, deadline, and requirements

🔎 Use advanced search & filters to find freelancers

💬 Chat with freelancers in real-time

⭐ Rate & review freelancers after project completion

💳 Make payments to freelancers (demo integration)

📂 Upload screenshots & rough works for project clarity

3️⃣ Freelancer Module

📝 Register/Login as a Freelancer

🔎 Browse and apply/bid for available jobs

💬 Chat with clients regarding job details

📂 Submit screenshots & rough works to clients

⭐ Receive ratings & reviews from clients

💳 Request/receive payments (demo integration)

🚨 Raise complaints if needed

🛠️ Tech Stack

Frontend: HTML, CSS, JavaScript, Bootstrap

Backend: PHP (Core or OOP-based)

Database: MySQL

Server: Apache (XAMPP / LAMP / WAMP)

⚙️ Installation & Setup
1. Clone the Repository
git clone https://github.com/your-username/pseudo.git

2. Move Project to Server Directory

XAMPP: htdocs/pseudo

WAMP: www/pseudo

LAMP: /var/www/html/pseudo

3. Import Database

Open phpMyAdmin

Create a new database:

CREATE DATABASE pseudo;


Import the pseudo.sql file from the /database folder

4. Configure Database Connection

Update config.php with your database credentials:

$host = "localhost";
$user = "root";   // default user
$pass = "";       // default password
$db   = "pseudo";
$conn = mysqli_connect($host, $user, $pass, $db);

5. Run the Project

Open browser and navigate to:

http://localhost/pseudo

📂 Project Structure
pseudo/
├── assets/           # CSS, JS, Images
├── database/         # Database SQL file
├── includes/         # Config, Header, Footer
├── modules/          # Admin, Client, Freelancer
├── pages/            # Job posting, chat, complaint, payments
├── index.php         # Landing page
├── login.php         # Login page
├── register.php      # Registration page
└── README.md

📸 Screenshots

(Add screenshots of Login, Dashboard, Job Posting, Chat, Complaint, Payments, etc.)

🚀 Future Enhancements

Real payment gateway integration (PayPal, Razorpay)

Email/SMS notifications for bids, messages, and complaints

AI-based freelancer recommendation system

Mobile-friendly responsive design

👨‍💻 Author

PSEUDO – Freelance Job Marketplace
Developed by [Your Name]
