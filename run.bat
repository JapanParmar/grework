@echo off
title Grewok Hardware - Local Server
cls
echo ================================================================
echo             GREWOK HARDWARE - LOCAL SERVER
echo ================================================================
echo.
echo Starting Laravel development server...
echo.
echo Website URL:       http://localhost:8000
echo Admin Login URL:   http://localhost:8000/admin/login
echo.
echo (Press Ctrl + C in this window to stop the server)
echo ================================================================
echo.
php artisan serve
pause
