<?php

/** CONFIGURAÇÃO DO SITE */
define('SITE', [
    'name' => 'Auth em MVC com PHP',
    'desc' => 'Aprendendo a construir uma aplicação de autenticação em MVC com PHP',
    'domain' => 'localauth.com',
    'locale' => 'pt_BR',
    'root' => 'http://localhost/phptips',
    // 'root' => 'https://www.localhost/phptips',
]);

/* SITE MINIFY */
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    require __DIR__.'/Minify.php';
}

/** CONEXÃO DO BANCO DE DADOS */
const DATA_LAYER_CONFIG = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'exercicio',
    'username' => 'root',
    'passwd' => '',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
    ],
];

/* CONFIGURAÇÃO DE REDE SOCIAL */
define('SOCIAL', [
    'facebook_page' => 'victormartins',
    'facebook_author' => 'victormartins',
    'facebook_appId' => '2193729837289',
    'twitter_creator' => '@victormartins',
    'twitter_site' => '@victormartins',
]);

/* CONEXÃO DO EMAIL */
define('MAIL', [
    'host' => 'smtp.sendgrid.net',
    'port' => '587',
    'user' => 'apikey',
    'passwd' => '',
    'mode' => 'tls',
    'from_name' => 'Reinaldo',
    'from_email' => 'reinaldorti@gmail.com',
]);

/* LOGIN DA REDE SOCIAL: FACEBOOK */
define('FACEBOOK_LOGIN', [
    'clientId' => '',
    'clientSecret' => '',
    'redirectUri' => SITE['root'].'/facebook',
    'graphApiVersion' => 'v4.0',
]);

/* LOGIN DA REDE SOCIAL: GOOGLE */
define('GOOGLE_LOGIN', [
    'clientId' => '',
    'clientSecret' => '',
    'redirectUri' => SITE['root'].'/google',
]);
