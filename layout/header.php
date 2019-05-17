<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aztrek, le Trek de A à Z</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/stellarnav.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="page-<?= $title ?>">

  <header class="page-header">

    <div class="page-header-inner container">

      <div class="header-logo">

        <div class="logo">
          <a href="index.php" title="Accueil"><img src="./images/logo_aztrek2_integration.png" alt="Logo"></a>
        </div>
        <h1 class="site-title hidden-text">Aztrek</h1>

      </div><!-- .header-logo -->

      <div class="header-nav">

        <nav class="main-nav stellarnav">
          <ul class="menu">
            <li><a href="#">Pays</a>
              <ul>
              <li><a href="pays.php">Mexique</a></li>
                <li><a href="pays.php">Honduras</a></li>
                 <li><a href="pays.php">Guatemala</a></li>
                <li><a href="pays.php">Salvador</a></li>
                <li><a href="pays.php">Costa Rica</a></li>
            </ul></li> 
            <li><a href="#">Blog</a></li>
            <li> <a href="#">Qui sommes nous?</a></li>
            <li><a href="#">My Aztrek</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">
                  <img src="./images/panier_final_rose.ico" alt="panier">
              </a></li>
          </ul>
        </nav>

        <form class="search-form" action="#" method="get">
          <input type="text" name="keywords" value="" placeholder="Rechercher">
          <button type="submit" name="submit-btn"><i class="fas fa-search"></i><span class="hidden-text">Valider</span>
          </button>
        </form>

      </div><!-- .header-nav -->

    </div><!-- .page-header-inner -->

  </header><!-- .page-header -->