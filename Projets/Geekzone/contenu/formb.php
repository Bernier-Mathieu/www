<div id="container">
            <!-- zone de connexion -->
            
            <form action="../contenu/connectionb.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
            <a href="login.php">Vous êtes client ?</a><br>
            <a href="loging.php">Vous êtes administrateur ?</a><br>
            <a href="change.php">changer de mot de passe ?</a>
        </div>