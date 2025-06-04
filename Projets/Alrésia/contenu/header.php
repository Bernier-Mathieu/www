
     <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"style="background-color: #000000;">
  <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" >Accueil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Mon compte
        </a>
        <!-- bloc menu déroulant -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="compte.php">Mes informations</a>
          <a class="dropdown-item" href="myfiches.php">Mes fiches</a>
          <a class="dropdown-item" href="mystories.php">Mes histoires</a>
          <a class="dropdown-item" href="mywrites.php">Mes notes</a>
          <?php
           if(isset($_SESSION['statut'])) {
               if($_SESSION['statut'] == 1) {
                   echo' <a class="dropdown-item" href="adminindex.php">Zone admin</a>';
               }
        } ?>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Le site
        </a>
        <!-- bloc menu déroulant -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Alresia.php">Alrésia</a>
          <a class="dropdown-item" href="librarie.php">La bibliothèque</a>
          <a class="dropdown-item" href="imagerie.php">La photothèque</a>
          <a class="dropdown-item" href="login.php">Se connecter</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar-->