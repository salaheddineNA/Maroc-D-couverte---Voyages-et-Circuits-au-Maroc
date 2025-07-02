<?php
$host = 'localhost';
$dbname = 'marocdecouverte';
$username = 'root';
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère et sécurise les champs
    $circuit_id = intval($_POST['circuit_id'] ?? 0);
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
    $date_depart = $_POST['date_depart'] ?? '';
    $nb_personnes = intval($_POST['nb_personnes'] ?? 0);
    $commentaires = htmlspecialchars(trim($_POST['commentaires'] ?? ''));

    if (!$nom || !$email || !$telephone || !$date_depart || $nb_personnes < 1) {
        $error = "Veuillez remplir tous les champs obligatoires correctement.";
    } else {
        try {
            $sql = "INSERT INTO reservations (circuit_id, nom, email, telephone, date_depart, nb_personnes, commentaires)
                    VALUES (:circuit_id, :nom, :email, :telephone, :date_depart, :nb_personnes, :commentaires)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':circuit_id' => $circuit_id,
                ':nom' => $nom,
                ':email' => $email,
                ':telephone' => $telephone,
                ':date_depart' => $date_depart,
                ':nb_personnes' => $nb_personnes,
                ':commentaires' => $commentaires
            ]);
            $success = true;
        } catch (PDOException $e) {
            $error = "Erreur lors de l'enregistrement : " . $e->getMessage();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reservation.css">
  
</head>
<body>

    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h1>Maroc Découverte</h1>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="index.php" class="nav-link">Accueil</a>
                <a href="destinations.php" class="nav-link">Destinations</a>
            </div>
        </div>
    </nav>

    <div id="reservationModal" class="modal">
    <div class="modal-content">
        <?php 
        // Initialize variables to prevent warnings
        $success = isset($success) ? $success : null;
        $error = isset($error) ? $error : null;
        
        if ($success): ?>
            <p style="color: green;">✅ Réservation enregistrée avec succès !</p>
        <?php elseif ($error): ?>
            <p style="color: red;">❌ <?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        
        <h2>Réservation de Circuit</h2>
        <form id="reservationForm" action="reservation_modal.php" method="POST">
            <!-- Hidden Circuit ID -->
            <input type="hidden" name="circuit_id" value="123"> <!-- Use actual dynamic value -->

            <!-- Name Field -->
            <div class="form-group">
                <input type="text" name="nom" placeholder="Nom complet" required aria-label="Nom complet">
            </div>

            <!-- Email Field -->
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required aria-label="Email">
            </div>

            <!-- Phone Field -->
            <div class="form-group">
                <input type="tel" name="telephone" placeholder="Téléphone" required aria-label="Téléphone">
            </div>

            <!-- Date Field -->
            <div class="form-group">
                <input type="date" name="date_depart" required aria-label="Date de départ">
            </div>

            <!-- Number of People -->
            <div class="form-group">
                <input type="number" name="nb_personnes" placeholder="Nombre de personnes" min="1" required aria-label="Nombre de personnes">
            </div>

            <!-- Comments -->
            <div class="form-group">
                <textarea name="commentaires" placeholder="Commentaires ou demandes spéciales" rows="3" aria-label="Commentaires"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary btn-full">Confirmer la réservation</button>
        </form>
    </div>
</div>




</body>
</html>