# 🌐 PSEUDO – Freelance Job Marketplace  

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) ![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)



---

## 📌 Project Overview  

**PSEUDO** is a freelance job marketplace built with **HTML, CSS, JavaScript, PHP, and MySQL**.  
It connects **Clients** who post projects with **Freelancers** who apply and work on them, while **Admins** manage and monitor the platform.  

This project simulates real-world platforms like **Upwork** or **Fiverr**, making it a perfect academic project to demonstrate skills in:  
- 🌐 Web Development  
- 🗄️ Database Design  
- ⚡ Marketplace Workflows  

---

## 👥 Modules & Features  

### 🔑 1. Admin Module  
- 🔐 Secure Login for Admin  
- 👥 Manage Clients & Freelancers  
- 📋 View & Manage all Posted Jobs  
- 🚨 Handle User Complaints  

---

### 👤 2. Client Module  
- 📝 Register/Login as a Client  
- 📢 Post new projects/jobs with budget, deadline & requirements  
- 🔎 Advanced Search & Filters to find freelancers  
- 💬 Real-time Chat with freelancers  
- ⭐ Rate & Review freelancers after project completion  
- 💳 Make Payments (Demo Integration)  
- 📂 Upload **screenshots & rough works** for project clarity  

---

### 💼 3. Freelancer Module  
- 📝 Register/Login as a Freelancer  
- 🔎 Browse & Apply/Bid for Jobs  
- 💬 Chat with Clients regarding job details  
- 📂 Submit **screenshots & rough works**  
- ⭐ Receive Ratings & Reviews from Clients  
- 💳 Request/Receive Payments (Demo Integration)  
- 🚨 Raise Complaints if needed  

---

## 🛠️ Tech Stack  

| Category    | Technology |
|-------------|------------|
| **Frontend** | HTML, CSS, JavaScript, Bootstrap |
| **Backend**  | PHP (Core / OOP) |
| **Database** | MySQL |
| **Server**   | Apache (XAMPP / LAMP / WAMP) |

---

## ⚙️ Installation & Setup  

1️⃣ **Clone the Repository**  
```bash
git clone https://github.com/your-username/pseudo.git

2️⃣ Move Project to Server Directory

XAMPP: htdocs/pseudo

WAMP: www/pseudo

LAMP: /var/www/html/pseudo

3️⃣ Import Database

Open phpMyAdmin

Create a new database:


4️⃣ Configure Database Connection (config.php)

$host = "localhost";
$user = "root";
$pass = "";
$db   = "pseudo";
$conn = mysqli_connect($host, $user, $pass, $db);


5️⃣ Run the Project
Open your browser and go to:

http://localhost/pseudo


📂 Project Structure
pseudo/
├── Asset/        # CSS, JS, Images
├── Admin/        # Manage clients, freelancers, jobs
├── Client/       # Job posting, chat, complaints, payments
├── Freelan/      # Work search, chat, complaints
├── Guest/        # Homepage, registration, forgot password
├── Db/           # Database connection/config
├── index.php     # Landing page
├── login.php     # Login page
├── register.php  # Registration page
└── README.md

🚀 Future Enhancements

💳 Real Payment Gateway Integration (PayPal, Razorpay)

📩 Email/SMS Notifications for bids, messages & complaints

🤖 AI-based Freelancer Recommendation System

📱 Mobile-Friendly Responsive Design

👨‍💻 Author

PSEUDO – Freelance Job Marketplace
Developed by Adithyan M S


---


