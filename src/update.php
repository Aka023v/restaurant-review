<?php
$id = filter_input(INPUT_POST, 'id');
$poster = filter_input(INPUT_POST, 'poster');
$restaurant_name = filter_input(INPUT_POST, 'restaurant_name');
$tweet = filter_input(INPUT_POST, 'tweet');

$dbh = new PDO(
  'mysql:dbname=restaurant_review;host=mysql;charset=utf8',
  'root',
  'password'
);
$query = "UPDATE tweet SET poster='$poster', restaurant_name='$restaurant_name', tweet='$tweet' WHERE id = '$id'";
$dbh->query($query);

header('Location: ./index.php');
exit;
?>