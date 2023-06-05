<?php 
include_once '../model/reservation.php';
include_once '../controller/servicec.php';

function generateRandomReference() {
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $reference = '';

  // Generate a random 6-character reference
  for ($i = 0; $i < 6; $i++) {
      $randomIndex = mt_rand(0, strlen($characters) - 1);
      $reference .= $characters[$randomIndex];
  }

  return $reference;
}

if(!isset($_POST['id']) || !isset($_POST['date']) || !isset($_POST['id_circuit']) || !isset($_POST['id_equipe']) || !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['mail'])) {
    echo "Erreur de saisie des champs.";
    exit;
}

$date = $_POST['date'];
$id_circuit = $_POST['id_circuit'];
$id_equipe = $_POST['id_equipe'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$reference = generateRandomReference();

$service = new Reservation(null, $date, $reference, $id_circuit, $id_equipe, $nom, $prenom, $mail);

$produitc = new servic();
$produitc->Ajouterreservation($service);

// Envoyer l'e-mail de confirmation
$to = $mail;
$subject = 'Confirmation de réservation';
$message = 'Votre réservation a été confirmée.' . "\n";
$message .= 'Date: ' . $date . "\n";
$message .= 'Référence: ' . $reference . "\n";
$message .= 'Équipe: ' . $id_equipe . "\n";
$message .= 'Circuit: ' . $id_circuit . "\n";
$message .= 'Nom: ' . $nom . "\n";
$message .= 'Prénom: ' . $prenom . "\n";

$headers = 'From: fast.one.resaweb@gmail.com' . "\r\n" .
    'Reply-To: fast.one.resaweb@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Envoyer l'e-mail
mail($to, $subject, $message, $headers);

header('location:index.php');
?>
