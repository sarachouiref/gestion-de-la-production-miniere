<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ocpdb", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the Nvoyage parameter is set in the URL
    if (isset($_GET['id_arrets'])) {
        $id_arrets = $_GET['id_arrets'];

        // SQL to delete a record
        $sql = "DELETE FROM arretssitea WHERE id_arrets = :id_arrets";

        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_arrets', $id_arrets);
        $stmt->execute();

        echo "Record deleted successfully";
        header("location: 1remplirarrets.php");
    } else {
        echo "Nvoyage parameter is missing.";
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
