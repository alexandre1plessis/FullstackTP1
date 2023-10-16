<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $matricule = $_POST['matricule'];

    $sql = "UPDATE etudiants SET nom='$nom', prenom='$prenom', date_naissance='$date_naissance', email='$email', matricule='$matricule' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Étudiant mis à jour avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
