<?php

$errors = [];
$success = "";
$name = "";
$email = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "") {
        $errors["name"] = "Le nom est obligatoire";
    }

    if ($email === "") {
        $errors["email"] = "L'email est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email invalide";
    }

    if ($message === "") {
        $errors["message"] = "Le message est obligatoire";
    }

    if (empty($errors)) {
        $success = "Votre message a été envoyé avec succès.";
        $name = $email = $message = "";
    }
}


require_once __DIR__ . "/../views/contact.php";
?>