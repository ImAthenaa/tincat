<?php
require("head.php");
require("functions/database.php");

// BONUS //

// $req = $db->prepare("SELECT FROM users WHERE id = :pseudo");
// $req->bindParam(":pseudo" , $_GET["user_id"]);
// $req->execute();
// $result = $req->fetch(PDO::FETCH_ASSOC);

//header("Location: ../userEdit.php");

?>


<form action="functions/userEdit.php" method="post">
<p>Modifier le pseudo</p>
    <input type="hidden" name="user_id" value="<?php echo $_GET["user_id"]; ?>">
    <input type="text" placeholder="Nouveau pseudo" name="user_pseudo" value="<?php echo $_GET["user_pseudo"]; ?>">
    <input type="submit" value="Modifier">
</form>
