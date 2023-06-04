<?php
include_once '../config.php';
include_once '../controller/servicec.php';



if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Create an instance of the service class
    $service = new servic();

    // Retrieve the car details by ID
    $car = $service->getCircuitById($carId);

    // Process the car details as needed
    // ...
}

 ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <title>resaweb</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">FAST ONE</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">VOITURE</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONCEPTION</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Tapez vers le texte">
                <a href="#"> <button class="btn">Recherche</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Réservez votre<br><span>formule 1</span> <br>Pour une course</h1>
            <p class="par">Choisissez la voiture de votre écuries préféré <br> et clizer vous dans la peau d'un vrais pilote de f1</p>

                    </div>
                </div>
        </div>
    </div>
 

               
        </div>



        <style>
    .rectangle-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
        width: 70%;
        margin: 0 auto; /* Ajout de cette ligne pour centrer horizontalement */
    }

    .rectangle {
        width: 300px; /* Ajustement de la largeur des rectangles */
        height: 500px;
        background-color: #f1f1f1;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center; /* Ajout de cette ligne pour centrer le contenu verticalement */
        padding: 20px;
        
    }

    .car-image {
        width: 120%;
        height: auto;
        margin-right: 100px;
        object-fit: cover;
        border-radius: 8px;
        margin-top: 15px;
    }
   
    form {
        width: 50%;
        margin-left: 200px;
        margin-top: 50px;
    }
  
    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input,
    select {
        width: 50%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        padding: 10px 20px;
        background-color: #00d9e1;
        color: #00d9e1;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>


<br>
<div class="rectangle-container">
    <div class="rectangle">
        <div class="row" style="width: 40%;">
        <img class="car-image" src="./uploads/<?php echo $car['image']; ?>" alt="Description de l'image">
        <br>
        <p style="margin-top: 100px; margin-right: 50px; text-align: center; font-size: 18px; font-weight: bold;"><?php echo $car['nom']; ?></p>
    

        </div>
        <iframe src="https://www.google.com/maps/d/embed?mid=1h-sOdukyAEyCbtZz4fRm9ePn1vg3htw&ehbc=2E312F" width="400" height="450"></iframe>
    </div>
</div>



      
    


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>