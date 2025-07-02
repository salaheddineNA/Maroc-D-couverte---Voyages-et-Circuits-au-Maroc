<?php
require_once 'php/config.php';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sécurisation basique
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $destination = htmlspecialchars(trim($_POST['destination']));
    $message = htmlspecialchars(trim($_POST['message']));

    try {
        $sql = "INSERT INTO demandes_contact (nom, email, telephone, destination, message)
                VALUES (:nom, :email, :telephone, :destination, :message)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':telephone' => $telephone,
            ':destination' => $destination,
            ':message' => $message
        ]);

        $success = true;
    } catch (PDOException $e) {
        $error = "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Planifiez Votre Voyage</h2>
            <p>Contactez nos experts pour créer votre voyage sur mesure</p>
        </div>

        <!-- Message de confirmation -->
        <?php if ($success): ?>
            <p style="color: green;   text-align: center;  background: #fceaea;  padding: 10px; margin-bottom: 20px;">✅ Votre demande a été enregistrée avec succès !</p>
        <?php elseif (!empty($error)): ?>
            <p style="color: red; text-align: center;  background: #fceaea;  padding: 10px; margin-bottom: 20px;">❌ <?= $error ?></p>
        <?php endif; ?>

        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <h3>Téléphone</h3>
                    <p>+212 5XX XX XX XX</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Adresse</h3>
                    <p>Marrakech, Maroc</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-calendar"></i>
                    <h3>Disponibilité</h3>
                    <p>7j/7 - 24h/24</p>
                </div>
            </div>
            <div class="contact-form">
                <form id="contactForm" action="index.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nom" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Votre email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telephone" placeholder="Votre téléphone">
                    </div>
                    <div class="form-group">
                        <select name="destination" required>
                            <option value="">Destination souhaitée</option>
                            <option value="marrakech">Marrakech</option>
                            <option value="fes">Fès</option>
                            <option value="sahara">Sahara</option>
                            <option value="atlas">Atlas</option>
                            <option value="circuit-complet">Circuit complet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Votre message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Envoyer la demande</button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
