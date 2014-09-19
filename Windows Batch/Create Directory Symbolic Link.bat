:: Creates a symbolic link for directory on Windows (Run it as administrator)
:: Written by A7maDev
:: 19/09/014

echo off
Title Create Directory Symbolic Link
cls
echo.
echo Creates a symbolic link for directory on Windows - By A7maDev
echo ----------------------------------------------------------------
echo.

:: change batch color
color 17
 
:: get source path
set /p sourcePath=From this directory: %=%

echo.

:: get target path
set /p targetPath=To this directory: %=%

echo.

:: get target folder name
set /p directoryName=Directory Name: %=%

echo.

:: create link
mklink /D "%targetPath%\%directoryName%" "%sourcePath%"

echo. 

Pause