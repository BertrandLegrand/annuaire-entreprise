<?php
require_once 'includes/db.php';

$id = $_GET["id"];
$stmt = $pdo->prepare("DELETE FROM employes WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
