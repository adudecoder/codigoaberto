<?php

require __DIR__.'/../vendor/autoload.php';

// use CoffeeCode\DataLayer\Connect;

// $conn = Connect::getInstance();
// $error = Connect::getError();

// if ($error) {
//     echo $error->getMessage();
//     exit;
// }

// $query = $conn->query('SELECT * FROM users');
// var_dump($query->fetchAll());

use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true);

foreach ($list as $userItem) {
    var_dump($userItem->data());
}
