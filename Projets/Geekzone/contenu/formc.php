 <div id="container">
            <!-- zone de connexion -->
            
            <form action="../contenu/change.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

                <label><b>Mot de passe actuel</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                <label><b>Mot de passe nouveau</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="passwordn" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
            <a href="loging.php">Vous êtes administrateur ?</a><br>
            <a href="loginb.php">Vous êtes propriétaire d'une boutique ?</a>
        </div>