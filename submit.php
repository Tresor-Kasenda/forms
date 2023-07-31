<?php
session_start();
require './FormSubmission.php';

if (!isset($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomComplet = $_POST['nom-complet'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $contact = $_POST['contact'];
    $secteur = $_POST['secteur'];
    $participation = $_POST['participation'];
    $annonce = $_POST['annonce'];
  
    $submission = new FormSubmission(
        $nomComplet, 
        $email, 
        $sexe, 
        $contact, 
        $secteur, 
        $participation, 
        $annonce
    );
  
    try {
      $submission->validate();
      $submission->save();
  
      // Redirect to thank you page
      header('Location: thank-you.php');
      exit;
    } catch (Exception $e) {
      // Handle validation error
      echo $e->getMessage();
    }
  }