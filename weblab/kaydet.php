<?php 

include("signin.php");

if ($_POST) {
	$name = $_POST['name'];
 	$surname = $_POST['surname'];
 	$email = $_POST['email']; 	
 	$username = $_POST['username'];
    $password = $_POST['password']; 

$ekle=$db->prepare("insert into uyeler set name=?, surname=?, email=?, username=?, password=?");
	$durum = $ekle->execute(array($name, $surname, $email, $username, $password));

 if($durum){
 	echo "kayıt başarılı";
 }
 else{
 	echo "başarısız";
 }


}


?>