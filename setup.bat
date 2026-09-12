@echo off
setlocal enabledelayedexpansion

title Grewok Hardware - Automated Setup Wizard
cls
echo ================================================================
echo             GREWOK HARDWARE - AUTOMATED SETUP WIZARD
echo ================================================================
echo This script will configure and prepare everything on your system.
echo Please ensure Apache and MySQL are running in your XAMPP Control Panel.
echo.
pause

echo.
echo [1/8] Checking PHP installation...
php -v >nul 2>&1
if errorlevel 1 (
    echo [ERROR] PHP is not found in your system PATH.
    echo Please add C:\xampp\php to your Windows System PATH or run inside XAMPP Shell.
    pause
    exit /b 1
)
echo [OK] PHP is installed.

echo.
echo [2/8] Checking Composer...
call composer -v >nul 2>&1
if errorlevel 1 (
    echo [ERROR] Composer is not found in your system PATH.
    echo Please install Composer from https://getcomposer.org/Composer-Setup.exe
    pause
    exit /b 1
)
echo [OK] Composer is installed.

echo.
echo [3/8] Checking Node.js and NPM...
call npm -v >nul 2>&1
if errorlevel 1 (
    echo [ERROR] Node.js / NPM is not found.
    echo Please install Node.js from https://nodejs.org/
    pause
    exit /b 1
)
echo [OK] Node.js and NPM are installed.

echo.
echo [4/8] Preparing environment configuration (.env)...
if not exist ".env" (
    echo Copying .env.example to .env ...
    copy .env.example .env >nul
    echo .env file created.
) else (
    echo .env file already exists. Skipping copy.
)

echo.
echo [5/8] Installing PHP Composer dependencies...
echo (This may take 1-2 minutes depending on your internet connection...)
call composer install
if errorlevel 1 (
    echo [WARNING] Composer install had issues. Continuing...
)

echo.
echo [6/8] Generating Application Key...
call php artisan key:generate --force

echo.
echo [7/8] Preparing MySQL Database and Seeding Catalog...
echo Ensuring database 'work_grewok' exists...
if exist "C:\xampp\mysql\bin\mysql.exe" (
    "C:\xampp\mysql\bin\mysql.exe" -u root -e "CREATE DATABASE IF NOT EXISTS work_grewok CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;" >nul 2>&1
) else (
    mysql -u root -e "CREATE DATABASE IF NOT EXISTS work_grewok CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;" >nul 2>&1
)

echo Running Database Migrations and Seeding Products...
call php artisan migrate:fresh --seed --force
if errorlevel 1 (
    echo.
    echo [WARNING] Database migration failed.
    echo Make sure:
    echo  1. MySQL is started in XAMPP.
    echo  2. You created the database 'work_grewok' in http://localhost/phpmyadmin
    echo.
)

call php artisan storage:link

echo.
echo [8/8] Installing NPM packages and building production assets...
call npm install
call npm run build

echo.
echo ================================================================
echo                  SETUP COMPLETED SUCCESSFULLY!
echo ================================================================
echo.
echo To start your website right now:
echo   1. Double click 'run.bat' OR run 'php artisan serve'
echo   2. Open your browser to: http://localhost:8000
echo.
echo Admin Control Panel:
echo   URL:      http://localhost:8000/admin/login
echo   Username: admin@grewok.com (or admin)
echo   Password: grewok@admin
echo.
echo ================================================================
pause
