<?php

 if($_SERVER['SERVER_NAME'] == 'localhost')
 {
    define('ROOT', 'http://localhost/mvc/public');

 }else
 {
    define('Root', 'https://www.yourdomain.com');
 }