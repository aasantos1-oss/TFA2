# CodeIgniter POS — TFA2

IT0049 Web System Technologies — Technical Formative Assessment 2  
Student: **Adrian Axel V. Santos**  
**FROM ARRAYS TO A REAL DATABASE**

## Project Structure
```
my-ci4-app/
├── app/
│   ├── Config/
│   │   └── Routes.php
│   ├── Controllers/   # Pages, Customers, Users
│   ├── Models/        # CustomerModel, UserModel (Query Builder)
│   └── Views/         # pages/, customers/, users/
├── public/            # Web root: index.php + .htaccess
├── database/
│   └── ci4_store.sql  # MySQL export (customers + users tables)
├── vendor/            # Composer deps (stripped for shared hosting)
├── writable/
├── .env               # Environment config
├── spark
└── .htaccess          # Root: routes to public/
```

## Activity Description
This project extends TFA1 by replacing static PHP arrays in the Customer Accounts and User Accounts pages with a real MySQL database. Records are now retrieved through CI4 Models using Query Builder (findAll()) instead of hardcoded arrays. Per the TFA2 spec, once a page uses a Model, the controller/view logic mirrors the static-array version — only the data source changes.

## Pages
| Route | Controller | Data Source |
|---|---|---|
| / | Pages::index | welcome message |
| /about | Pages::about | about text |
| /customers | Customers::index | customers table via CustomerModel |
| /users | Users::index | users table via UserModel |

## Local Setup (XAMPP)
1. **PHP extensions**: enable intl, mbstring, mysqli in C:\xampp\php\php.ini
2. **Import database**:
   C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE ci4_store;"
   C:\xampp\mysql\bin\mysql.exe -u root ci4_store < database/ci4_store.sql
3. **Start servers**:
   C:\xampp\mysql\bin\mysqld.exe --datadir=C:/xampp/mysql/data --port=3306
   C:\xampp\php\php.exe spark serve --port=8080
4. **Visit**: http://localhost:8080

## GitHub
- Repo: https://github.com/aasantos1-oss/TFA2
- Push (token via file, never pasted in chat):
  TOKEN=$(cat gitkey.txt)
  git push -o http.extraHeader="Authorization: token $TOKEN" origin main

## Deployment (InfinityFree)
1. Upload app/, system/, htdocs/, vendor/ to htdocs/ via file manager
2. Rename .env.production to .env and update app.baseURL + DB credentials
3. Import database/ci4_store.sql via phpMyAdmin
4. Visit: https://aasantostechnical.is-great.net/

## Tech Stack
- PHP 8.2 (CodeIgniter 4.5.x)
- MySQL 10.4 (MariaDB)
- CI4 Models with Query Builder (findAll())
- MVC: Controllers -> Models -> Views
