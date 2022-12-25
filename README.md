
# Laravel 

## Introduction

Hello, my name is M Naufal Badruttamam, and I am a beginner in Backend Developer. Here I want to deepen the Backend Developer Cycle. In this repository, I made a mini post to deepen the PHP programming language and its framework, namely Laravel


## How to run?

there is a problem like this if you don't follow the steps that I gave
```
Warning: require(C:\xampp\htdocs\tourismPortal\bootstrap/../vendor/autoload.php): failed to open stream: No such file or directory in C:\xampp\htdocs\tourismPortal\bootstrap\autoload.php online 17

Fatal error: require(): Failed opening required 'C:\xampp\htdocs\tourismPortal\bootstrap/../vendor/autoload.php' (include_path='.;C:\xampp\php\PEAR') in C: \xampp\htdocs\tourismPortal\bootstrap\autoload.php on line 17
```
etc

Therefore, I suggest to follow the steps that I provide:

```
1. Open cmd or other terminal then look for the folder that will be used to store the repository
2. git clone https://github.com/Caknoooo/laravel-app.git
3. Go to the folder application using cd command on your cmd or terminal
4. Run composer install on your cmd or terminal
5. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
6. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
7. Run php artisan key:generate
8. Open xampp or mamp etc.
9. Connect Apache and MySql
10. Run php artisan migrate
11. Run php artisan db:seed
12. Run php artisan serve
```


## Reference

- **[Web Programming Unpas](https://www.youtube.com/@sandhikagalihWPU)**
- **[Laravel](https://laravel.com/)**
- **[Stackoverflow](https://stackoverflow.com/)**

