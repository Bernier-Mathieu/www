 <div id="container">
            <!-- zone de connexion -->
            
            <form action="test.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
            </form>
            <a href="loging.php">Vous êtes administrateur ?</a><br>
            <a href="loginb.php">Vous êtes propriétaire d'une boutique ?</a><br>
            <a href="change.php">changer de mot de passe ?</a>
        </div>