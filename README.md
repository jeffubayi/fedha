## Fedha

Fedha is  an open source web application made with Laravel.Features of this software:

- Add, Edit, Delete Daily income,expense or any Note.
- In the Dashboard you can see This month Cost with how many income, expense and balance also.
- It has a calculator made with JS.You can calculate with this.
- And also you can see all your summary like all income and expense from all time that you added in this software.


## Installation Process

Clone this repository-
```sh
git clone https://github.com/nayeemdev/incomeExpense.git
```
Goto incomeExpense Folde
```sh
cd incomeExpense
```
Copy .env.example to .env 
```sh
cp .env.example .env
```
Install composer for vendor file
```sh
composer install
```
Create a database and set information to .env


Run migrate (--seed for faker data)
```sh
php artisan migrate --seed
```
Then run 
```sh
php artisan serve
```
GoTo [http://127.0.0.1:8000](http://127.0.0.1:8000) for visiting your income expense manager

For Login:

**email: admin@admin.com**

**password: password**


