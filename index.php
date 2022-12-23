<?php
session_start();
define('MyConst', TRUE);
include_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Orasis 2023</title>

   <!-- import css -->
   <link rel="stylesheet" href="assets/style/style.css" />

   <!-- import GSAP -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</head>

<body class="home">
   <?php include_once 'assets/includes/_navbar.php' ?>
   <div class="hero_container">
      <div class="hero">
         <div class="content">
            <div class="d-flex column">
               <h1>Bienvenue pour la 19ème édition d’ORASIS</h1>
               <div class="content-container d-flex row">
                  <div class="main-container">
                     <div class="para">
                        <p>
                           Journée francophone des jeunes chercheurs en vision par
                           ordinateur.
                           <br />
                           Elle se déroulera du 26 au 27 Mai 2023 à Carqueiranne.
                           <br />
                           Ces journées se veulent être, pour certains, la première
                           opportunité d'entendre des chercheurs confirmés du domaine et de
                           s'initier au processus de rédaction, dépôt, évaluation et
                           présentation d'articles de recherche.
                        </p>
                     </div>
                  </div>
                  <div class="imgReveal">
                     <img src="assets/img/native-mileiade.jpg" alt="" />
                     <div class="clippedImage">
                        <img src="assets/img/computed-mileiade.jpg" alt="" />
                     </div>
                     <div class="infoOverlay">
                        <div class="overlayCard">
                           <div class="overlayContent">
                              <p>
                                 Cette image a été traitée par un ordinateur pour reconnaître
                                 les différents types de surface
                              </p>
                           </div>
                        </div>

                        <div class="overlayBtn">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M18.5,8.51h-7v-7A1.5,1.5,0,0,0,10,0h0A1.5,1.5,0,0,0,8.5,1.5v7h-7a1.5,1.5,0,0,0,0,3h7v7A1.5,1.5,0,0,0,10,20h0a1.5,1.5,0,0,0,1.5-1.5v-7h7a1.5,1.5,0,0,0,0-3Z"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br /><br /><br />

   <div class="container">
      <section id="accueil">
         <h1>Accueil</h1>
         <p>
            La 19ième édition du colloque d’ORASIS, journées francophones des jeunes
            chercheurs en vision par ordinateur, se déroulera du 22 au 26 mai 2023 à
            Carqueiranne (Var, PACA). Elle sera organisée par l'équipe Signal et Image
            du Laboratoire d'Informatique et Systèmes UMR7020, au centre vacanciel
            Miléade à Carqueiranne. Ce colloque vise à réunir de jeunes chercheurs
            francophones (doctorants et jeunes docteurs) issus de la communauté de la
            vision par ordinateur ou de domaines connexes, avec l'ambition de
            favoriser, dans une ambiance conviviale, les échanges entre les
            participants, notamment entre les jeunes chercheurs et chercheurs
            expérimentés dans le domaine. Les journées seront rythmées par des
            sessions plénières ainsi que des sessions posters. Plusieurs sessions (7)
            de conférenciers invités complètent le déroulement de ces journées. Les
            contributions doivent porter sur des travaux de recherche en lien avec la
            vision par ordinateur et le traitement d'images. Elles peuvent concerner
            des domaines d'application comme la vision robotique, l'imagerie médicale
            et biologique, l'imagerie par satellite, le multimédia, la réalité
            virtuelle. Plus précisément, elles peuvent couvrir les domaines suivants :
         </p>
      </section>
      <br />
      <section id="intervenants">
         <h1>Les intervenants</h1>
         <h2>Intelligence artificielle</h2>
         <h2>traitement des signaux numériques</h2>
         <h2></h2>
      </section>
      <br />
      <section id="programme">
         <h1>Le programme</h1>
      </section>
      <br />
      <section id="evenement">
         <h1>L'événement</h1>
         <h2>Les derniers articles</h2>
         <a href="articles">Voir tous les articles</a>
      </section>
      <br />
      <section id="utiles">
         <h1>Infos utiles</h1>
         <h2>Dates importantes</h2>
         <h2>Carte</h2>
      </section>
   </div>

   <?php include_once 'assets/includes/_footer.html' ?>

   <!-- Javascript import files -->
   <script src="assets/app/index.js"></script>
   <script src="assets/controllers/js/accueil.js"></script>
</body>

</html>