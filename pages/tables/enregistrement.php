<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "planètes";

// Connexion à la base de données MySQL
$conn = new mysqli($hostname, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer les valeurs du formulaire
$Nom = $_POST['Nom'];
$Circonférence = $_POST['Circonférence'];
$Distance = $_POST['Distance'];
$Documentation = $_POST['Documentation'];

// Préparer la requête d'insertion
$stmt = $conn->prepare("INSERT INTO planète (Nom,Circonférence,Distance,Documentation) VALUES (?, ?, ? ,?)");
$stmt->bind_param("siis", $Nom, $Circonférence, $Distance, $Documentation);

// Exécuter la requête
if ($stmt->execute()) {
    echo "Enregistrement ajouté avec succès !";
} else {
    echo "Erreur lors de l'ajout de l'enregistrement : " . $stmt->error;
}

// Fermer la connexion
$stmt->close();
$conn->close();
?>