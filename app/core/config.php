<?php

 if($_SERVER['SERVER_NAME'] == 'localhost')
 {
    // database config
    define('DBNAME', 'mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER', '');
    
    define('ROOT', 'http://localhost/mvc/public');
    

 }else
 {
    // database config
    define('DBNAME', 'mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.yourdomain.com');
 }