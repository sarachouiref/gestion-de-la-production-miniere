<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ocpdb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $Nvoyage = $_POST['Nvoyage'];
    $Nconducteur = $_POST['Nconducteur'];
    $destination = $_POST['destination'];
    $distance = $_POST['distance'];
    $date_de_depart = $_POST['date_de_depart'];
    $heure_de_depart = $_POST['heure_de_depart'];
    $date_d_arrivee = $_POST['date_d_arrivee'];
    $heure_d_arrivee = $_POST['heure_d_arrivee'];

    $stmt = $conn->prepare("INSERT INTO voyagesiteb (Nvoyage, Nconducteur, destination, distance, date_de_depart, heure_de_depart, date_d_arrivee, heure_d_arrivee) VALUES (:Nvoyage, :Nconducteur, :destination, :distance, :date_de_depart, :heure_de_depart, :date_d_arrivee, :heure_d_arrivee)");

    $stmt->bindParam(':Nvoyage', $Nvoyage);
    $stmt->bindParam(':Nconducteur', $Nconducteur);
    $stmt->bindParam(':destination', $destination);
    $stmt->bindParam(':distance', $distance);
    $stmt->bindParam(':date_de_depart', $date_de_depart);
    $stmt->bindParam(':heure_de_depart', $heure_de_depart);
    $stmt->bindParam(':date_d_arrivee', $date_d_arrivee);
    $stmt->bindParam(':heure_d_arrivee', $heure_d_arrivee);
    
    $stmt->execute();

    header("location: 2remplirvoyage.php");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
