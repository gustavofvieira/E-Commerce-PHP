<?php

require_once("vendor/autoload.php");
require_once("vendor/hcodebr/php-classes/src/DB/Sql.php");

use \Slim\Slim;
use \Hcode\Page;

//  $sql = new Sql();
//  $results = $sql->select("SELECT * FROM tb_users");
//  echo json_encode($results);
$app = new \Slim\Slim();


$app->config('debug',true);

$app->get('/', function(){
  
    $page = new Page();
    $page->setTpl("index");
   
     //$sql = new Sql();
     //$results = $sql->select("SELECT * FROM tb_users");
     //echo json_encode($results);
});

$app->run();






// $app = new \Slim\Slim();

// $app->config('debug',true);

// $app->get('/', function(){
//    $sql = new Hcode\DB\Sql();
//    $results = $sql->select("SELECT * FROM tb_users");
//    echo json_encode($results);
//    // echo "Ok";
// });

// $app->run();