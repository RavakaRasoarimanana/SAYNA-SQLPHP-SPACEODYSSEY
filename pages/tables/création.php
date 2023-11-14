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
$Vaisseaux = $_POST['Vaisseaux'];
$Astronautes = $_POST['Astronautes'];
$Planètes= $_POST['Planètes'];



// Préparer la requête d'insertion
$stmt = $conn->prepare("INSERT INTO mission (Nom,Vaisseaux,Astronautes,Planètes) VALUES (?, ?, ? ,?)");
$stmt->bind_param("ssss", $Nom,$Vaisseaux,$Astronautes,$Planètes);

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