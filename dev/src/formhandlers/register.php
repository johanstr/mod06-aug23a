<?php

// STAP 1 - Controleren of het een POST-request
if($_SERVER["REQUEST_METHOD"] != "POST") {
   header("Location: ../../index.php");
   exit();
}
// TODO: STAP 2 - Ophalen van de ingetikte gegevens
$firstname = htmlentities($_POST['firstname']);
$lastname = htmlentities($_POST['lastname']);
$prefixes = htmlentities($_POST['prefixes']);
$street = htmlentities($_POST['street']);
$housenumber = htmlentities($_POST['housenumber']);
$addition = htmlentities($_POST['addition']);
$zipcode = htmlentities($_POST['zipcode']);
$city = htmlentities($_POST['city']);
$email = htmlentities($_POST['email']);
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

// TODO: STAP 3 - Beveiligen van de ingetikte gegevens

// TODO: STAP 4 - Zijn alle verplichte velden ingevuld

// TODO: STAP 5 - Zit het ingetikte email adres al in de DB?

// TODO: STAP 6 - NEE, dus nieuwe gegevens opslaan in de DB
require_once '../Database/Database.php';
$sql = "
   INSERT INTO `customers`(`firstname`, `prefixes`, `lastname`, `street`, `house_number`, `zipcode`, `city`, `email`, `password`)
   VALUES (:firstname, :prefixes, :lastname, :street, :housenumber, :zipcode, :city, :email, :password)
";

$placeholders = [
   ':firstname' => $firstname,
   ':prefixes' => $prefixes,
   ':lastname' => $lastname,
   ':street' => $street,
   ':housenumber' => $housenumber,
   ':zipcode' => $zipcode,
   ':city' => $city,
   ':email' => $email,
   ':password' => password_hash($password, PASSWORD_DEFAULT),
];

Database::query($sql, $placeholders);
// TODO: STAP 7 - Gebruiker redirecten naar de login pagina

