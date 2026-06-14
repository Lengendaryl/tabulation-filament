@echo off
cd /d C:\laragon\www\tabulation-filament

start "Reverb Server" cmd /k php artisan reverb:start --host=0.0.0.0 --port=6001 --debug