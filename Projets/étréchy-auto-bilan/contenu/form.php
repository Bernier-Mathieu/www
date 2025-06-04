<div id="container">
      <!-- zone de connexion -->
      
      <form action="contenu/base.php" method="POST">
          <h1>Connexion</h1>
          
          <label><b>Nom d'utilisateur</b></label>
          <input type="text" placeholder="Entrer le nom d'utilisateur" minlength="4" maxlength="6" name='username' required>

          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="Entrer le mot de passe" minlength="4" maxlength="8" name='password' required>

          <input type="submit" id='submit' value='LOGIN' name='submit'>
      </form>
  </div>