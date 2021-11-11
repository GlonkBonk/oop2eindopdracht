<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new woorden($db);
// create product here
// query products


// $insertArray = [
//     "naam" => "Mountain Dew",
//     "beschrijving" => "lekker drankje USA",
//     "prijs" => 2.49
// ];

echo "<pre>";
var_dump($_POST);

$insertArray = $_POST;

$result = $product->create($insertArray);

?>

<form action="http://localhost/oop2-opdracht/product/create.php" method="post">
    <input type="text" name="woord" id="word" placeholder="word">
    <input type="checkbox" name="goedgekeurd" id="goedgekeurd" value="1">
    <input type="number" name="gredatie" id="gredatie" placeholder="gredatie filter">
   
    <input type="submit" value="Verzenden">
</form>
