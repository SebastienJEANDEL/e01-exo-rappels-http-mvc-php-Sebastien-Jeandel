<?php

// Inclusion des classes
require_once 'App.php';
require_once 'Controller.php';
require_once 'View.php';
require_once 'Model.php';

// On instancie un objet $app
$app = new App();

// On lance l'application, qui nous retourne le contenu à afficher
$content = $app->run();

// Affiche le corps de la réponse
echo $content;