<?php
require_once 'includes/db.php';

$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM employes WHERE id = ?");
$stmt->execute([$id]);
$employe = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $poste = $_POST["poste"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $sql = "UPDATE employes SET nom = ?, poste = ?, email = ?, telephone = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $poste, $email, $telephone, $id]);

    header("Location: index.php");
}
?>

<h2>Modifier un employé</h2>
<form method="post">
    Nom: <input type="text" name="nom" value="<?= $employe['nom'] ?>" required><br>
    Poste: <input type="text" name="poste" value="<?= $employe['poste'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $employe['email'] ?>" required><br>
    Téléphone: <input type="text" name="telephone" value="<?= $employe['telephone'] ?>" required><br>
    <input type="submit" value="Enregistrer les modifications">
</form>
