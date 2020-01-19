<?php
    require("head.php");

    if( empty($_SESSION) ){
        header("Location: login.php");
    }
    echo "Bonjour " . $_SESSION["pseudo"];
?>

<a href="functions/disconnect.php">Disconnect</a>

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
                <strong><?= $result["pseudo"] ?></strong>
                <a href="functions/deleteUser.php?user_id=<?php echo $result["id"]; ?>">Supprimer</a>
            </div>
        <?php
    }
    ?>
</div>