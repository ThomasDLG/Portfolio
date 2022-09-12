<?php
$work = array(
    "CAR LOCATION" => array(
        "nom" => "CAR LOCATION",
        "datecreation" => "2020",
        "image" => 'src/thumb/1.jpg',
        "lien" => "vendor/projet1/index.html"),
    "PASTA" => array(
        "nom" => "PASTA",
        "image" => 'src/thumb/2.jpg',
        "datecreation" => "2020",
        "lien" => "vendor/projet2/index.html"),
    "METEO API" => array(
        "nom" => "METEO API",
        "datecreation" => "2020",
        "image" => 'src/thumb/3.jpg',
        "lien" => "vendor/projet3/index.html"),
    "PORTFOLIO" => array(
        "nom" => "PORTFOLIO",
        "datecreation" => "2020",
        "image" => 'src/thumb/4.jpg',
        "lien" => "vendor/projet4/index.html"),
    "MATE" => array(
        "nom" => "MATE",
        "datecreation" => "2021",
        "image" => 'src/thumb/5.jpg',
        "lien" => "https://thomasdelage.com/mate/"),
    "NOWHERE" => array(
        "nom" => "NOWHERE",
        "datecreation" => "2022",
        "image" => 'src/thumb/6.jpg',
        "lien" => "https://thomasdelage.com/nowhere/"),
    "SHASTA" => array(
        "nom" => "SHASTA",
        "datecreation" => "2022",
        "image" => 'src/thumb/7.jpg',
        "lien" => "vendor/projet7/www/index.html"),
    "L'ETOILE" => array(
        "nom" => "L'ETOILE",
        "datecreation" => "2022",
        "image" => 'src/thumb/8.jpg',
        "lien" => "vendor/projet8/index.php"),
    "COMMING SOON" => array(
        "nom" => "COMMING SOON",
        "datecreation" => "2022",
        "image" => 'src/thumb/9.jpg',
        "lien" => "#")
);

$experience = array(
    "EXPERIENCE" => array(
        "nom" => "Elements filter JS",
        "langages" => "HTML, CSS, JS",
        "lien" => "https://codepen.io/th0masdlg/pen/PoQLvBQ"),
    "EXPERIENCE1" => array(
        "nom" => "Switch Day Night JS",
        "langages" => "HTML, CSS, JS",
        "lien" => "https://codepen.io/th0masdlg/pen/WNMmBmL"),
    "EXPERIENCE2" => array(
        "nom" => "Responsive Tiles Website",
        "langages" => "HTML, CSS, JS",
        "lien" => "https://codepen.io/th0masdlg/pen/wvyObVY"),
    "EXPERIENCE3" => array(
        "nom" => "Area hover map",
        "langages" => "HTML, CSS",
        "lien" => "https://codepen.io/th0masdlg/pen/mdXoZdx"),
    "EXPERIENCE4" => array(
        "nom" => "Price calculator JS",
        "langages" => "HTML, CSS, JS",
        "lien" => "https://codepen.io/th0masdlg/pen/BaYbgoG"),
    );
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Thomas Delage Portfolio, UI Design, Web Designer, Web Developer, étudiant en alternance chez Inovagora"
    />
    <link rel="icon" href="src/icon.png" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thomas Delage | Portfolio</title>
</head>
<body>
    <!-- NAVBAR -->

    <section id="navbar">
        <div class="container">
            <div class="naviguation">
                <h1 data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                    <a href="index.php">
                        <img src="src/logo_white.svg" alt="Logo Thomas Delage">
                    </a>
                </h1>
                <nav>
                    <ul data-aos="fade-uo" data-aos-delay="200" data-aos-once="true">
                        <li><a class="link" href="#about">à propos</a></li>
                        <li><a class="link" href="#footer">contact</a></li>
                        <li><a class="btn-icon" href="CV.pdf" target="_blank"><i class="fa-solid fa-file-import"></i>Télécharger mon CV</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- HEADER -->
    <section id="header">
        <div class="container">
            <div class="heading">
                <div data-aos="fade-right"
                     data-aos-delay="200"
                     data-aos-once="true"
                     class="illustration">
                    <img src="src/illustration/head.png" alt="minimalist illustration">
                </div>
                <div class="heading-title">
                    <div class="title-1">
                        <p data-aos="fade-right"
                           data-aos-delay="200"
                           data-aos-once="true"
                        >Salut, je m'appelle</p>
                        <h2 data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-once="true"
                        >Thomas Delage</h2>
                    </div>
                    <div class="title-1">
                        <p data-aos="fade-right"
                           data-aos-delay="350"
                           data-aos-once="true"
                        >je suis ...</p>
                        <h2 data-aos="fade-up"
                            data-aos-delay="350"
                            data-aos-once="true"
                        >Web Developer <br>UI Designer</h2>
                    </div>
                    <div class="heading-box">
                        <i data-aos="fade-up"
                           data-aos-delay="500"
                           data-aos-once="true"
                           class="fa-solid fa-arrow-right"></i>
                        <p data-aos="fade-right"
                           data-aos-delay="500"
                           data-aos-once="true"
                        >Développeur web en alternance chez Inovagora</p>
                    </div>
                    <div class="heading-button">
                        <a data-aos="fade-up"
                           data-aos-delay="650"
                           data-aos-once="true"
                           href="#work"
                           class="btn">Découvrir mon portfolio</a>
                    </div>
                    <div class="heading-social">
                        <a data-aos="fade-up"
                           data-aos-delay="750"
                           data-aos-once="true"
                           href="https://www.behance.net/thomasdelage"><i class="fa-brands fa-behance"></i></a>
                        <a data-aos="fade-up"
                           data-aos-delay="850"
                           data-aos-once="true"
                           href="https://codepen.io/th0masdlg"><i class="fa-brands fa-codepen"></i></a>
                        <a data-aos="fade-up"
                           data-aos-delay="950"
                           data-aos-once="true"
                           href="https://www.linkedin.com/in/thomasdlg/"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="about">
                <h2 data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">Qui suis-je ?</h2>
                <p data-aos="fade-right"
                   data-aos-delay="200" data-aos-once="true">
                   Actuellement en formation de développeur Web et Web mobile, je m'intéresse de près au Web 3.0 et à la blockchain qui sera sans doute bientôt intégré à beaucoup de site internet.... </p>
            </div>
        </div>
    </section>
    <!-- SKILLS -->
    <section id="skills">
        <div class="container">
            <div class="skills">
                <div class="column">
                    <img data-aos="fade" data-aos-delay="200" data-aos-once="true" src="src/icons/design.svg" alt="design icon">
                    <h4 data-aos="fade" data-aos-delay="200" data-aos-once="true">Design</h4>
                    <span data-aos="fade" data-aos-delay="300" data-aos-once="true">Ce que j'aime faire</span>
                        <p data-aos="fade" data-aos-delay="350" data-aos-once="true">UI, UX, Montages, Logos</p>
                    <span data-aos="fade" data-aos-delay="450" data-aos-once="true">Outils</span>
                    <ul>
                        <li data-aos="fade" data-aos-delay="500" data-aos-once="true">Figma</li>
                        <li data-aos="fade" data-aos-delay="550" data-aos-once="true">XD</li>
                        <li data-aos="fade" data-aos-delay="600" data-aos-once="true">Photoshop</li>
                        <li data-aos="fade" data-aos-delay="650" data-aos-once="true">Illustrator</li>
                        <li data-aos="fade" data-aos-delay="700" data-aos-once="true">InDesign</li>
                        <li data-aos="fade" data-aos-delay="750" data-aos-once="true">After Effect</li>
                    </ul>
                </div>
                <div class="column">
                    <img data-aos="fade" data-aos-delay="200" data-aos-once="true" src="src/icons/code.svg" alt="design icon">
                    <h4 data-aos="fade" data-aos-delay="200" data-aos-once="true">Code</h4>
                    <span data-aos="fade" data-aos-delay="300" data-aos-once="true">Langages</span>
                    <p data-aos="fade" data-aos-delay="350" data-aos-once="true">HTML, CSS, JS, PhP, MySQL</p>
                    <span data-aos="fade" data-aos-delay="450" data-aos-once="true">Outils</span>
                    <ul>
                        <li data-aos="fade" data-aos-delay="500" data-aos-once="true">VS Code</li>
                        <li data-aos="fade" data-aos-delay="550" data-aos-once="true">Laragon</li>
                        <li data-aos="fade" data-aos-delay="600" data-aos-once="true">PhPmyAdmin</li>
                        <li data-aos="fade" data-aos-delay="650" data-aos-once="true">Bootstrap</li>
                        <li data-aos="fade" data-aos-delay="700" data-aos-once="true">AOS</li>
                        <li data-aos="fade" data-aos-delay="750" data-aos-once="true">Wordpress</li>
                    </ul>
                </div>
                <div class="column">
                    <img data-aos="fade" data-aos-delay="200" data-aos-once="true" src="src/icons/soft_skills.svg" alt="design icon">
                    <h4 data-aos="fade" data-aos-delay="200" data-aos-once="true">Personnel</h4>
                    <span data-aos="fade" data-aos-delay="200" data-aos-once="true">Soft Skills</span>
                    <p data-aos="fade" data-aos-delay="350" data-aos-once="true">Efficace, Organisé, Polyvalent</p>
                    <span data-aos="fade" data-aos-delay="450" data-aos-once="true">Hobbies</span>
                    <ul>
                        <li data-aos="fade" data-aos-delay="500" data-aos-once="true">Musculation</li>
                        <li data-aos="fade" data-aos-delay="550" data-aos-once="true">Lecture</li>
                        <li data-aos="fade" data-aos-delay="600" data-aos-once="true">Jeux vidéos</li>
                        <li data-aos="fade" data-aos-delay="650" data-aos-once="true">Finances</li>
                        <li data-aos="fade" data-aos-delay="700" data-aos-once="true">Code</li>
                        <li data-aos="fade" data-aos-delay="750" data-aos-once="true">Graphisme</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- WORK -->
    <section id="work">
        <div class="container">
            <div class="work">
                <h2 data-aos="fade-up">Mes projets</h2>
                <p data-aos="fade" data-aos-delay="200" data-aos-once="true">
                    Retrouvez ici mes projets réalisés depuis 2020 à aujourd’hui
                </p>
                <div class="work-container">
                    <?php
                    foreach ($work as $key => $value) {
                        echo '<div data-aos="fade-right" data-aos-once="true" class="work-content">';
                            echo '<img src="' . $work[$key]["image"] . '" alt="' . $key . '">';
                            echo '<div class="figcaption">';
                                echo '<p>' . $key . ' <br> ' . $work[$key]["datecreation"] . '</p>';
                                echo '<a href="' .  $work[$key]["lien"] .'" target="_blank" class="btn">Voir le site</a>';
                            echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- LABS -->

    <section id="labs">
        <div class="container">
            <div class="labs">
                <div class="experience">
                    <p data-aos="fade-right"
                       data-aos-delay="100"
                       data-aos-once="true"
                       class="subtitle">
                       Mes expériences sont présentées ici :)
                    </p>
                    <h2 data-aos="fade-right" data-aos-delay="200" data-aos-once="true">Le labo</h2>
                    <div class="experience-container">
                        <?php
                            foreach ($experience as $key => $value) {
                                echo '<a data-aos="fade-right" data-aos-delay="300" data-aos-once="true" href="' . $experience[$key]["lien"] . '"target="_blank">';
                                    echo '<div class="experience-content">';
                                        echo '<div class="experience-title">';
                                            echo '<p>' . $experience[$key]["nom"] . '</p>';
                                            echo '<i class="fa-solid fa-arrow-right"></i>';
                                        echo '</div>';
                                        echo '<span>' . $experience[$key]["langages"] . '</span>';
                                    echo '</div>';
                                echo '</a>';
                            }
                        ?>
                    </div>
                </div>
                <div data-aos="fade-left"
                     data-aos-delay="100"
                     data-aos-once="true"
                     class="illustration">
                    <img src="src/illustration/labs.png" alt="labo illustration">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer id="footer">
        <div class="container">
            <div class="footer">
            <a href="mailto:thomas.delage02@gmail.com" class="link">thomas.delage02@gmail.com</a>
            <div class="footer-social">
                <a  href="https://www.behance.net/thomasdelage"><i class="fa-brands fa-behance"></i></a>
                <a href="https://codepen.io/th0masdlg"><i class="fa-brands fa-codepen"></i></a>
                <a href="https://www.linkedin.com/in/thomasdlg/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <?php echo '<p>&copy; ' . date("Y") . ' - Thomas Delage</p>'?>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>