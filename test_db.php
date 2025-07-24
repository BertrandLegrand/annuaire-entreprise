<?php
require_once 'includes/db.php';

try {
    echo "✅ Connexion réussie<br>";

    // Test d'insertion
    $stmt = $pdo->prepare("INSERT INTO employes (nom, poste, email, telephone) VALUES (?, ?, ?, ?)");
    $stmt->execute(["Test Nom", "Test Poste", "test@example.com", "123456789"]);
    echo "✅ Insertion réussie<br>";

    // Test de lecture
    $stmt = $pdo->query("SELECT * FROM employes");
    $data = $stmt->fetchAll();
    echo "✅ Lecture réussie : " . count($data) . " employés trouvés<br>";

} catch (Exception $e) {
    echo "❌ Erreur : " . $e->getMessage();
}
