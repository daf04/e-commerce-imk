<?php

$db_name = 'mysql:host=localhost;dbname=e-commerce-imk';
$user_name = 'root';
$user_password = '';

// $conn = new PDO($db_name, $user_name, $user_password);

// $db_name = 'mysql:host=sql111.epizy.com;dbname=epiz_31988944_himader';
// $user_name = 'epiz_31988944';
// $user_password = 'M5TiMTVvNe9';

$conn = new PDO($db_name, $user_name, $user_password);
