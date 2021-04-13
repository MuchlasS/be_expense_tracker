Integrasi Frontend dan Backend
1. Create database dengan nama bebas *disarankan db_expense_tracker agar tidak perlu mengubah nama database lagi
2. Kemudian buat table = id: PRIMARY, AI && type: ENUM (income, expense) && description: VARCHAR 40 && amount: DOUBLE && created_at: TIMESTAMP, CURRENT TIMESTAMP
3. Download atau Clone repository ini
4. Letakkan folder ke dalam folder 'C:/xampp/htdocs/<folder_ini>'
5. Nyalakan MySql dan Apache pada xampp
6. Download atau Clone repository frontend https://github.com/MuchlasS/frontend-expenses-tracker *Frontend belum ready

Testing API menggunakan Postman
1. Create database dengan nama bebas *disarankan db_expense_tracker agar tidak perlu mengubah nama database lagi
2. Kemudian buat table = id: PRIMARY, AI && type: ENUM (income, expense) && description: VARCHAR 40 && amount: DOUBLE && created_at: TIMESTAMP, CURRENT TIMESTAMP
3. Download atau Clone repository ini
4. Letakkan folder ke dalam folder 'C:/xampp/htdocs/<folder_ini>'

Testing API create.php
1. Gunakan Postman untuk testing API
2. Masukkan url = http://localhost/<nama_folder_ini>/api/balances/create.php
3. Ubah method menjadi POST
4. Tekan tab Headers
5. Kemudian input Content-Type sebagai Key
6. Lalu input application/json sebagai Value
7. Tekan tab Body
8. input json dengan data sebagai berikut = type: income/expense, description: string bebas, amount: double

Testing API update.php
1. Gunakan Postman untuk testing API
2. Masukkan url = http://localhost/<nama_folder_ini>/api/balances/update.php
3. Ubah method menjadi PUT
4. Tekan tab Headers
5. Kemudian input Content-Type sebagai Key
6. Lalu input application/json sebagai Value
7. Tekan tab Body
8. input json dengan data sebagai berikut = type: income/expense, description: string bebas, amount: double, id: id data yang telah dibuat

Testing API delete.php
1. Gunakan Postman untuk testing API
2. Masukkan url = http://localhost/<nama_folder_ini>/api/balances/delete.php
3. Ubah method menjadi PUT
4. Tekan tab Headers
5. Kemudian input Content-Type sebagai Key
6. Lalu input application/json sebagai Value
7. Tekan tab Body
8. input json dengan data sebagai berikut = id: id data yang telah dibuat

Testing API read.php
1. Gunakan Postman untuk testing API
2. Masukkan url = http://localhost/<nama_folder_ini>/api/balances/read.php

Testing API read_single.php
1. Gunakan Postman untuk testing API
2. Masukkan url = http://localhost/<nama_folder_ini>/api/balances/read_single.php
3. Input Key sebagai id, kemudian masukkan value id
