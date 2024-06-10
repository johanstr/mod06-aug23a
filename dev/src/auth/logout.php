<?php
session_start();

// Controleren of er überhaupt is ingelogd
if(! isset($_SESSION['customer'])) {
   // Als er nog niet is ingelogd - Terug naar Login form
   header('Location: ../../login.php');
   exit();
}

// Er is ingelogd - Session Cookies verwijderen
unset($_SESSION['customer']);

// Session stoppen
session_destroy();

// TODO: Terug naar startpagina
header('Location: ../../index.php');
