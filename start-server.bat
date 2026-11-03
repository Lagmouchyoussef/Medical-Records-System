@echo off
rem Starts MediFolio at http://127.0.0.1:8088  (needs XAMPP MySQL running)
cd /d "%~dp0"
set PHP=C:\xampp\php\php.exe
start "" http://127.0.0.1:8088/
"%PHP%" -S 127.0.0.1:8088 -t public router.php
