# CodeIgniter POS — TFA1/TFA2

IT0049 Web System Technologies — Lab Exercises  
Student: **Adrian Axel V. Santos**

## Project Structure
```
my-ci4-app/
├── app/
│   ├── Config/
│   │   ├── Routes.php
│   │   └── App.php
│   ├── Controllers/   # Pages, Customers, Users, Products
│   ├── Models/        # CustomerModel, UserModel (Query Builder)
│   └── Views/         # pages/, customers/, users/, products/
├── public/            # Web root: index.php + .htaccess
├── database/
│   └── ci4_store.sql  # MySQL export
├── vendor/            # Composer deps (stripped for shared hosting)
├── writable/
├── .env               # Environment config
├── spark
└── .htaccess          # Root: routes to public/
```

## Local Setup (XAMPP)
1. **PHP extensions**: enable `intl`, `mbstring`, `mysqli`, `sqlite3` in `C:\xampp\php\php.ini`
2. **Run migrations**: import `database/ci4_store.sql` into MySQL
   ```bash
   C:\xampp\mysql\bin\mysql.exe -u root ci4_store < database/ci4_store.sql
   ```
3. **Start servers**:
   ```bash
   C:\xampp\mysql\bin\mysqld.exe --datadir=C:/xampp/mysql/data --port=3306
   C:\xampp\php\php.exe spark serve --port=8080
   ```
4. **Visit**: http://localhost:8080

## GitHub
- Repo: https://github.com/aasantos1-oss/my-ci4-app
- Push (token via file, never pasted):
  ```bash
  TOKEN=$(cat ~/gitkey.txt)
  git push -o http.extraHeader="Authorization: token $TOKEN" origin main
  ```

## Deployment (InfinityFree)
1. Upload `app/`, `system/`, `htdocs/`, `vendor/` to `htdocs/` via file manager
2. Rename `.env.production` → `.env`; update `app.baseURL` + DB credentials
3. Import `database/ci4_store.sql` via phpMyAdmin
4. chmod `writable/cache`, `writable/session`, `public/uploads` to 644

## Tech Stack
- PHP 8.2 (CodeIgniter 4.5.x)
- MySQL 10.4 (MariaDB)
- CI4 Models with Query Builder (`findAll()`)
- MVC: Controllers → Models → Views
