<?php
ini_set('display_errors', 'off');
require 'mail.php';


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>zozoy</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./imgs/imgMassEffectA.jpg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/hamburgers.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/app.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;1,100;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
   
</head>
<body id="id-body">
    
    <div class="container-all">
        

        <!--partie header-->
        <div class="partie-header" id="id-header">
            <div class="div-logo">
                <p>zozoy</p>
            </div>

            <!-- navbar responsive-->
            <div class="div-navbar-responsive" id="navbar-tel">
                <a href="#id-body">
                    <div class="">Accueil
                    </div>
                </a>
                <a href="#id-presentation">
                    <div class="">
                        Présentation
                    </div>
                </a>
                <a href="#id-competences">
                    <div class="">
                        Compétences
                    </div>
                </a>
                <a href="#id-experiences">
                    <div class="">Expériences
                    </div>
                </a>
                <a href="#id-portfolio">
                    <div class="">
                        Portfolio
                    </div>
                </a>
                <a href="#id-contact">
                    <div class="">
                        Contact
                    </div>
                </a>
            </div>

            <button id="btn-navbar" type="button"  class=" hamburger hamburger--elastic navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <div class="navbar1">
                    <!-- <img class="img-navbar" src="./imgs/hamburger-menu-icon-png-white-10.jpg"> -->
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </button>
            
            <!-- navbar classique-->
            <div class="div-navbar collapse navbar-collapse navbar in" id="myNavbar">
                <a href="#id-body">
                    <div class="btn-accueil btn-home btn-font-size">Accueil
                    </div>
                </a>
                <a href="#id-presentation">
                    <div class="btn-presentation btn-header  btn-font-size">
                        Présentation
                    </div>
                </a>
                <a href="#id-competences">
                    <div class="btn-competences btn-header  btn-font-size">
                        Compétences
                    </div>
                </a>
                <a href="#id-parcours">
                <div class="btn-parcours btn-header btn-font-size">
                    Parcours
                </div>
                </a>
                <a href="#id-experiences">
                    <div class="btn-experiences btn-home  btn-header btn-font-size">Expériences
                    </div>
                </a>
                <a href="#id-portfolio">
                    <div class="btn-portfolio btn-header btn-font-size">
                        Portfolio
                    </div>
                </a>
                <a href="#id-contact">
                    <div class="btn-contact btn-header btn-font-size">
                        Contact
                    </div>
                </a>
            </div>
            
            
        </div>

        <!--partie de la salutation-->
         
        <div id="particles-js"> 
            <div class="partie-salutation" id="id-salutation">
                <!--partie1 de la salutation-->
                <div class="salutation-text">
                    <p>
                        Hey,<br>Je suis Enzo 👨‍💻<br>En recherche de stage pour la fin de ma formation Osengo <br>en développement Web et Web mobile.
                    </p>
                </div>
                <!--partie2 de la salutation-->
                        
                <div class="salutation-btn">
                    <div></div>
                </div>
                    
            </div>
        </div>
       
        
        <!--partie de la presentation-->
        <div class="partie-presentation" id="id-presentation">

            <!--titre de la presentation-->
            <div class="presentation-titre">
                <div class="div-border-presentation div-border"></div>
                <p class="presentation-titre style-titre">Présentation</p>
                
            </div>
            <!--bloc de la presentation avec img et text-->
            <div class="presentation-profil">
                <!--presentation avec une photo de moi-->
                <div class="presentation-div-img">
                    <img alt="photo de moi" src="./imgs/moi.png">
                </div>
                <!--presentation avec le texte et des btn vers mes liens-->
                <div class="presentation-div-text">
                    <p>
                    Passionné de développement, des nouvelles technologies, de cryptomonnaie et bien plus encore, je suis actuellement en formation Développeur Web et Web mobile chez Osengo. Je recherche actuellement un stage du <span class="span-date">15/07/2022</span> au <span class="span-date">15/09/2022 </span>pour valider ma formation afin de partager mes compétences et ma curiosité.
                    </p>
                    <div class="presentation-div-btn-all">
                        <div class="presentation-div-btn-haut">
                            <a href="./docs/CV-Enzo-Cuny.pdf" target="_blank">
                                <div class="btn-cv">
                                Télécharger CV
                                </div>
                            </a>
                            <a href="https://github.com/zozo404" target="_blank">
                                <div class="btn-github">
                                        Mon Github
                                </div>
                            </a>
                        </div>
                        <div class="presentation-div-btn-bas">    
                            <a href="https://www.linkedin.com/in/enzo-cuny/" target="_blank">
                                <div class="btn-linkedin">
                                    Mon Linkedin
                                </div>
                            </a> 
                        </div>

                    </div>
                
                </div>
            </div>
        </div>

        <!--partie des compétences competences-->
        <div class="partie-competences" id="id-competences">

            <div class="competences-titre">
                <div class="div-border-competences div-border"></div>
                <p class="competences-titre-text style-titre">Compétences</p>
            </div>
            <div class="competences-all-block">
                <div class="">
                    <img src="./imgs/html.png">
                </div>
                <div class="">
                    <img src="./imgs/css.png">
                </div>
                <div class="">
                    <img src="./imgs/sql.png">
                </div>
                <div class="">
                    <img src="./imgs/javascript.png">
                </div>
                <div class="">
                    <img src="./imgs/jquery.png">
                </div>
                <div class="">
                    <img src="./imgs/php.png">
                </div>
                <div class="">
                    <img src="./imgs/symfony.png">
                </div>
                <div class="">
                    <img src="./imgs/bootstrap.png">
                </div>
                <div class="">
                    <img src="./imgs/github.png">
                </div>
                <div class="">
                    <img src="./imgs/git.png">
                </div>
            </div>
        </div>

        <!--partie du parcours -->
        <div class="partie-parcours" id="id-parcours">

            <div class="parcours-titre">
                <div class="div-border-parcours div-border"></div>
                <p class="parcours-titre-text style-titre">Parcours</p>
            </div>

            <ul class="timeline">
                <li>
                    <div class="timeline-badge timeline-badge-gauche" ><img src="./imgs/logo sac.png"></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Formation Osengo</h3>
                                <h4>Développement Web et Web mobile</h4>
                                <p class="text-muted"> 2022</p>
                            </div>
                            <div class="timeline-body">
                                <p>Les 5 éléments - Perpignan</p>

                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="timeline-badge timeline-badge-droite"><img src="./imgs/logo sac.png"></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Niveau BTS SIO</h3>
                                <h4>Services Informatiques aux Organisations</h4>
                                <p class="text-muted"> 2019-2021</p>
                            </div>
                            <div class="timeline-body">
                                <p>Lycée Jean Lurçat - Perpignan</p>

                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="timeline-badge timeline-badge-gauche"><img src="./imgs/logo sac.png"></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Bac STL</h3>
                                <h4>Sciences et Technologies de Laboratoires</h4>
                                <p class="text-muted"> 2018-2019</p>
                            </div>
                            <div class="timeline-body">
                                <p>Spécialité Sciences Physiques et Chimiques en Laboratoire</p>
                                <p>Lycée Aristide Maillol - Perpignan</p>
                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="timeline-badge timeline-badge-droite"><img src="./imgs/logo sac.png"></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Brevet des Collèges</h3>
                                <h4>Brevet Général</h4>
                                <p class="text-muted"> 2016</p>
                            </div>
                            <div class="timeline-body">
                                <p>Collège le Ribéral - Saint-Estève</p>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

        <!--partie de mon exp expérience professionnelle-->
        <div class="partie-experience" id="id-experiences">

            <div class="experience-titre">
                <div class="div-border-experience div-border"></div>
                <p class="experience-titre-text style-titre">Mon expérience professionnelle</p>
            </div>
            <div class="experience-block">
                <div class="experience-block-g">
                    <div class="experience-block-date">
                        <p class="experience-date">
                            2022
                        </p>
                    </div>
                    <div class="experience-block-img">
                        <a href="https://osengo.fr/" target="_blank">
                            <img src="./imgs/LOGO_OSENGO_OK.png" alt="img-osengo">
                        </a>
                    </div>
                    <div class="experience-block-nom">
                        <p>
                            Osengo by AFORMAC
                        </p>
                    </div>
                    <div class="experience-block-pourquoi">
                        <p>
                            Formation
                        </p>
                    </div>
                    <div class="experience-div-border"></div>
                    <div class="experience-block-travail">
                        <p>
                            Développement Web et Web mobile
                        </p>
                    </div>
                    <div class="experience-block-lieu">
                        <p>
                            Les 5 éléments - Perpignan
                        </p>
                    </div>
                </div>
                <div class="experience-block-d">
                    <div class="experience-block-date">
                        <p class="experience-date">
                            2021
                        </p>
                    </div>
                    <div class="experience-block-img">
                        <a href="https://b-now.com/" target="_blank">
                            <img src="./imgs/bnow.jpg" alt="img-bnow">
                        </a>
                    </div>
                    <div class="experience-block-nom">
                        <p>
                            B-Now
                        </p>
                    </div>
                    <div class="experience-block-pourquoi">
                        <p>
                            Stage de BTS 2ème année
                        </p>
                    </div>
                    <div class="experience-div-border"></div>
                    <div class="experience-block-travail">
                        <p>
                            Création de site web
                        </p>
                    </div>
                    <div class="experience-block-lieu">
                        <p>
                            Perpignan
                        </p>
                    </div>
                </div>
                
            </div>   
        </div>

        <!--partie de mon portfolio-->
        
        <div class="partie-portfolio" id="id-portfolio" >

            <div class="portfolio-titre">
                <div class="div-border-portfolio div-border"></div>
                <p class="portfolio-titre-text style-titre">Mon portfolio</p>
            </div>
            <div   class="portfolio-block-general" >
                <div class="portfolio-block-haut">
                    <a href="https://github.com/zozo404/site-cv-new" target="_blank">
                        <div class="portfolio-block-haut-g" >
                            <img src="./imgs/img-site-cv.PNG" alt="portfolio">
                            <p>Nouveau site cv</p>
                        </div>
                    </a>
                    
                    <a href="https://github.com/zozo404/CopieAxa" target="_blank">
                        <div class="portfolio-block-haut-d">
                            <img src="./imgs/axaBerthalon2.png" alt="axaBerthalon">
                            <p>Projet AxaBerthalon (stage)</p>
                        </div>
                    </a>
                </div>
                <div class="portfolio-block-bas">
                    <a href="https://github.com/zozo404/site-Osengo" target="_blank">
                        <div class="portfolio-block-bas-g">
                            <img src="./imgs/osengo.PNG" alt="page-osengo">
                            <p style="margin: 0;">Page fictive Osengo</p>
                        </div>
                    </a>
                    <a href="https://github.com/zozo404/PPE4_FINI" target="_blank">
                        <div class="portfolio-block-bas-d">
                            <img src="./imgs/foot404.JPG" alt="foot404">
                            <p>Projet Foot404 (PPE4-BTS)</p>
                        </div>
                    </a>
                </div>
            </div>
            <a class="portfolio-block-btn" href="https://github.com/zozo404" target="_blank">
                <div class="portfolio-btn">
                    <p>Voir plus</p>
                </div>
            </a>
            
            

        </div>
        <!--partie des contact contact-->
        <div class="partie-contact" id="id-contact">

            <div class="contact-titre">
                <div class="div-border-contact div-border"></div>
                <p class="contact-titre-text style-titre">Contact</p>
            </div>
            <div class="contact-all-block">
                <div class="login-box">
                    
                    <form method="post" action="mail.php" id="form1">
                      <div class="user-box">
                        <input minlength="1" id="name" type="text" name="name" required>
                        <label for="name">Nom</label>
                      </div>
                      <div class="user-box">
                        <input minlength="10" id="email" type="email" name="email" required>
                        <label for="email">Email</label>
                      </div>
                      <div class="user-box">
                        <input minlength="5" type="text" name="objet" id="objet" required>
                        <label>Objet</label>
                      </div>
                      <div class="user-box">
                        <textarea minlength="5" required id="formText" name="formText" cols="7" rows="7"></textarea>
                        <label for="form-text">Message</label>
                        
                      </div>
                      <button type="submit" style="margin-top: 120px; border-radius: 5px;" class="btn-validation">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Envoyer
                      </button>
                      
                    </form>
                   
                    
                </div>
            </div>
            
        </div>
        <div class="div-up">
            <a href="#id-body">
                <span class="material-icons" style="font-size: 50px;">expand_less</span>
            </a>
        </div>
        <!--partie de mon footer-->
        <div class="footer">
            <div class="footer-block-contact">
                    <a href="https://github.com/zozo404" target="_blank"><img src="./imgs/github.png"></a>
                    <a href="https://www.linkedin.com/in/enzo-cuny/" target="_blank"><img src="./imgs/linkedin.png"></a>
                    <a href="https://www.instagram.com/enzosengo66" target="_blank"><img src="./imgs/logo insta.png"></a>
                    <a href="https://twitter.com/zozoy66" target="_blank"><img src="./imgs/twitter.png"></a>
                <!--voir quoi mettre-->
            </div>
            <div class="div-border3"></div>
            <div class="footer-block-credits">
                <div class="footer-credits">
                    <p>Copyright ©zozoy 2022</p>
                </div>
            </div>

        </div>
       

        
        
       
      

    </div>
    
   

    
   <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

   
   
  <script>
    


    /* particulesJS.load(@dom-id, @path-json, @callback (optionnel)); */ 
    particlesJS
     (
        {"particles":{"number":{"value":60,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}
       );
   
     particulesJS. load ( 'particules-js' ,  'assets/particles.json' ,  function ( )  { 
     console . log ( 'callback - config particules.js chargée' ) ; 
    } ) ;

    

    </script>
    
</body>
</html>