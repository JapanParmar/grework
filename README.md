# 🌟 Grewok – Fit For Forever

A premium, modern corporate catalogue and digital procurement platform for **Grewok**, an Indian architectural furniture hardware manufacturer established in 2015.

Engineered with a **Shop-style floating constellation aesthetic**, high-contrast GT Standard typography, dynamic Alpine.js enquiry cart, and an intuitive Admin Control Panel.

---

## 🚀 Quick Setup Guide (For New Users / Beginners)

If you are setting this up on a new computer with **XAMPP**, follow these simple steps:

### 1. Prerequisites (Install these first)
1. **[XAMPP](https://www.apachefriends.org/download.html)** (with PHP 8.2 or 8.3)
2. **[Composer](https://getcomposer.org/Composer-Setup.exe)** (PHP Package Manager)
3. **[Node.js](https://nodejs.org/)** (LTS version)
4. **[Git](https://git-scm.com/)**

---

### 2. Step-by-Step Setup Instructions

#### Step A: Place Project in XAMPP
Place or clone the project folder into your XAMPP `htdocs` directory:
```bash
# Path: C:\xampp\htdocs\grewok
cd C:\xampp\htdocs
git clone <YOUR_REPOSITORY_URL> grewok
cd grewok
```

#### Step B: Start Apache and MySQL
1. Open the **XAMPP Control Panel**.
2. Click **Start** next to **Apache** (turns green).
3. Click **Start** next to **MySQL** (turns green).

#### Step C: Create the Database
1. Open your browser and visit: **[http://localhost/phpmyadmin](http://localhost/phpmyadmin)**
2. Click **"New"** in the left sidebar.
3. Enter database name: `work_grewok`
4. Click **"Create"**.

#### Step D: One-Click Windows Setup (Recommended)
You can simply double-click **`setup.bat`** in the project folder, OR run the following commands in your terminal (`cmd` or PowerShell):

```cmd
# 1. Create environment config file
copy .env.example .env

# 2. Install PHP packages
composer install

# 3. Generate application security key
php artisan key:generate

# 4. Create database tables and seed all 65+ hardware products
php artisan migrate:fresh --seed

# 5. Link storage for uploaded photos
php artisan storage:link

# 6. Install frontend packages and build styles
npm install
npm run build

# 7. Start the local server
php artisan serve
```

---

### 3. Open the Website in Your Browser
Once the server is running, open your web browser:
- 🌐 **Public Website**: [http://localhost:8000](http://localhost:8000)
- 🔒 **Admin Control Panel**: [http://localhost:8000/admin/login](http://localhost:8000/admin/login)

#### Admin Credentials:
- **Email / Username**: `admin@grewok.com` *(or `admin`)*
- **Password**: `grewok@admin`

---

## ⚡ Daily Running Shortcut
Every time you want to run the project in the future:
1. Start **Apache** and **MySQL** in XAMPP Control Panel.
2. Double-click **`run.bat`** (or open terminal and run `php artisan serve`).
3. Visit `http://localhost:8000`.

---

## 📦 Key System Features

1. **Floating Constellation Product Showcase**:
   - Ultra-clean white marble canvas aesthetic (`#f2f4f5` to `#ffffff`)
   - 28px card pill radius with 20px inner image frames
   - Shop Violet (`#5433eb`) interactive micro-accents
2. **Interactive Architectural Catalog**:
   - Live filtering by category (Drawer Channels, Modern Kitchen, Auto Hinges, Wardrobe Solutions, Hydraulic Folding Systems)
   - Real-time Alpine.js keyword search and finish selector
   - Comprehensive technical specifications (load capacity, cycles, steel grade)
3. **Quotation & RFP Enquiry Drawer**:
   - Persistent LocalStorage quote basket
   - Real-time item counter with instant drawer overlay
   - Generates official quotation reference codes (`GWQ-XXXXXX`) with print-friendly receipts
4. **Admin Dashboard**:
   - Full CRUD for products, size pricing matrices, and categories
   - Enquiry pipeline tracking (Pending, Approved, Fulfilled)
   - Product photo and multi-image gallery uploader

---

## 📖 Detailed Documentation
For deep troubleshooting, port conflicts, or step-by-step screenshots guide, please refer to **[SETUP_GUIDE.md](SETUP_GUIDE.md)**.
