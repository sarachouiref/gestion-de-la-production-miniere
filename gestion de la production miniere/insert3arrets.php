<?php
$servername="localhost";
 $username="root";
 $password="";

    $conn=new pdo("mysql:host=$servername;dbname=ocpdb",$username,$password);

    $id_arrets = $_POST['id_arrets'];
    $nombre_d_arrets = $_POST['nombre_d_arrets'];
    $Duree_total_des_arrets = $_POST['Duree_total_des_arrets'];
    $Nvoyage = $_POST['Nvoyage'];
    $type_de_camion = $_POST['type_de_camion'];
   

$stmt = $conn->prepare("INSERT INTO arretssitec(id_arrets, nombre_d_arrets, Duree_total_des_arrets, Nvoyage, type_de_camion) VALUES(:id_arrets, :nombre_d_arrets, :Duree_total_des_arrets, :Nvoyage, :type_de_camion)");

    $stmt->bindParam(':id_arrets', $id_arrets);
    $stmt->bindParam(':nombre_d_arrets', $nombre_d_arrets);
    $stmt->bindParam(':Duree_total_des_arrets', $Duree_total_des_arrets);
    $stmt->bindParam(':Nvoyage', $Nvoyage);
    $stmt->bindParam(':type_de_camion', $type_de_camion);
   
    $stmt->execute();


    header("location:3remplirarrets.php");

 

?>