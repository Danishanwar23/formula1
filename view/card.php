<!DOCTYPE html>
<html lang="fr">

<head>
  <title>resaweb</title>
  <link rel="stylesheet" href="card.css">

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

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: black;
      min-height: 800px;
      background-color: rgb(10, 10, 10);
    }

    .containerd {
      position: relative;
      width: 1100px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 30px;
    }

    .containerd .cardd {
      position: relative;
      max-width: 300px;
      height: 215px;
      background-color: #fff;
      margin: 30px 10px;
      padding: 20px 15px;
      display: flex;
      flex-direction: column;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
      transition: 0.3s ease-in-out;
      border-radius: 15px;
    }

    .containerd .cardd:hover {
      height: 320px;
    }

    .containerd .cardd .imaged {
      position: relative;
      width: 260px;
      height: 260px;
      top: -40%;
      left: 8px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .containerd .cardd .imaged img {
      max-width: 100%;
      border-radius: 15px;
    }

    .containerd .cardd .contentd {
      position: relative;
      top: -140px;
      padding: 10px 15px;
      color: #111;
      text-align: center;
      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease-in-out;
    }

    .containerd .cardd:hover .contentd {
      margin-top: 30px;
      visibility: visible;
      opacity: 1;
      transition-delay: 0.2s;
    }

    .main {
      width: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(image/F1.jpeg);
      background-position: center;
      background-size: cover;
      height: 100vh;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 10vh;
      padding: 0 5%;
    }

    .navbar .icon .logo {
      color: white;
      text-transform: uppercase;
      letter-spacing: 5px;
      font-weight: bold;
      font-size: 25px;
      cursor: pointer;
    }

    .navbar .menu ul {
      display: flex;
    }

    .navbar .menu ul li {
      list-style: none;
      margin-left: 20px;
    }

    .navbar .menu ul li a {
      color: white;
      text-decoration: none;
      text-transform: uppercase;
      font-weight: bold;
      transition: 0.5s;
    }

    .navbar .menu ul li a:hover {
      color: #00d9e1;
    }

    .navbar .search .srch {
      width: 200px;
      padding: 5px;
      font-size: 16px;
      border: none;
      outline: none;
    }

    .navbar .search .btn {
      padding: 6px 15px;
      background: #00d9e1;
      color: white;
      border: none;
      outline: none;
      cursor: pointer;
    }

    .content {
      color: white;
      padding: 0 5%;
      text-align: center;
      margin-top: 20px;
    }

    .content h1 {
      font-size: 48px;
      margin-bottom: 30px;
    }

    .content p.par {
      font-size: 18px;
      margin-bottom: 40px;
      letter-spacing: 2px;
      line-height: 1.6;
    }

    .title-animation {
      color: #00d9e1;
      text-align: center;
      margin-top: 20px;
      margin-left: 90px;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="navbar">
      <div class="icon">
        <h2 class="logo" style="margin-left: 55px; ">FAST ONE</h2>
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
    <div class="content" style="margin-left: 70px;">
      <h1>Réservez votre<br><span>formule 1</span> <br>Pour une course</h1>
      <p class="par">Choisissez la voiture de votre écuries préféré <br> et clizer vous dans la peau d'un vrais pilote de f1</p>
    </div>
  </div>

</body>

</html>
