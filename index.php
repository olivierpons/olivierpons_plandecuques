<?php
// Définir le type de contenu comme HTML5
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site web</title>
    <meta name="description" content="Description de mon site web">
    <!-- Styles CSS peuvent être ajoutés ici -->
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        header, main, footer {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #0066cc;
        }
        footer {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur mon site</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="about.php">À propos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <article>
            <h2>Mon premier article</h2>
            <p>Bonjour Tristan&nbsp;!</p>
            
            <?php
            echo "<p>Aujourd'hui nous sommes le " . date("d/m/Y") . " et il est " . date("H:i") . ".</p>";
            
            // Exemple de boucle PHP
            echo "<p>Exemple de liste générée par PHP :</p>";
            echo "<ul>";
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>Élément numéro $i</li>";
            }
            echo "</ul>";
            ?>
        </article>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Site Web - Tous droits réservés</p>
    </footer>
</body>
</html>
