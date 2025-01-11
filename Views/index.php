<?php

include_once '../Models/Entities/Livre.php'; 
require_once("..\_cnx\connexion.php");

$pdo = new PDO('mysql:host=localhost;dbname=biblioSchool', 'root', '');


$stmt = $pdo->query("SELECT * FROM livres");
$livres = $stmt->fetchAll(PDO::FETCH_ASSOC);


// $stmtReservations = $pdo->query("SELECT * FROM reservations");
// $reservations = $stmtReservations->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Livres</title>
 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .main-content {
            margin-left: 250px;
        }
        .navbar-custom {
            background-color: #007bff;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    
    <div class="sidebar position-fixed">
        <h2 class="text-white text-center py-4">Tableau de Bord</h2>
        <a href="#" class="active">Accueil</a>
        <a href="../Models/Product/create.php">Ajouter Livre</a>
        <a href="update.php">Modifier Livre</a>
        <a href="delete.php">Supprimer Livre</a>
        <a href="reserve.php">Réservations</a>
    </div>

   

    <div class="main-content">
        

        <nav class="navbar navbar-expand-lg navbar-custom navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BiblioSchool</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        
    
        <div class="container mt-5">
            <h3>Liste des Livres</h3>
            <div class="row">
                <?php
                 foreach ($livres as $livre): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?= $livre['image_url']; ?>" class="card-img-top" alt="Image du Livre">
                            <div class="card-body">
                                <h5 class="card-title"><?= $livre['titre']; ?></h5>
                                <p class="card-text">Auteur: <?= $livre['auteur']; ?></p>
                                <p class="card-text">Langue: <?= $livre['langue']; ?></p>
                                <p class="card-text">Etat: <?= $livre['etat']; ?></p>
                                <p class="card-text">Année: <?= $livre['annee_publication']; ?></p>
                                <p class="card-text">Description: <?= $livre['description']; ?></p>
                                <a href="update.php?id=<?= $livre['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Modifier</a>
                                <a href="delete.php?id=<?= $livre['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Supprimer</a>
                                <a href="reserve.php?id=<?= $livre['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-bookmark"></i> Réserver</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        
    
        <div class="container mt-5">
            <h3>Réservations</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Livre</th>
                        <th>Utilisateur</th>
                        <th>Date de Réservation</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($reservations as $reservation): ?>
                        <tr>
                            <td><?= $reservation['id']; ?></td>
                            <td><?= $reservation['livre_id']; ?></td>
                            <td><?= $reservation['utilisateur']; ?></td>
                            <td><?= $reservation['date_reservation']; ?></td>
                            <td><?= $reservation['status']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; 2025 Bibliothèque en ligne | Tous droits réservés</p>
    </footer>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>