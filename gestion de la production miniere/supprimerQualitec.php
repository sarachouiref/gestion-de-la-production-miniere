<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ocpdb", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the Nvoyage parameter is set in the URL
    if (isset($_GET['id_qualite'])) {
        $id_qualite = $_GET['id_qualite'];

        // SQL to delete a record
        $sql = "DELETE FROM qualitesitec WHERE id_qualite = :id_qualite";

        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_qualite', $id_qualite);
        $stmt->execute();

        echo "Record deleted successfully";
        header("location: 3remplirqualite.php");
    } else {
        echo "Nvoyage parameter is missing.";
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
