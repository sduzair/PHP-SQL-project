<?php
session_start();
$con = mysqli_connect("bgkkd1y1hccj1maba5na-mysql.services.clever-cloud.com", "unhvl09jg9658o3o", "TYlrBjCJcQbQsPlJJUxv", "bgkkd1y1hccj1maba5na", 3306);
define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/spring22-project/main/');
define('SITE_PATH', 'http://localhost/spring22-project/main/');

define('INSTAMOJO_REDIRECT', SITE_PATH . 'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'media/product/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH', SERVER_PATH . 'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH', SITE_PATH . 'media/product_images/');

define('BANNER_SERVER_PATH', SERVER_PATH . 'media/banner/');
define('BANNER_SITE_PATH', SITE_PATH . 'media/banner/');

define('INSTAMOJO_KEY', 'key');
define('INSTAMOJO_TOKEN', 'token');
//https://www.youtube.com/watch?v=zWLKQ_loJqI&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=24


define('SMTP_EMAIL', 'email@gmail.com');
define('SMTP_PASSWORD', 'password');
//https://www.youtube.com/watch?v=aBbmo1pi5B0&list=PLWCLxMult9xfY_dsYicKGcCLhlZ6YXFMh&index=1


define('SMS_KEY', 'sms_key');
//https://www.youtube.com/watch?v=_XaaIJlkNV4&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=27
