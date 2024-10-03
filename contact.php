<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Envoi d'un email (ceci est un exemple simple)
    $to = 'votre.email@example.com';
    $subject = 'Nouveau message de contact';
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo 'Message envoyé avec succès !';
    } else {
        echo 'Échec de l\'envoi du message.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - ULM 3 Axes</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.html">À propos</a></li>
                <li><a href="gallery.html">Galerie</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>   
    <main>
        <h1>Contactez-nous</h1>
        <form method="POST" action="contact.php">
            <input type="text" name="name" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    
    <footer>
        <p>&copy; 2024 ULM 3 Axes. Tous droits réservés.</p>
    </footer>
    </main>
</body>
</html>
