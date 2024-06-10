<?php
session_start();

// STAP 1 - Controle of de script met een POST-request is gestart
if($_SERVER["REQUEST_METHOD"] != "POST") {
   header("Location: ../../index.php");
   exit();
}

// STAP 2 - Ingetikte gegevens binnenhalen in vars + beveiligen
$email = htmlentities($_POST['email']);
$password = $_POST['password'];

// STAP 3 - Customer in DB zoeken op basis van ingetikte gegevens
require_once '../Database/Database.php';
$sql = "SELECT * FROM customers WHERE email = :email";
$placeholders = [':email' => $email];

Database::query($sql, $placeholders);
$customer = Database::get();

// STAP 4 - Wachtwoorden vergelijken
if(! password_verify($password, $customer['password'])) {
   // Wachtwoorden zijn dus niet gelijk
   header("Location: ../../login.php");
   exit();
}
// Wachtwoorden zijn gelijk, dus een succesvolle inlog
// STAP 5 - Vastleggen Customer gegevens voor andere (sub)programma's
$_SESSION['customer'] = $customer;
unset($_SESSION['customer']['password']);
$_SESSION['messages']['login_success'] = "U bent succesvol ingelogd.";
//[] = [
//   'firstname' => $customer['firstname'],
//   'prefixes' => $customer['prefixes'],
//   'lastname' => $customer['lastname'],
//   'email' => $customer['email'],
//   'street' => $customer['street'],
//   'house_number' => $customer['house_number'],
//   'addition' => $customer['addition'],
//   'zipcode' => $customer['zipcode'],
//   'city' => $customer['city'],
//   'user_id' => $customer['id'],
//];

// STAP 6 - Redirect na succesvolle inlog naar index.php
header("Location: ../../index.php");
