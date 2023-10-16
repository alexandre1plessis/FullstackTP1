<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $matricule = $_POST['matricule'];

    $sql = "INSERT INTO etudiants (nom, prenom, date_naissance, email, matricule) VALUES ('$nom', '$prenom', '$date_naissance', '$email', '$matricule')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel étudiant ajouté avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
