<?php
require("database.php");

$req = $db->prepare("DELETE FROM users WHERE id = :id");
$req->bindParam(":id" , $_GET["user_id"]);
$req->execute();

header("Location: ../profils.php");