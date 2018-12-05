<?php
  //�������
  $id = "";
  if(isset($_POST['id']))
  {
    $id = $_POST['id'];
  };
  

  $dsn = 'mysql:dbname=mhw_equip;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  
  $sql = "SELECT * FROM equip";
  // if($id == ''){
  //   $sql = "SELECT * FROM equip";
  // }else{
  //   $sql = "SELECT * FROM `equip` WHERE id = 19980";
  //   //$sql->bindValue(':id',$id,PDO::PARAM_STR); 
  // }

foreach ($dbh->query($sql) as $row){
  
  $arr[] = array(
      'id'=>$row['id'],
      'user'=>$row['user'],
      'type'=>$row['t'],
      'wep'=>$row['wep'],
      'wep_dec1'=>$row['wep_dec1'],
      'wep_dec2'=>$row['wep_dec2'],
      'wep_dec3'=>$row['wep_dec3'],

      'helm'=>$row['helm'],
      'helm_dec1'=>$row['helm_dec1'],
      'helm_dec2'=>$row['helm_dec2'],
      'helm_dec3'=>$row['helm_dec3'],

      'body'=>$row['body'],
      'body_dec1'=>$row['body_dec1'],
      'body_dec2'=>$row['body_dec2'],
      'body_dec3'=>$row['body_dec3'],

      'hand'=>$row['hand'],
      'hand_dec1'=>$row['hand_dec1'],
      'hand_dec2'=>$row['hand_dec2'],
      'hand_dec3'=>$row['hand_dec3'],

      'waist'=>$row['waist'],
      'waist_dec1'=>$row['waist_dec1'],
      'waist_dec2'=>$row['waist_dec2'],
      'waist_dec3'=>$row['waist_dec3'],

      
      'leg'=>$row['leg'],
      'leg_dec1'=>$row['leg_dec1'],
      'leg_dec2'=>$row['leg_dec2'],
      'leg_dec3'=>$row['leg_dec3'],

      'skils'=>array(
        $row['skil1'],
        $row['skil2'],
        $row['skil3'],
        $row['skil4'],
        $row['skil5'],
        $row['skil6'],
        $row['skil7'],
        $row['skil8'],
        $row['skil9'],
        $row['skil10']
      ),
      'skil_lvs'=>array(
        'skil1_lv'=>$row['skil1_lv'],
        'skil2_lv'=>$row['skil2_lv'],
        'skil3_lv'=>$row['skil3_lv'],
        'skil4_lv'=>$row['skil4_lv'],
        'skil5_lv'=>$row['skil5_lv'],
        'skil6_lv'=>$row['skil6_lv'],
        'skil7_lv'=>$row['skil7_lv'],
        'skil8_lv'=>$row['skil8_lv'],
        'skil9_lv'=>$row['skil9_lv'],
        'skil10_lv'=>$row['skil10_lv']
      ),

      'comment'=>$row['comment'],
      'title'=>$row['title'],
      'charm'=>$row['charm'],
      'time'=>$row['time']
  );
  //print $row['id'].'<br>';
}

$json = json_encode($arr);
  print($json);
?>