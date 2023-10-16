<?php
include 'config.php';

$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID : " . $row["id"] . "<br>";
        echo "Nom : " . $row["nom"] . "<br>";
        echo "Prénom : " . $row["prenom"] . "<br>";
        echo "Date de naissance : " . $row["date_naissance"] . "<br>";
        echo "Email : " . $row["email"] . "<br>";
        echo "Matricule : " . $row["matricule"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Aucun résultat.";
}

$conn->close();
