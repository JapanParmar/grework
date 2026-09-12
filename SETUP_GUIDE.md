# 🚀 Complete Beginner Setup Guide – Grewok Hardware Website

This step-by-step guide is written for **anyone (even with zero programming experience)** to set up and run the Grewok project on a Windows computer using **XAMPP**.

---

## 📋 Table of Contents
1. [Required Software to Install](#1-required-software-to-install)
2. [Step 1: Download or Clone the Project](#step-1-download-or-clone-the-project)
3. [Step 2: Start Apache and MySQL in XAMPP](#step-2-start-apache-and-mysql-in-xampp)
4. [Step 3: Create the Database in phpMyAdmin](#step-3-create-the-database-in-phpmyadmin)
5. [Step 4: Configure the Environment File (.env)](#step-4-configure-the-environment-file-env)
6. [Step 5: Install Backend Dependencies (Composer)](#step-5-install-backend-dependencies-composer)
7. [Step 6: Generate Security Key](#step-6-generate-security-key)
8. [Step 7: Create Tables and Seed Products](#step-7-create-tables-and-seed-products)
9. [Step 8: Create Image Storage Link](#step-8-create-image-storage-link)
10. [Step 9: Install Frontend Packages & Compile Styles](#step-9-install-frontend-packages--compile-styles)
11. [Step 10: Run the Website](#step-10-run-the-website)
12. [🔑 Admin Panel Credentials](#-admin-panel-credentials)
13. [⚡ Shortcut: 1-Click Windows Setup (Optional)](#-shortcut-1-click-windows-setup-optional)
14. [🛠️ Troubleshooting & FAQ](#️-troubleshooting--faq)

---

## 1. Required Software to Install

Before starting, make sure you have installed these 4 free tools on your Windows computer:

| Software | Version Required | Download Link | Notes |
| :--- | :--- | :--- | :--- |
| **XAMPP** | PHP 8.2 or 8.3 | [apachefriends.org](https://www.apachefriends.org/download.html) | Provides Apache web server, PHP & MySQL |
| **Composer** | Latest | [getcomposer.org](https://getcomposer.org/Composer-Setup.exe) | Download and run the `.exe` installer |
| **Node.js** | v18, v20, or v22 (LTS) | [nodejs.org](https://nodejs.org/) | Needed to compile modern CSS & Vite assets |
| **Git** | Latest | [git-scm.com](https://git-scm.com/download/win) | Needed to clone the branch |

> **Tip during installation:**
> - When installing **Composer**, it will ask for the location of `php.exe`. Point it to `C:\xampp\php\php.exe`.
> - After installing Composer and Node.js, **restart any open terminal or command prompt windows** so the system recognizes the new commands.

---

## Step 1: Download or Clone the Project

Place the project folder inside your XAMPP web root directory (`C:\xampp\htdocs`).

### Option A: Using Git (Recommended)
1. Open **Command Prompt** or **PowerShell** as Administrator.
2. Navigate to your XAMPP folder:
   ```cmd
   cd C:\xampp\htdocs
   ```
3. Clone the branch (replace `<YOUR_REPO_URL>` with your repository link):
   ```cmd
   git clone <YOUR_REPO_URL> grewok
   cd grewok
   ```
4. Checkout your specific branch if needed:
   ```cmd
   git checkout <your-branch-name>
   ```

### Option B: From a ZIP File
1. Extract the downloaded ZIP file.
2. Rename the extracted folder to `grewok`.
3. Move or copy this folder so its path is:
   `C:\xampp\htdocs\grewok`

---

## Step 2: Start Apache and MySQL in XAMPP

1. Open the **XAMPP Control Panel** on your computer.
2. Click the **"Start"** button next to **Apache**.
3. Click the **"Start"** button next to **MySQL**.
4. Both module labels should highlight in **green** with port numbers displayed (`80, 443` for Apache, `3306` for MySQL).

> ⚠️ *If MySQL or Apache fails to start, see the [Troubleshooting](#️-troubleshooting--faq) section at the bottom.*

---

## Step 3: Create the Database in phpMyAdmin

1. Open your web browser (Chrome, Edge, Firefox).
2. Go to this URL: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
3. In the left-hand navigation sidebar, click on **"New"** (or the database icon).
4. In the **Database name** field, enter exactly:
   ```
   work_grewok
   ```
5. Leave the collation as `utf8mb4_general_ci` or `utf8mb4_unicode_ci`.
6. Click the **"Create"** button.
7. You should now see `work_grewok` appear in the left sidebar list.

---

## Step 4: Configure the Environment File (.env)

Laravel uses a configuration file named `.env`.

1. Open **Command Prompt** or **PowerShell** inside the project folder:
   ```cmd
   cd C:\xampp\htdocs\grewok
   ```
2. Copy `.env.example` to create `.env`:
   ```cmd
   copy .env.example .env
   ```
   *(On macOS / Linux use `cp .env.example .env`)*

3. Verify the database settings inside `.env` (it is already pre-configured for XAMPP):
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=work_grewok
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   *(Note: Default XAMPP MySQL has username `root` and NO password, so keep `DB_PASSWORD=` blank)*.

---

## Step 5: Install Backend Dependencies (Composer)

In your terminal window (inside `C:\xampp\htdocs\grewok`), run:

```cmd
composer install
```

⏳ *Wait 1–2 minutes while Composer downloads and sets up all required PHP framework packages.*

---

## Step 6: Generate Security Key

Run this command to generate your unique application encryption key:

```cmd
php artisan key:generate
```

✅ You should see:
`APPLICATION KEY SET SUCCESSFULLY.`

---

## Step 7: Create Tables and Seed Products

This command builds all database tables (products, categories, users, quote enquiries) and automatically imports all 7 hardware categories and 65+ furniture hardware products into your MySQL database:

```cmd
php artisan migrate:fresh --seed
```

✅ You will see output like:
```
Seeding database.
Seeding categories…
✓ 7 categories seeded.
Seeding products…
✓ 65 products seeded.
DONE
```

---

## Step 8: Create Image Storage Link

Ensure uploaded product and catalogue files can be served to the browser:

```cmd
php artisan storage:link
```

✅ You will see:
`The [public/storage] link has been connected to [storage/app/public].`

---

## Step 9: Install Frontend Packages & Compile Styles

Compile Tailwind CSS v4, icons, and Alpine.js assets:

1. Install Node modules:
   ```cmd
   npm install
   ```
2. Build production assets:
   ```cmd
   npm run build
   ```

✅ You will see:
`vite v8.x.x building for production... ✓ built in ~1.5s`

---

## Step 10: Run the Website

Start the local Laravel development server:

```cmd
php artisan serve
```

✅ You will see:
```
  INFO  Server running on [http://127.0.0.1:8000].

  Press Ctrl+C to stop the server
```

Now open your web browser and visit:
👉 **[http://127.0.0.1:8000](http://127.0.0.1:8000)** or **[http://localhost:8000](http://localhost:8000)**

🎉 **The Grewok website is now fully live and running on your computer!**

---

## 🔑 Admin Panel Credentials

To manage products, categories, size variants, or view quote customer enquiries:

1. Visit: **[http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login)**
2. Enter the default administrator credentials:
   - **Email / Username**: `admin@grewok.com` *(or simply `admin`)*
   - **Password**: `grewok@admin`
3. Click **"Log In to Dashboard"**.

From the Admin Panel you can:
- 📦 **Add / Edit Products**: Upload new hardware photos, update technical specifications, configure drawer slide dimensions, and edit prices.
- 🗂️ **Manage Categories**: Add or update categories and subcategory pills.
- 📋 **Track Customer Enquiries**: Review RFQs (Request For Quotes) submitted through the website, mark them as Approved/Fulfilled, or delete them.

---

## ⚡ Shortcut: 1-Click Windows Setup (Optional)

If you are on Windows and don't want to type every command manually:

1. Open `C:\xampp\htdocs\grewok` in Windows File Explorer.
2. Double-click the file named **`setup.bat`**.
3. It will automatically:
   - Create `.env` from `.env.example`
   - Run `composer install`
   - Generate your `APP_KEY`
   - Run database migrations and seed all 65 products
   - Run `npm install` and compile styles with `npm run build`
   - Link public storage
4. Once completed, double-click **`run.bat`** to start the web server anytime!

---

## 🛠️ Troubleshooting & FAQ

### Q1: "MySQL won't start in XAMPP (Port 3306 in use or blocked)"
- **Cause**: You might have another MySQL service or MariaDB running in the background.
- **Solution**:
  1. Press `Windows Key + R`, type `services.msc`, and press Enter.
  2. Find any service named `MySQL` or `MariaDB`.
  3. Right-click on it and choose **Stop**.
  4. Now return to the XAMPP Control Panel and click **Start** on MySQL.

### Q2: "Database [work_grewok] does not exist"
- **Solution**: Make sure you followed **Step 3** to create the database in phpMyAdmin:
  - Go to `http://localhost/phpmyadmin`
  - Click **New**
  - Name it `work_grewok` (spelled exactly with an underscore)
  - Click **Create**

### Q3: "'composer' or 'npm' or 'php' is not recognized as an internal or external command"
- **Cause**: Windows Environment Variables (PATH) needs to know where the tools are installed.
- **Solution**:
  1. Search for **"Edit the system environment variables"** in the Windows Start menu.
  2. Click **Environment Variables...** button.
  3. Under *System variables*, select **Path** and click **Edit**.
  4. Click **New** and add:
     - `C:\xampp\php`
     - `C:\ProgramData\ComposerSetup\bin`
     - `C:\Program Files\nodejs\`
  5. Click OK on all windows, close your terminal, and open a brand new terminal window.

### Q4: "The page has no styles / CSS looks broken or raw text"
- **Solution**: You need to compile the Vite frontend assets. In your terminal, run:
  ```cmd
  npm run build
  ```

### Q5: "No application encryption key has been specified" (500 Error)
- **Solution**: In your terminal, run:
  ```cmd
  php artisan key:generate
  php artisan config:clear
  ```

### Q6: "PHP extension zip or pdo_mysql is missing"
- **Solution**:
  1. In XAMPP Control Panel, click the **Config** button next to **Apache**, then select **PHP (php.ini)**.
  2. Press `Ctrl + F` and search for:
     `;extension=pdo_mysql`
  3. Remove the semicolon `;` at the beginning so it looks like:
     `extension=pdo_mysql`
  4. Also ensure `extension=fileinfo` and `extension=zip` have no semicolon.
  5. Save the file (`Ctrl + S`) and restart Apache and MySQL in XAMPP.

---

### Need Quick Help?
Every time you want to start working on or presenting the website:
1. Start **Apache** and **MySQL** in XAMPP Control Panel.
2. Open terminal in `C:\xampp\htdocs\grewok` and run:
   ```cmd
   php artisan serve
   ```
3. Open `http://localhost:8000` in your browser.
