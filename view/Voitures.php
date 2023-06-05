<?php
include_once '../config.php';
include_once '../controller/servicec.php';


$produitc=new servic();
//$prod=$produitc->affichervoitavecplusreservation();
 $prod=$produitc->affichervoiture();


$a=new servic();
$circuits=$a->affichercircuit();

if (isset($_GET['search_value'])) {
  $search_value = $_GET['search_value'];
  $prode = $produitc->recherchevoit($search_value);
} else {
  $prode = $produitc->affichervoiture();
}
 ?>




<!DOCTYPE html>
<html lang="fr">
    
<head>
    <title>resaweb</title>
    <link rel="stylesheet" href="style.css">
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
</head>
<body>

   
   

   
<div class="main" style="    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(image/F1.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;" >
        <div class="navbar">
         
<div class="icon">
    <img src="image/fast one.jpg" alt="Fast One Logo" class="logo-img">
    <!-- <h2 class="logo-text">FAST ONE</h2> -->
</div>

            <div class="menu">
            <ul>
            <ul>
                    <li><a href="index.php">ACCEUIL</a></li>
                    <li><a href="Voitures.php">VOITURES</a></li>
                    <li><a href="Circuit.php">CIRCUITS</a></li>
                    <li><a href="information.html">INFORMATION</a></li>
                </ul>
                </ul>
            </div>

            <div class="search">
                <form action="recherche.php" method="GET">
                    <input class="srch" type="search" name="search_value" placeholder="Tapez votre recherche">
                    <button class="btn" type="submit">Recherche</button>
                </form>
            </div>
           





        </div> 
        <div class="content">
            <h1>Réservez votre<br><span>formule 1</span> <br>Pour une course</h1>
            <p class="par">Choisissez la voiture de votre écuries préféré <br> et clizer vous dans la peau d'un vrais pilote de f1</p>

            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe> -->

              
                    </div>
                </div>

          


        </div>
    </div>
    

    <style>
    .car-details {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease;
    }

    .rectangle:hover .car-details {
        opacity: 1;
    }
</style>







    <br>
<br>

<br><br>
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




<h1 class="title-animation" style="color: #00d9e1; text-align: center;  margin-top: 20px; margin-left: 90px;">--- La liste des voitures  ---</h1>
<div class="rectangle-container">

    <?php foreach($prod as $pro): ?>   
       
        <div class="rectangle" style="width: 300px; height: 300px; margin: 10px; background-color: #f1f1f1; border-radius: 8px; overflow: hidden; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
        
            <a href="res.php?id=<?php echo $pro['id']; ?>">
                <div class="rectangle-image" style="position: relative; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                    <img src="image/<?php echo $pro['image']; ?>" alt="Description de l'image" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                    <img src="image/<?php echo $pro['logo']; ?>" alt="Description de l'image" style="position: absolute; top: 0px; right: 25px; width: 50px; height: 50px; object-fit: cover;">
                    <div class="car-details">
                        <span>Marque: <?php echo $pro['marque']; ?></span>
                        <span>Nom: <?php echo $pro['nom']; ?></span>
                        <span>Vitesse: <?php echo $pro['vitesse']; ?></span>
                        <span>poid: <?php echo $pro['poid']; ?></span>
                        <span>description: <?php echo $pro['description']; ?></span>
                        <span>description: <?php echo $pro['description']; ?></span>
                        <?php
    $equipeId = $pro['id_equipe'];

    $a=new servic();
    $equipe =$a->getEquipeById($equipeId); 

   
    if ($equipe) {
        $nomEquipe = $equipe['nom']; 

      
        echo '<span>Équipe: ' . $nomEquipe . '</span>';
    }
    ?>

                    </div>
                </div>
            </a>
        </div>
        
    <?php endforeach; ?>
</div></div>

    
    

   
      

<br>
<br>
<br>
      
    

    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>