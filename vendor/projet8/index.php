<?php
$ch = curl_init();
$cs = curl_init();

$genres = array(
  "Action" => array('nom' => 'Action', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=28&without_genres=35%2C12%2C16%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37&with_watch_monetization_types=buy'),
  "Aventure" => array('nom' => 'Aventure', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=12&without_genres=35%2C28%2C16%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Animation" => array('nom' => 'Animation', 'url' =>'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=16&without_genres=35%2C28%2C12%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Comédie" => array('nom' => 'Comédie', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=35&without_genres=16%2C28%2C12%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Crime" => array('nom' => 'Crime', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=80&without_genres=16%2C28%2C12%2C35%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Drame" => array('nom' => 'Drame', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=18&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Familial" => array('nom' => 'Familial', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10751&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Fantastique" => array('nom' => 'Fantastique', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=14&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Histoire" => array('nom' => 'Histoire', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=36&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Horreur" => array('nom' => 'Horreur', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=27&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Mystère" => array('nom' => 'Mystère', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=9648&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Romance" => array('nom' => 'Romance', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10749&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Science-Fiction" => array('nom' => 'Science-Fiction', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=878&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Thriller" => array('nom' => 'Thriller', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=53&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C878%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Guerre" => array('nom' => 'Guerre', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10752&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C878%2C53%2C37%2C&with_watch_monetization_types=buy'),
  "Western" => array('nom' => 'Western', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10752&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C878%2C53%2C37%2C&with')
);

$mainUrl = "discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&primary_release_date.gte=2000-04-01&primary_release_date.lte=2022-06-14&language=fr-FR";

if (!empty($_GET["genre"])) {
  $mainUrl = $genres[$_GET["genre"]]["url"];
} else {
  $mainUrl = "discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&primary_release_date.gte=2000-04-01&primary_release_date.lte=2022-06-14&language=fr-FR";
}
try {

    $proxy = "127.0.0.1:3306";
    $timeout = '3000';
    $curl = NULL;

    curl_setopt($ch, CURLOPT_VERBOSE, 0);

    curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/' . $mainUrl . '');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($cs, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/upcoming?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR');
    curl_setopt($cs, CURLOPT_HEADER, false);
    curl_setopt($cs, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cs, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($cs, CURLOPT_TIMEOUT, 15);
    curl_setopt($cs, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($cs, CURLOPT_MAXREDIRS, 3);
    curl_setopt($cs, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $commingSoon = curl_exec($cs);

    if (curl_errno($ch)) {
        echo curl_error($ch);
        die();
    }
    if (curl_errno($cs)) {
      echo curl_error($cs);
      die();
    }
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($http_code == intval(200)){
        // var_dump(json_decode($response));
    }
    else{
        echo "Ressource introuvable : " . $http_code;
    }
    $http_codeCs = curl_getinfo($cs, CURLINFO_HTTP_CODE);
    if($http_codeCs == intval(200)){
        // var_dump(json_decode($response));
    }
    else{
        echo "Ressource introuvable : " . $http_codeCs;
    }
} catch (\Throwable $th) {
    throw $th;
} finally {
    curl_close($ch);
    curl_close($cs);
}

$data = json_decode($response);
$dataCs = json_decode($commingSoon);
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
        <form id="getInputValue" class="flexForm">
          <input type="text" class="searching-popup-input" placeholder="Rechercher" name="searchMovie" id="searchMovie">
          <button type="submit" class="submit-searching"><img src="src/icons/search-white.svg" alt="search icon"></button>
        </form>
          <div id="searchResults" class="posterResults">

          </div>
      </div>
  </div>

  <!-- NAVBAR -->

    <header id="navbar">
      <div class="container">
        <div class="navbar">
          <div class="logo-navbar">
            <h1><a href="index.php"><img src="src/logo.svg" alt="logo l'étoile"></a></h1>
          </div>
          <div class="searchbar-navbar">
            <form action="search.php" method="POST">
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

    <section id="mytoile">
      <div class="container-mytoile">
        <div class="mytoile">
         <div class="mytoile-img"><a href="" class="btn">S'abonner</a></div>
        </div>
      </div>
    </section>

    <!-- MOVIES LIST -->

    <section id="soonMovie">
      <div class="container-content">
        <h2>Films à l'affiche</h2>
          <?php
              echo '<div class="select-container">';
                echo '<div class="select">';
                  echo '<div class="select__trigger"><span>';
                  if(empty($_GET["genre"])) {
                      echo "Filtrer par genres";
                  } else {
                    echo $_GET["genre"];
                  }
                  echo'</span>';
                  echo '</div>';
                echo '</div>';
                  echo '<div class="option-container">';
                  foreach ($genres as $key => $value) {
                    echo '<a href="index.php?genre=' . $key . '"><div class="option-select">';
                      echo '<span class="option selected" data-value="' . $value["nom"] . '">' . $value["nom"] . '</span>';
                    echo '</div></a>';
            }
                  echo '</div>';
                echo '</div>';
          ?>
            <div class="films">
            <?php
            foreach ($data as $value) {
              $movieCount = 0;
                if (is_array($value) || is_object($value)){
                    foreach ($value as $films) {
                      $movieCount++;
                      if ($movieCount < 9) {
                        echo '<div class="card">';
                            echo '<a href="">';
                                echo '<img src="' . 'https://image.tmdb.org/t/p/w500' . $films->poster_path . '" alt="' . $films->original_title . '">';
                            echo '</a>';
                        echo '</div>';
                      }
                    }
                }
            }
            ?>
            </div>
            <div class="showFilms">
            <a href="" class="btn btn-icon-left"><img src="src/icons/plus-circle-white.svg" alt="">Voir tous les films</a>
            </div>
        </div>

    </section>

    <!-- COMMING SOON -->

    <section id="movie">
        <div class="container-content">
        <h2>Prochainement</h2>
            <div class="films">
            <?php
            foreach ($dataCs as $valueCs) {
              $movieCount = 0;
                if (is_array($valueCs) || is_object($valueCs)){
                    foreach ($valueCs as $filmsCs) {
                      if ($movieCount < 8 && !empty($filmsCs->poster_path)) {
                        echo '<div class="card ">';
                            echo '<h4>' . $filmsCs->release_date .'</h4>';
                            echo '<a href="">';
                                echo '<img src="' . 'https://image.tmdb.org/t/p/w500' . $filmsCs->poster_path . '" alt="' . $filmsCs->original_title . '">';
                            echo '</a>';
                        echo '</div>';
                        $movieCount++;
                      }
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
              ><img src="src/Long-blanc.svg" alt="Logo L'étoile"
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
            <form method="POST">
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
