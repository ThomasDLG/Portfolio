<?php
$ch = curl_init();

$research = $_POST['research'];

try {

    $proxy = "127.0.0.1:3306";
    $timeout = '3000';
    $curl = NULL;

    curl_setopt($ch, CURLOPT_VERBOSE, 0);

    curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/search/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&query=' . $research . '&page=1&include_adult=false');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo curl_error($ch);
        die();
    }
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($http_code == intval(200)){
        // var_dump(json_decode($response));
    }
    else{
        echo "Ressource introuvable : " . $http_code;
    }
} catch (\Throwable $th) {
    throw $th;
} finally {
    curl_close($ch);

}

$data = json_decode($response);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>L'étoile</title>
  </head>
  <body>

  <!-- SEARCHING POPUP -->

  <div class="searching-popup">
      <a href="#" class="close-searching-popup"><img src="src/icons/cross-white.svg" alt="close"></a>
      <div class="content-search">
        <form action=""  id="getInputValue" class="flexForm">
          <input type="text" class="searching-popup-input" placeholder="Rechercher" name="searchMovie" id="searchMovie">
          <button type="submit" class="submit-searching"><img src="src/icons/search-white.svg" alt="search icon"></button>
        </form>
          <div id="searchResults" class="posterResults">

          </div>
      </div>
  </div>

  <!-- NAVBAR -->

    <header id="navbar">
      <div class="container-content">
        <div class="navbar">
          <div class="logo-navbar">
            <h1><a href="index.php"><img src="src/logo.svg" alt="logo l'étoile"></a></h1>
          </div>
          <div class="searchbar-navbar">
            <form action="search.php "method="POST">
              <input type="text" class="searchbar" name="research" placeholder="Recherche">
            </form>
          </div>
          <div class="naviguation-navbar">
            <nav>
              <ul>
                <li><a href="index.php"><img src="src/icons/home.svg" alt="">Accueil</a></li>
                <li><a href="#"><img src="src/icons/films.svg" alt="">Films</a></li>
                <li><a href="#"><img src="src/icons/bookmark.svg" alt="">My-Toile</a></li>
                <li><a href="#"><img src="src/icons/about.svg" alt="">Plus</a></li>
                <li><a href="#" id="searching"><img src="src/icons/search.svg" alt="">Recherche</a></li>
              </ul>
            </nav>
          </div>
          <div class="login-navbar">
            <a href="#"><img src="src/icons/login.svg" alt="">Connexion</a>
          </div>
        </div>
      </div>
    </header>

    <section id="research-results">
        <div class="container-mytoile">
          <?php echo'<h2>Résultats pour la recherche ' . '"' . $research . '"' . '</h2>' ?>
            <div class="films">
                <?php
                    foreach ($data as $value) {
                          if (is_array($value) || is_object($value)){
                              foreach ($value as $films) {
                                  echo '<div class="card">';
                                      echo '<a href="#">';
                                          echo '<img src="' . 'https://image.tmdb.org/t/p/w500' . $films->poster_path . '" alt="' . $films->original_title . '">';
                                      echo '</a>';
                                  echo '</div>';
                              }
                          }
                      }
                ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer id="footer">
      <div class="container">
        <div class="footer">
          <!-- CONTENT-1 -->
          <div class="footer-content">
            <a href="#"
              ><img src="src/Long blanc.svg" alt="Logo L'étoile"
            /></a>
            <div class="social-legale">
              <div class="social-icons">
                <a class="link" href="#"
                  ><i class="fa-brands fa-twitter"></i></a>
                <a class="link" href="#"
                  ><i class="fa-brands fa-youtube"></i></a>
                <a class="link" href="#"
                  ><i class="fa-brands fa-facebook-f"></i></a>
                <a class="link" href="#"
                  ><i class="fa-brands fa-instagram"></i></a>
              </div>
              <ul>
                <li><a class="link" href="#">Mentions légales</a></li>
                <li><a class="link" href="#">CGV</a></li>
                <li><a class="link" href="#">Cookies</a></li>
                <li><a class="link" href="#">RGPD</a></li>
              </ul>
            </div>
          </div>

          <!-- CONTENT-2 -->
          <div class="footer-content">
            <h4>Newsletter</h4>
            <form action="" method="POST">
              <input class="newsletter" type="text" placeholder="Email :" />
              <button class="btn" type="submit">
                <img src="src/icons/sent-white.svg" alt="" />
              </button>
            </form>
            <p>Inscrivez-vous à la newsletter</p>
          </div>

          <!-- CONTENT-3 -->
          <div class="footer-content">
            <h4>Naviguation</h4>
            <ul>
              <li><a class="link" href="#">Films & Evénements</a></li>
              <li><a class="link" href="#">My-Toile</a></li>
              <li><a class="link" href="#">Luxe Diner</a></li>
              <li><a class="link" href="#">Tarifs</a></li>
              <li><a class="link" href="#">Abonnements</a></li>
            </ul>
          </div>

          <!-- CONTENT-4 -->
          <div class="footer-content">
            <h4>Naviguation</h4>
            <ul>
              <li><a class="link" href="#">A propos</a></li>
              <li><a class="link" href="#">Contact</a></li>
              <li><a class="link" href="#">F.A.Q</a></li>
              <li><a class="link" href="#">Accéssibilité</a></li>
              <li><a class="link" href="#">Plan du site</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/app.js" defer></script>
    <script src="js/api_request.js"></script>
  </body>
</html>
