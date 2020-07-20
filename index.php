<?php

require_once("vendor/autoload.php");
//require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");
require_once("vendor/hcodebr/php-classes/src/Model.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\DB\Sql;

//  $sql = new Sql();
//  $results = $sql->select("SELECT * FROM tb_users");
//  echo json_encode($results);
$app = new \Slim\Slim();


$app->config('debug',true);


// ROTA RAIZ
$app->get('/', function(){
  
    $page = new Page();
    $page->setTpl("index");
   
     //$sql = new Sql();
     //$results = $sql->select("SELECT * FROM tb_users");
     //echo json_encode($results);
});


// Rota ADMIN
$app->get('/admin', function(){
  
    $page = new PageAdmin();
    $page->setTpl("index");
   
});

// ROTA LOGIN

$app->get('/admin/login', function(){
  
    //desabilitando o header e o footer padrão
    $page = new PageAdmin([
        "header"=>false,
        "footer"=>false
    ]);
    $page->setTpl("login");
   
});


$app->post('/admin/login', function(){
  
    User::login($_POST["login"],$_POST["password"]);

    header("Location: /admin");
    exit;
   
});


$app->get('/teste', function(){
    $sql = new \DB\Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    echo json_encode($results);
    // echo "Ok";
 });


$app->run();








