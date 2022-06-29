<title>Déconnexion...</title>
<?php
session_start();
session_destroy();
header('Location: /Site-Paul-M/html/formulaire.html');
?>