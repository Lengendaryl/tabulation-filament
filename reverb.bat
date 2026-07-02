@echo off
cd /d C:\laragon\www\tabulation-filament

start "Dev Servers" cmd /k npx concurrently -c "#93c5fd,#c4b5fd" "php artisan reverb:start --host=0.0.0.0 --port=6001 --debug" "php artisan queue:listen --tries=1" --names="reverb,queue"