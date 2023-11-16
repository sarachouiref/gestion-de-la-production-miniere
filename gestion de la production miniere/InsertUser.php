<?php
$servername="localhost";
 $username="root";
 $password="";

	$conn=new pdo("mysql:host=$servername;dbname=ocpdb",$username,$password);

$mail=$_POST['mail'];
$pwd=$_POST['pwd'];



$stmt=$conn->prepare("INSERT INTO Userr(mail,pwd)values(:mail,:pwd)");
$stmt->bindparam(':mail',$mail);
$stmt->bindparam(':pwd',$pwd);

$stmt->execute();

	header("location:111.php");

?>

