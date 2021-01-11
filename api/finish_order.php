<?php
include_once "../base.php";

$data['movie']=$Movie->find($_POST['movie'])['name'];
$data['date']=$_POST['date'];
sort($_POST['seats']);
$data['seats']=serialize($_POST['seats']);
$data['qt']=count($_POST['seats']);
$data['session']=$sess[$_POST['session']];
$n=$Orders->q('select max(`id`) from `orders`')[0][0]+1;
$data['num']=date("Ymd").sprintf("%04d",$n);

$Orders->save($data);
 echo $data['num'];
?>

