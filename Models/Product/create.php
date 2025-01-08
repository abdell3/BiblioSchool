 <?php 
 require_once  '../../Models/Entities/Livre.php';
 require_once '../../_cnx/connexion.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $description = $_POST['description'];
    $langue = $_POST['langue'];
    $etat = $_POST['etat'];
    $annee_publication = $_POST['annee_publication'];
    if (isset($_POST['image_url'])) {
        $image_url = $_POST['image_url'];
    } else {
        $image_url = null;  
        echo '<div class="alert alert-warning">L\'URL de l\'image n\'a pas été fournie.</div>';
    }

    

    
    $livre = new Livre(null, $titre, $auteur, $description, $langue, $etat, $annee_publication, $image_url);
    
    if ($livre->creerLivre($titre, $auteur, $description, $langue, $etat, $annee_publication, $image_url)) {
        echo '<div class="alert alert-success">Livre ajouté avec succès.</div>';
    } else {
        echo '<div class="alert alert-danger">Erreur lors de l\'ajout du livre.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Ajouter un Nouveau livre</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="titre" class="form-label">titre</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="mb-3">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control" id="auteru" name="auteur" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-3">
                <label for="langue" class="form-label">Langue</label>
                <input type="text" class="form-control" id="langue" name="langue" required>
            </div>
            <div class="mb-3">
                <label for="etat" class="form-label">Etat</label>
                <input type="text" class="form-control" id="etat" name="etat" required>
            </div>
            <div class="mb-3">
                <label for="annee_publication" class="form-label">Annee de publication</label>
                <input type="date" class="form-control" id="annee_publication" name="annee_publication" required>
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image_url" name="image_url" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter le Livre</button>
            <a href="index.php" class="btn btn-secondary ms-2">Retour</a>
        </form>
    </div>
</body>
</html>

 



<!-- 
<?php

// include '../Entities/Livre.php'; 


// // $pdo = new PDO('mysql:host=localhost;dbname=biblioSchool', 'root', '');


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $titre = $_POST['titre'];
//     $auteur = $_POST['auteur'];
//     $description = $_POST['description'];
//     $langue = $_POST['langue'];
//     $etat = $_POST['etat'];
//     $anneePublication = $_POST['anneePublication'];

    
//     $image = $_FILES['image'];
//     $imagePath = 'uploads/' . $image['name'];
//     move_uploaded_file($image['tmp_name'], $imagePath);

    
//     $stmt = $pdo->prepare("INSERT INTO livres (titre, auteur, description, langue, etat, annee_publication, image_url) VALUES (?, ?, ?, ?, ?, ?, ?)");
//     $stmt->execute([$titre, $auteur, $description, $langue, $etat, $anneePublication, $imagePath]);

//     echo "Livre ajouté avec succès!";
// }
// ?>

 -->
