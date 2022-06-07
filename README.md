## Fedha

Fedha is a web application that helps you keep track of your finances

- Add, Edit, Delete Daily income,expense or any Note.
- In the Dashboard you can see This month Cost with how many income, expense and balance also.
- It has a calculator made with JS.You can calculate with this.
- And also you can see all your summary like all income and expense from all time that you added in this software.


## Installation Process

Clone this repository-
```sh
git clone https://github.com/nayeemdev/fedha.git

cd fedha

cp .env.example .env

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



