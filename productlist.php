<?php
require_once "DB.php";

$db = DB::DBInstance()->DB();
$stmt = $db->query("SELECT * FROM product");
var_dump($stmt);
$products = $stmt->fetchAll();
echo "<table>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product->id . "</td>";
    echo "<td>" . $product->name . "</td>";
    echo "<td>" . $product->description . "</td>";
    echo "<td>" . $product->price . "</td>";
    echo "<td>" . $product->image . "</td>";
    echo "</tr>";
}
echo "</table>";
