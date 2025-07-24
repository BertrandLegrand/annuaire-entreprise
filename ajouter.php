<?php
require_once 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $poste = $_POST["poste"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $sql = "INSERT INTO employes (nom, poste, email, telephone) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $poste, $email, $telephone]);

    header("Location: index.php");
}
?>

<h2>Ajouter un employé</h2>
<form method="post">
    Nom: <input type="text" name="nom" required><br>
    Poste: <input type="text" name="poste" required><br>
    Email: <input type="email" name="email" required><br>
    Téléphone: <input type="text" name="telephone" required><br>
    <input type="submit" value="Ajouter">
</form>
