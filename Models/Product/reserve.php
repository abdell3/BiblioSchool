<?php

include 'Livre.php'; 


$pdo = new PDO('mysql:host=localhost;dbname=biblioSchool', 'root', '');

if (isset($_GET['id'])) {
    $livreId = $_GET['id'];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $utilisateur = $_POST['utilisateur'];
        $dateReservation = date('Y-m-d');
        
        
        $stmt = $pdo->prepare("INSERT INTO reservations (livre_id, utilisateur, date_reservation) VALUES (?, ?, ?)");
        $stmt->execute([$livreId, $utilisateur, $dateReservation]);

        echo "Réservation effectuée!";
    }
}
?>

<form method="POST">
    Nom de l'utilisateur: <input type="text" name="utilisateur" required><br>
    <button type="submit" class="btn btn-success">Réserver ce Livre</button>
</form>