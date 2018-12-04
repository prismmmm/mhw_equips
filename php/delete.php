<?php

$title = "";
if(isset($_POST['title']))
{
    $title = $_POST['title'];
};
  
  
$dsn = 'mysql:dbname=mhw_equip;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);

$stmt = $dbh->prepare("DELETE FROM `equip` WHERE title= :title");
$stmt->bindValue(':title',$title,PDO::PARAM_STR);
$stmt->execute(); 

?>