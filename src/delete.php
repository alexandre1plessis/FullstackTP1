<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM etudiants WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Étudiant supprimé avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
