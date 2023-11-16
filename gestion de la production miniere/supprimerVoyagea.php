<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ocpdb", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the Nvoyage parameter is set in the URL
    if (isset($_GET['Nvoyage'])) {
        $Nvoyage = $_GET['Nvoyage'];

        // SQL to delete a record
        $sql = "DELETE FROM voyagesitea WHERE Nvoyage = :Nvoyage";

        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':Nvoyage', $Nvoyage);
        $stmt->execute();

        echo "Record deleted successfully";
        header("location: 1remplirvoyage.php");
    } else {
        echo "Nvoyage parameter is missing.";
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
