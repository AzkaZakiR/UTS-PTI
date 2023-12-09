# Car Rental Management System

This project is a CRUD-based application for managing rental cars. It allows users to perform operations such as adding, viewing, updating, and deleting car listings.

<h1>Fitur</h1>
<h2> Admin: </h2>

-   **Create:** Add new car listings with details such as make, model, year, and availability.

-   **Read:** View a list of available cars along with their details.

-   **Update:** Modify information for existing car listings.

-   **Delete:** Remove a car listing from the system.

-   **Read Transaction:** Read Recent Transactions.

-   **Update Transaction:** Approve a Transactions made by users.

<h2> Customer: </h2>

-   **View Rental Cars:** See a list of cars along with their details such as model, brand, engine, year and price.

-   **Rent a car:** Rent a car up to a month with live pricing that updates depending on the date.

<h1>Website</h1>

http://azkazk11.my.id

<h3>Login menggunakan Akun:</h3>

username/email: admin/admin@gmail

password: admin

<h1>Cara Menjalankan:</h1>

1. Clone project ini atau download melalui ZIP
2. Jalankan Composer Install di direktori folder
3. rename .env.example menjadi .env atau run command copy .env.example .env
4. Buka File env dan ganti konfigurasinya menyesuaikan settingan Database
5. Run commmand php artisan key:generate
6. Run command php artisan migrate kemudian php artisan db:seed untuk seed Database atau
7. Run command php artisan migrate:fresh --seed untuk seed Database atau import database rentacar.sql
8. Run php artisan serve untuk Menjalankan aplikasi
