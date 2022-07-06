<?php
$dbhost="localhost";
$dbname="CoffeeShop";
$username="root";
$password="root";
$db=new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);

function get_Menu()
{
  global $db;
  $singles=$db->query("SELECT * FROM Menu");
  return $singles;
}
function get_Menu_by_id($id)
{
  global $db;
  $categories=$db->query("SELECT * FROM category WHERE id=$id");
  foreach ($categories as $category) {
      return $category;
  }
}
?>
