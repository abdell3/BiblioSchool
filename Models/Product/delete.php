<?php

include 'Livre.php'; 


$pdo = new PDO('mysql:host=localhost;dbname=biblioSchool', 'root', '');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $stmt = $pdo->prepare("DELETE FROM reservations WHERE livre_id = ?");
    $stmt->execute([$id]);

    
    $stmt = $pdo->prepare("DELETE FROM livres WHERE id = ?");
    $stmt->execute([$id]);

    echo "Livre supprimé avec succès!";
}
?>