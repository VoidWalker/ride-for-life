<?php
require_once "DB.php";

$db = DB::DBInstance()->DB();
$stmt = $db->query("SELECT * FROM product");
$products = $stmt->fetchAll();

include "templates/productList.phtml";
