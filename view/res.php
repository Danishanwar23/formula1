<?php
include_once '../config.php';
include_once '../controller/servicec.php';

$db=config::getConnexion();
$sql="SELECT * FROM equipe ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$equipes=$recipesStatement->fetchall();

$db=config::getConnexion();
$sql="SELECT * FROM client ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$clients=$recipesStatement->fetchall();


$db=config::getConnexion();
$sql="SELECT * FROM circuit ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$circuits=$recipesStatement->fetchall();




if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Create an instance of the service class
    $service = new servic();

    // Retrieve the car details by ID
    $car = $service->getVoitureById($carId);

    // Process the car details as needed
    // ...
}

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

 ?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <title>resaweb</title>
    <link rel="stylesheet" href="styl.css">

 
    <style>
    .logo-img {
        width: 70px;
        position: absolute;
        top: 30px;
        left: 355px;
        height: 50px;
    }

    .logo-text {
        margin-left: 80px;
        color: #00d9e1;
        font-size: 35px;
        font-family: Arial;
        padding-top: 10px;
        margin-top: 5px;
    }
</style>

    <style>
        /* Animation for the title */
        @keyframes titleAnimation {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Apply the animation to the title */
        .title-animation {
            animation: titleAnimation 2s linear infinite;
        }
    </style>
</head>
<body>


        <div class="navbar">
            
<div class="icon">
    <img src="image/fast one.jpg" alt="Fast One Logo" class="logo-img">

</div>

            <div class="menu" style="margin-left: 120px; margin-top: -10px;">
                <ul>
                <ul>
                    <li><a href="index.php">ACCEUIL</a></li>
                    <li><a href="Voitures.php">VOITURES</a></li>
                    <li><a href="Circuit.php">CIRCUITS</a></li>
                    <li><a href="information.html">INFORMATION</a></li>
                </ul>
                   
                </ul>
            </div>

          
        </div> 
        <div class="body-content">
        <div class="content">

            
        </div>
<div class="login-box" >
    <h1 class="title-animation" style="color: #03e9f4; margin-top: -5px; margin-left: 90px;">Reserver</h1>
    <br>
    <form action="ajouterreservation.php" method="POST">
    <input type="hidden" name="id" />

      <div class="user-box">
    
      </div>
      <label for="date" style="color: #03e9f4;">Date :</label>
      <br>
      <br>
      <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" required style="color: white; background-color: black; border: 1px solid #ccc; padding: 8px; border-radius: 4px; width: 90%;">      <br>
      <br>  



      <div class="bloc-input" style="display: flex;">
      <div class="user-box">
      <label for="reference" style="color: #03e9f4;">Référence :</label>
    <input type="text" name="reference" id="reference" value="<?php echo generateRandomReference(); ?>" disabled>
    <br>
    
      </div>
          
      <div class="user-box">
      <label for="id_equipe" style="color: #03e9f4;">Équipe :</label>
            <select name="id_equipe">
                <?php foreach ($equipes as $eq): ?>
                    <option value="<?php echo $eq['id'] ?>"><?php echo $eq['nom'] ?></option>
                <?php endforeach; ?>
            </select>
      </div>
      </div>
      
<div class="bloc-input" style="display: flex;">
    
      <div class="user-box">
      <label for="id_circuit" style="color: #03e9f4;">Circuit :</label>
            <select name="id_circuit">
                <?php foreach ($circuits as $cir): ?>
                    <option value="<?php echo $cir['id'] ?>"><?php echo $cir['nom'] ?></option>
                <?php endforeach; ?>
            </select>
      </div>

      <div class="user-box">
      <label for="nom" style="color: #03e9f4;">Nom :</label>
            <input type="text" name="nom" id="nom" pattern="[A-Z][a-zA-Z]{2,}" title="Le nom doit commencer par une lettre majuscule et avoir une longueur minimale de 3 caractères." required>

      </div>
</div>

<div class="bloc-input" style="display: flex;">
    
      <div class="user-box">
      <label for="prenom" style="color: #03e9f4;">Prénom :</label>
            <input type="text" name="prenom" id="prenom" pattern="[A-Z][a-zA-Z]{2,}" title="Le prénom doit commencer par une lettre majuscule et avoir une longueur minimale de 3 caractères." required>


      </div>
      <div class="user-box">
      <label for="mail" style="color: #03e9f4;">Email :</label>
            <input type="email" name="mail" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

      </div>
</div>




      <button class="cn" type="submit" name="Ajouter" value="Réserver">Réserver</button>

      <!-- <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a> -->
    </form>
  </div>
        </div>
            
        </div>
         </div>
        </div>
   
        <br>
        <br>
        <br>

        <br>


        <br>
        <br>
        <br>

        <br>





  <script>
        // Obtenir la date actuelle
        var currentDate = new Date().toISOString().split('T')[0];

        // Définir la date minimale pour la saisie de date
        document.getElementById("date").min = currentDate;
    </script>
 
  </body>

  </html>