<?php
// Etape 1 : config database
$DB_HOST = "localhost";
$DB_NAME = "tincat";
$DB_USER = "root";
$DB_PASSWORD = "";
// Etape 2 : Connexion to database
try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
var_dump($_POST);
// Avant d'insérer en base de données faire les vérifications suivantes

    if(empty($_POST["email"])){
        header("Location: ../index.php?errorMessage=Email manquant");
    }elseif(empty($_POST["pseudo"])){
        header("Location: ../index.php?errorMessage=Pseudo manquant");
    }elseif(empty($_POST["password"])){
        header("Location: ../index.php?errorMessage=Mot de Passe manquant");
    }elseif($_POST["password_confirm"] != $_POST["password"]);{
        header("Location: ../index.php?errorMessage=Mot de passe non correspondant");
    }elseif(empty($_POST["password_confirm"])){
        header("Location: ../index.php?errorMessage=Confirmation password manquant");
    }

// Etape 3 : prepare request
$req = $db->prepare("INSERT INTO users (email, pseudo, password) VALUES(:email, :pseudo, :password)");
$req->bindParam(":email", $_POST["email"]);
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->execute();