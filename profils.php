<?php
    require("head.php");

    if( empty($_SESSION) ){
        header("Location: login.php");
    }
    echo "Bonjour " . $_SESSION["pseudo"];

   //$req = $db->prepare("SELECT FROM users WHERE id = :id");
   //$req->bindParam(":id" , $_GET["user_id"]);
   //$req->execute();
?>
<a href="functions/disconnect.php"> Deconnexion </a>

<div class="users">
    <?php
    // 1 : connect to database
    require("functions/database.php");
    // 2 : prepare request (SELECT)
    $req = $db->prepare("SELECT id, pseudo FROM users WHERE pseudo <> :pseudo");
    $req->bindParam(":pseudo", $_SESSION["pseudo"]);
    // 3 : execute
    $req->execute();
    // 4 : boucle
    while($result = $req->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div>
                <strong><?php echo $result["pseudo"]; ?></strong>
                <a href="functions/deleteUser.php?user_id=<?php echo $result["id"]; ?>">Supprimer</a>
                <a href="userEditForm.php?user_id=<?= $result["id"] ?>&user_pseudo=<?= $result["pseudo"] ?>">Modifier Pseudo</a>
            </div>
        <?php
    }
    ?>
</div>
