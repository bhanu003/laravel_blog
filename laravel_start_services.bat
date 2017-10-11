@ECHO off
cls
:start
ECHO.
ECHO.Script to run Laravel Services
ECHO.
ECHO.
ECHO./*****************  Hello User  ********************/
ECHO.
ECHO.
ECHO 1. Press 1 to  start Laravel 
ECHO 2. Exit
ECHO.
set choice=
set /p choice= Type the number to print text.  
ECHO.
if not '%choice%'=='' set choice=%choice:~0,1%
if '%choice%'=='1' goto con1
if '%choice%'=='2' goto end
ECHO "%choice%" is not valid, try again
ECHO.
goto start
:con1
ECHO Starting Laravel
ECHO Changing Directory
d:
ECHO Please wait while Running Commands
cd D:/xampp/htdocs/bhanu/laravel/blog
ECHO Checking Laravel Version
php artisan --version
start cmd /k  ECHO Changing Directory in New Command Window
ECHO Starting server will display the localhost url
php artisan serve
goto end

:bye
ECHO BYE
goto end

:end