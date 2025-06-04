<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mathieu Bernier - Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand text-uppercase fw-bold" href="#">
          <span class="bg-danger bg-gradient p-1 rounded-3 text-light">Mathieu</span> Bernier
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#bernier">Qui suis-je ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#expertise">Expertises</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projets">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Certifs">Mon parcours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="bernier" class="py-5">
      <div class="container">
        <div class="row gy-4 py-4">
          <div class="col-12 col-md-6">
            <h1 class="fw-bold fs-3 fs-md-2">Je suis Mathieu Bernier Développeur et Designer Web</h1>
            <h2 class="fw-light fs-3 fs-md-2">Bienvenue dans mon univers créatif</h2>
            <p>Jeune diplômé de BTS SIO en option développement informatique , je désir m'enrichir en compêtences et savoir faire afin d'aquérir une epérience solide dans mon domaine. J'apprend en autodidacte depuis la sortie du lycée pour me développer et m'améliorer.</p>
            <a class="btn btn-danger" href="#expertise">Mon expertise web</a>
          </div>
          <div class="col-12 col-md-6">
            <img src="../img/first.jpg" alt="John Doe" width="100%">
          </div>
        </div>
      </div>
    </section>
    <section id="expertise" class="py-5 bg-light">
      <div class="container">
        <h2 class="mb-0">Mon expertise</h2>
        <h3 class="fw-light fs-5">Développement web et design</h3>
        <!-- Developpement -->
        <div class="row gy-4 mt-4">
          <div class="col-12 col-md-7">

            <!-- Progress bar -->
            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-html5 fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">HTML5</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                         aria-valuemax="100" style="width: 65%" data-bs-toggle="tooltip" title="65%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-css3-alt fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">CSS3</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100" style="width: 55%" data-bs-toggle="tooltip" title="55%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-js fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">JS</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100" style="width: 50%" data-bs-toggle="tooltip" title="50%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-php fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">PHP</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100" style="width: 75%" data-bs-toggle="tooltip" title="75%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-sass fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">JAVA</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar  bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100" style="width: 20%" data-bs-toggle="tooltip" title="0%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 offset-md-1 col-md-4">
            <img src="../img/code.jpg" alt="écran montrant du code php" width="100%">
          </div>
        </div>

        <!-- Design -->
        <div class="row gy-4 mt-4">
          <div class="col-12 col-md-4">
            <img src="../img/design.jpg" alt="écran montrant des designs" width="100%">
          </div>
          <div class="col-12 order-first offset-md-1 col-md-7 order-md-last">

            <!-- Progress bar -->
            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fab fa-figma fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">Figma</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100" style="width: 20%" data-bs-toggle="tooltip" title="20%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-photo-video fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">Azure</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100" style="width: 40%" data-bs-toggle="tooltip" title="0%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-palette fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">Design UI</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar  bg-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                         aria-valuemax="100" style="width: 20%" data-bs-toggle="tooltip" title="20%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-vial fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">Design UX</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar  bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100" style="width: 40%" data-bs-toggle="tooltip" title="40%">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3 p-3 bg-white">
              <div class="row align-items-center">
                <div class="col-5 col-sm-4 col-lg-3 col-xl-2">
                  <div class="d-flex align-items-center">
                    <i class="fas fa-video fa-2x me-3 text-dark"></i>
                    <p class="fw-bold m-0">Vidéo</p>
                  </div>
                </div>
                <div class="col">
                  <div class="progress">
                    <div class="progress-bar  bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                         aria-valuemax="100" style="width: 30%" data-bs-toggle="tooltip" title="30%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>

    </section>

    <section id="projets" class="py-5">
      <div class="container">
        <h2 class="fw-bold fs-3 fs-md-2">Mon portfolio</h2>
        <h3 class="fw-light fs-3 fs-md-2">Projets perso et pro</h3>
        <div class="row gy-4 mt-4">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/JSI.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Site J.S.I</h5>
                                <p class="card-text">Site profesionnel créé pour l'entreprise de J.S.I décembre 2022. HTML , CSS </p>
                                <a class="btn btn-danger">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/Alresia.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Alrésia</h5>
                                <p class="card-text">Site personnel créé pour l'entrainement toujours en cours tout au long de 2022. HTML , CSS , SQL , PHP</p>
                                <a class="btn btn-danger" >En savoir plus</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/etrechy.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Étréchy Auto Bilan</h5>
                                <p class="card-text">Site profesionnel créé pour l'entreprise de Étréchy auto bilan en janvier 2022. HTML , CSS , SQL , PHP </p>
                                <a class="btn btn-danger">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/geekzone.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Geekzone</h5>
                                <p class="card-text">Projet à faire en cours sur 3 semaines milieu 2021 lors de ma première année de BTS. HTML , CSS</p>
                                <a class="btn btn-danger">En savoir plus</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/geekzone.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jeu et Pwa Javascript</h5>
                                <p class="card-text">Projet en javascript en suivant un livre de cours puis tranformer en pwa utilisable sur mobile (en cours)</p>
                                <a class="btn btn-danger" href="../Projets/javascript/Index.php">En savoir plus</a>
                              </div>
                          </div>
                      </div>
    </section>
    <section id="Certifs" class="py-5">
      <div class="container">
        <h2 class="fw-bold fs-3 fs-md-2">Mon parcours</h2>
        <h3 class="fw-light fs-3 fs-md-2">Mes diplômes et certifications</h3>
        <div class="row gy-4 mt-4">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/Design-thinking.avif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification le design thinking</h5>
                                <p class="card-text">Certification sur le design thinkink suivi sur openclassroom. </p>
                                <a class="btn btn-danger" href="doc\Certif-Design-thinking.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/Full.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification Fullstack (Nodes,Express et MongoDB)</h5>
                                <p class="card-text">Certification sur l'utilistaion de Node avec Express, et MongoDB suivi sur openclassroom. </p>
                                <a class="btn btn-danger" href="doc\Certif Node , express , MongoDb.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/Git.avif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification Git et Github</h5>
                                <p class="card-text">Certification sur l'utilistaion de Git et Github pour gérer des projets seul ou à plusieurs, suivi sur openclassroom. </p>
                                <a class="btn btn-danger" href="doc\certif git et github.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/jsweb.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification Javascript pour le web</h5>
                                <p class="card-text">Certification sur l'utilistaion de Javascript pour les sites web suivi sur openclassroom. </p>
                                <a class="btn btn-danger" href="doc/certif-js-web.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/js.avif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification Javascript</h5>
                                <p class="card-text">Certification sur l'utilistaion de Javascript suivi sur openclassroom. </p>
                                <a class="btn btn-danger" href="doc/certif-js.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/Port.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification BootStrap5</h5>
                                <p class="card-text">Certification sur l'utilistaion de Bootstrap5 suivi sur openclassroom. </p>
                                <a class="btn btn-danger" href="doc/certif-bootstrap5.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/BTS.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BTS SIO</h5>
                                <p class="card-text">BTS SIO option SLAM , effectué au lycée Geffroy st Hilaire 91150 , BTS sur la programmation Web et applicative et gestion de base de données.  </p>
                                <a class="btn btn-danger"  href="img/BTS.png">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/PIX.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Certification PIX</h5>
                                <p class="card-text">Certification sur l'informatique en général passée à la fin des années de BTS avec un resultat de 222 PIX. </p>
                                <a class="btn btn-danger" href="doc/PIX.pdf">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="img/bac.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BAC pro SN</h5>
                                <p class="card-text">BTS SN option RISC , effectué au lycée Nikolas Tesla 91410 , BAC pro sur la mise en place de réseau , son entretien et sa réparation et sur le dépannage informatique. </p>
                                <a class="btn btn-danger" href="img/bac.png" >En savoir plus</a>
                            </div>
                        </div>
                    </div>
    </section>

    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <h2 class="fw-bold fs-3 fs-md-2">Besoin de me joindre ?</h2>
        <div class="col">
            NUMÉRO : <a href="tel:0682839369"> 06.30.74.99.98 </a><br></p>
            MAIL : <a href="mailto:contact.jsi91@gmail.com"> bernier.mathieu@gmail.com </a></p>
            LINKEDIN : <a href="https://www.linkedin.com/in/mathieu-bernier-a15aa01b9/"> Mon Linkedin</a><br></p>
        </div>
      </div>
    </section>
  </main>
  <footer class="border-top bg-dark">
    <div class="container py-5">
      <div class="row gy-4">
        <div class="col-12 col-md-4">
          <div class="py-5"></div>
          <p class="text-uppercase fw-bold text-light">
          <span class="bg-danger bg-gradient p-1 rounded-3">Mathieu</span> Bernier
          </p>
        </div>
        <div class="col-12 col-md-4">
          <div class=" py-5"><
          <a class="text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLEG" aria-controls="offcanvasLEG">
            Mentions légales
          </a></div>
          <div class="offcanvas offcanvas-bottom h-50" tabindex="-1" id="offcanvasLEG" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Mentions légales</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body small">
            <pre>
            DROITS D'AUTEUR
Toutes les photographies présentées sur ce site sont de
Bernier Mathieu , l'utilisation d'images de sites professionnels ont étaient autorisés par ceux-ci.
Elles sont soumises à la législation sur les droits d'auteur.
Toute reproduction, représentation, utilisation ou modification des photos de ce site est interdite sans avoir obtenu l’autorisation préalable du photographe.
©berniermathieu
 

CREDITS / MENTIONS LEGALES
CREDITS 
Site Web © Mathieu Bernier

MENTIONS LEGALES

1. PRÉSENTATION DU SITE. 
En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site www.mathieu-bernier.com l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi : 
Propriétaire: mathieu Bernier – 70630749998 – 7 avenue Jean jaurès 91690 Saclas ;Créateur:/webmaster - Mathieu Bernier – bernier.mathieu2001@gmail.com

Hébergeur: 

Crédits : © Mathieu Bernier

les mentions légales ont étés générées et offertes par Subdelirium création de site web  

2. CONDITIONS GÉNÉRALES D’UTILISATION DU SITE ET DES SERVICES PROPOSÉS. 
L’utilisation du site www.mathieu-bernier.com implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites.

3. DESCRIPTION DES SERVICES FOURNIS. 
Le site www.mathieu-bernier.com a pour objet de fournir une information concernant l’ensemble des activités de Mathieu Bernier et s’efforce de fournir sur le site www.mathieu-bernier.com des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. Tous les informations indiquées sur le site www.mathieu-bernier.com sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site www.mathieu-bernier.com ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. 

4. LIMITATIONS CONTRACTUELLES SUR LES DONNÉES TECHNIQUES. 
Le site utilise la technologie JavaScript. Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour 

5. PROPRIÉTÉ INTELLECTUELLE ET CONTREFAÇONS. 
Mathieu Bernier est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Mathieu Bernier. Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle. 

6. LIMITATIONS DE RESPONSABILITÉ. 
Mathieu Bernier ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.mathieu-bernier.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité. Sergio Grazia ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site www.mathieu-bernier.com. 

7. GESTION DES DONNÉES PERSONNELLES. 
En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995. A l'occasion de l'utilisation du site www.mathieu-bernier.com peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site www.mathieu-bernier.com le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur. Aucune information personnelle de l'utilisateur du site www.mathieu-bernier.com n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. 

8. LIENS HYPERTEXTES ET COOKIES. 
Le site www.mathieu-bernier.com contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Mathieu Bernier Cependant, Mathieu Bernier n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait. La navigation sur le site

www.mathieu-bernier.com n'utilise aucun cookies autre que ceux de fonctionnement.

9. DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION. 
Tout litige en relation avec l’utilisation du site www.mathieu-bernier.com est soumis au droit français. 
Loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés. 
Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique. 
            </pre>
          </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="py-5 text-md-end">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/mathieu-bernier-a15aa01b9/" class="text-decoration-none text-danger" data-bs-toggle="tooltip" title="Linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
            </li></ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </footer>
</body>
</html>