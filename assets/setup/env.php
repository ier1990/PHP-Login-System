<?php

if (!defined('APP_NAME'))                       define('APP_NAME', 'Login System');
if (!defined('APP_ORGANIZATION'))               define('APP_ORGANIZATION', 'KLiK');
if (!defined('APP_OWNER'))                      define('APP_OWNER', 'msaad1999');
if (!defined('APP_DESCRIPTION'))                define('APP_DESCRIPTION', 'Embeddable PHP Login System');
if (!defined('APP_URL'))                        define('APP_URL', 'http://192.168.0.101/php-guestbook.com/github/PHP-Login-System');
if (!defined('APP_PATH'))                       define('APP_PATH', 'E:/php-guestbook.com/github/PHP-Login-System'); //No slashes on end

if (!defined('APP_PRIVATE_PATH'))               define('APP_PRIVATE_PATH', 'E:/xampp/private'); //No slashes on end

if (!defined('ALLOWED_INACTIVITY_TIME'))        define('ALLOWED_INACTIVITY_TIME', time()+1*60);

if (!defined('DB_DATABASE'))                    define('DB_DATABASE', 'klik_loginsystem');
if (!defined('DB_HOST'))                        define('DB_HOST','127.0.0.1');
if (!defined('DB_USERNAME'))                    define('DB_USERNAME','root');
if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD' ,'1234');
if (!defined('DB_PORT'))                        define('DB_PORT' ,'');

if (!defined('MAIL_HOST'))                      define('MAIL_HOST', 'smtp.gmail.com');
if (!defined('MAIL_USERNAME'))                  define('MAIL_USERNAME', 'example.email@gmail.com');
if (!defined('MAIL_PASSWORD'))                  define('MAIL_PASSWORD', 'example-password');
if (!defined('MAIL_ENCRYPTION'))                define('MAIL_ENCRYPTION', 'ssl');
if (!defined('MAIL_PORT'))                      define('MAIL_PORT', 465);
