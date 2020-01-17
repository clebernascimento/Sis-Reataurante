<?php

/*O NOME DO BANCO DE DADOS*/
define('DB_NAME', 'restaurante');

/*USUARIO DO BANCO DE DADOS MYSQL*/
define('DB_USER', 'root');

/*SENHA DO BANCO DE DADOS MYSQL*/
define('DB_PASSWORD', '');

/*NOME DO HOST MYSQL*/
define('DB_HOST', 'localhost');

/*CAMINHO ABSOLUTO PARA A PASTA DO SISTEMA*/
if(!defined('ABSPATH')){
    define ('ABSPATH', dirname (__FILE__).'/');
}

/*CAMINHO NO SERVE PARA O SISTEMA*/
if(!defined('BASEURL')){
    define ('BASEURL', '/SwR-Restaurante/');
}

/*CAMINHO DO ARQUIVO DE BANCO DE DADOS*/
if(!defined('DBAPI')){
    define ('DBAPI', ABSPATH.'inc/database.php');
}

/** CAMINHOS DOS TEMPLATES DE HEADER E FOOTER **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
