<?php
$dsn = 'mysql:dbname=test;host=localhost';
$user = 'root';
$password = '';


try{
  $dbh = new PDO($dsn, $user, $password);
  //queryメソッドでSQLを実行
  $name = "test name";
  $sql = "SELECT * FROM equip WHERE name = '".$name."'";
  foreach ($dbh->query($sql) as $row){
    print($row['name'].',');
    //print($row['user'].',');
    //print($row['wepon'].',');
    //print($row['id'].'<br>');
  }
}catch ( Exception $ex ){
  print("DB connect error");
}
?>
