<?php
$servername="localhost";
 $username="root";
 $password="";

    $conn=new pdo("mysql:host=$servername;dbname=ocpdb",$username,$password);

    $id_qualite = $_POST['id_qualite'];
    $date_d_extraction = $_POST['date_d_extraction'];
    $Nvoyage = $_POST['Nvoyage'];
    $type_de_qualite = $_POST['type_de_qualite'];
    $quantite = $_POST['quantite'];
   

$stmt=$conn->prepare("INSERT INTO qualitesiteb(id_qualite,date_d_extraction,Nvoyage,type_de_qualite,quantite)values(:id_qualite,:date_d_extraction,:Nvoyage,:type_de_qualite,:quantite)");

    $stmt->bindParam(':id_qualite', $id_qualite);
    $stmt->bindParam(':date_d_extraction', $date_d_extraction);
    $stmt->bindParam(':Nvoyage', $Nvoyage);
    $stmt->bindParam(':type_de_qualite', $type_de_qualite);
    $stmt->bindParam(':quantite', $quantite);
   
    $stmt->execute();


    header("location:2remplirqualite.php");

 

?>