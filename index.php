<?php require "head.php"; ?>

<body>
    <h1>TINCAT</h1>

    <form action="functions">
        <input type="text" name="pseudoUser" placeholder="Pseudo">
        <input type="password" name="passwordUser" placeholder="Mot de passe">
        <input type="submit" value="CONNEXION">
        <a href="register.php">Créer un compte</a>
    </form>

    <div class="alert-box">
        <?php
            if(isset($_GET["errorMessage"])){
                echo "<div id=\"error\">";
                echo $_GET["errorMessage"];
                echo "</div>";
            }
            if(isset($_GET["notification"])){
                echo "<div id=\"notif\">";
                echo $_GET["notifMessage"];
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>