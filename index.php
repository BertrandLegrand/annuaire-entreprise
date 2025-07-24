<?php
require_once 'includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Annuaire d'entreprise</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Liste des employés</h1>
    <a href="ajouter.php">Ajouter un employé</a>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Poste</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM employes");
        while ($row = $stmt->fetch()) {
            echo "<tr>
                    <td>{$row['nom']}</td>
                    <td>{$row['poste']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telephone']}</td>
                    <td>
                        <a href='modifier.php?id={$row['id']}'>Modifier</a> |
                        <a href='supprimer.php?id={$row['id']}' onclick='return confirm(\"Confirmer la suppression ?\")'>Supprimer</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
