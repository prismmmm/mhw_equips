<?php
  //�������
  $json = file_get_contents("php://input");
  $data = json_decode($json,true);
  
  file_put_contents('a.txt',$json);

  $json = file_get_contents('a.txt');
  $data = json_decode($json,true);

  //id生成
  $id = (int)date('m') * (int)date('d') * (int)date('H') * (int)date('i');
  $username = $data['user'];
  $type = $data['type'];
  $wep = $data['wep'];
  $wep_dec1 = $data['wep_dec1'];


  $title = $data['title'];


  print($data);

  $dsn = 'mysql:dbname=mhw_equip;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password,
    array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
));


  $stmt = $dbh->prepare("INSERT INTO `equip` (`id`, `user`, `t`, `wep`, `wep_dec1`, `wep_dec2`, `wep_dec3`, `helm`, `helm_dec1`, `helm_dec2`, `helm_dec3`, `body`, `body_dec1`, `body_dec2`, `body_dec3`, `hand`, `hand_dec1`, `hand_dec2`, `hand_dec3`, `waist`, `waist_dec1`, `waist_dec2`, `waist_dec3`, `leg`, `leg_dec1`, `leg_dec2`, `leg_dec3`, `skil1`, `skil2`, `skil3`, `skil4`, `skil5`, `skil6`, `skil7`, `skil8`, `skil9`, `skil10`, `skil1_lv`, `skil2_lv`, `skil3_lv`, `skil4_lv`, `skil5_lv`, `skil6_lv`, `skil7_lv`, `skil8_lv`, `skil9_lv`, `skil10_lv`, `comment`, `title`,`charm`,`time`) 
  VALUES (:id, :user, :t, :wep, :wep_dec1, :wep_dec2, :wep_dec3,  :helm, :helm_dec1, :helm_dec2, :helm_dec3,  :body, :body_dec1, :body_dec2, :body_dec3,:hand,:hand_dec1, :hand_dec2, :hand_dec3, :waist, :waist_dec1, :waist_dec2, :waist_dec3, :leg,:leg_dec1, :leg_dec2, :leg_dec3, :skil1, :skil2, :skil3, :skil4, :skil5, :skil6, :skil7, :skil8, :skil9, :skil10, :skil1_lv, :skil2_lv, :skil3_lv, :skil4_lv, :skil5_lv, :skil6_lv, :skil7_lv, :skil8_lv, :skil9_lv, :skil10_lv, :comment,:title,:charm,:time)");
  //$stmt = $dbh->prepare("INSERT INTO test(id, username) VALUES (:id,:username)");
  
   $stmt->bindValue(':id',$id,PDO::PARAM_INT);
   $stmt->bindValue(':user',$username,PDO::PARAM_STR);
   $stmt->bindValue(':t',$type,PDO::PARAM_STR);
   $stmt->bindValue(':wep',$wep,PDO::PARAM_STR);
   $stmt->bindValue(':wep_dec1',$data['wep_dec1'],PDO::PARAM_STR);
   $stmt->bindValue(':wep_dec2',$data['wep_dec2'],PDO::PARAM_STR);
   $stmt->bindValue(':wep_dec3',$data['wep_dec3'],PDO::PARAM_STR);

   $stmt->bindValue(':helm',$data['helm'],PDO::PARAM_STR);
   $stmt->bindValue(':helm_dec1',$data['helm_dec1'],PDO::PARAM_STR);
   $stmt->bindValue(':helm_dec2',$data['helm_dec2'],PDO::PARAM_STR);
   $stmt->bindValue(':helm_dec3',$data['helm_dec3'],PDO::PARAM_STR);

   $stmt->bindValue(':body',$data['body'],PDO::PARAM_STR);
   $stmt->bindValue(':body_dec1',$data['body_dec1'],PDO::PARAM_STR);
   $stmt->bindValue(':body_dec2',$data['body_dec2'],PDO::PARAM_STR);
   $stmt->bindValue(':body_dec3',$data['body_dec3'],PDO::PARAM_STR);

   $stmt->bindValue(':hand',$data['hand'],PDO::PARAM_STR);
   $stmt->bindValue(':hand_dec1',$data['hand_dec1'],PDO::PARAM_STR);
   $stmt->bindValue(':hand_dec2',$data['hand_dec2'],PDO::PARAM_STR);
   $stmt->bindValue(':hand_dec3',$data['hand_dec3'],PDO::PARAM_STR);

   $stmt->bindValue(':waist',$data['waist'],PDO::PARAM_STR);
   $stmt->bindValue(':waist_dec1',$data['waist_dec1'],PDO::PARAM_STR);
   $stmt->bindValue(':waist_dec2',$data['waist_dec2'],PDO::PARAM_STR);
   $stmt->bindValue(':waist_dec3',$data['waist_dec3'],PDO::PARAM_STR);

   $stmt->bindValue(':leg',$data['leg'],PDO::PARAM_STR);
   $stmt->bindValue(':leg_dec1',$data['leg_dec1'],PDO::PARAM_STR);
   $stmt->bindValue(':leg_dec2',$data['leg_dec2'],PDO::PARAM_STR);
   $stmt->bindValue(':leg_dec3',$data['leg_dec3'],PDO::PARAM_STR);

   $stmt->bindValue(':skil1',$data['skil1'],PDO::PARAM_STR);
   $stmt->bindValue(':skil2',$data['skil2'],PDO::PARAM_STR);
   $stmt->bindValue(':skil3',$data['skil3'],PDO::PARAM_STR);
   $stmt->bindValue(':skil4',$data['skil4'],PDO::PARAM_STR);
   $stmt->bindValue(':skil5',$data['skil5'],PDO::PARAM_STR);
   $stmt->bindValue(':skil6',$data['skil6'],PDO::PARAM_STR);
   $stmt->bindValue(':skil7',$data['skil7'],PDO::PARAM_STR);
   $stmt->bindValue(':skil8',$data['skil8'],PDO::PARAM_STR);
   $stmt->bindValue(':skil9',$data['skil9'],PDO::PARAM_STR);
   $stmt->bindValue(':skil10',$data['skil10'],PDO::PARAM_STR);

   $stmt->bindValue(':skil1_lv',$data['skil1_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil2_lv',$data['skil2_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil3_lv',$data['skil3_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil4_lv',$data['skil4_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil5_lv',$data['skil5_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil6_lv',$data['skil6_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil7_lv',$data['skil7_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil8_lv',$data['skil8_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil9_lv',$data['skil9_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':skil10_lv',$data['skil10_lv'],PDO::PARAM_STR);
   $stmt->bindValue(':title',$data['title'],PDO::PARAM_STR);

   $stmt->bindValue(':comment',$data['comment'],PDO::PARAM_STR);
   $stmt->bindValue(':charm',$data['charm'],PDO::PARAM_STR);
   $stmt->bindValue(':time',$data['time'],PDO::PARAM_STR);

  $stmt->execute(); 

?>