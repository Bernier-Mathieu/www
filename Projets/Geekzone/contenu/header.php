<div id="header">
      <nav>
        <ul>
          <li class="menu-deroulant">
            <a>Mon compte</a>
            <ul class="sous-menu">
              <li><a href="infoc.php">Mon compte</a></li>
              <li><a href="panier.php">Mon panier</a></li>
              <li><a href="login.php">Se Connecter</a></li>
              <li><a href="apropos.php">Nos boutiques</a></li>
            </ul>
          </li>
          <li><a href="index.php"><img id="logo" src="images/logo.png"></a></li>
          <li class="menu-deroulant">
            <a>Le site</a>
            <ul class="sous-menu">
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$sqlQuery = 'SELECT * FROM categorie';
$catStatement = $db->prepare($sqlQuery);
$catStatement->execute();
$cat = $catStatement->fetchAll();

foreach ($cat as $cat) {
?>
    <p><?php echo '<li><a href="categorie.php?id='.$cat['id'].'">'.$cat['libelle'].'</a></li>'  ; ?></p>
<?php
}
?>
            </ul>
          </li>
        </ul>
      </nav>

    </div>