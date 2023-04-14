<?php

include ('model/database.php');
include ('model/product.php');
include ('model/user.php');

$db = db_connect();

$connect = checkUser($db,'client1','client1');

var_dump($connect);
// $products = product_get_all($db);
// var_dump($products);

//product_add($db,"article6","d6",2500,82);

//product_update($db,1,"article6","d6",2580,100);


