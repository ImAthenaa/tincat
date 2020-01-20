<?php

    require("database.php");

    //var_dump($_POST["pseudo"]);
    //var_dump($_POST["id"]);

    //$pseudo = $_POST["pseudo"];
    //$id = $_POST["id"];

    if( empty($_POST["user_pseudo"]) ){
        $messagepseudomanquant = "Le pseudo est manquant";
        header("Location: userEditForm.php?message=$messagepseudomanquant");
    }else{
        $req = $db->prepare("UPDATE users SET pseudo=:pseudo WHERE id=:id");
        $req->bindParam(":id" , $_POST["user_id"]);
        $req->bindParam(":pseudo" , $_POST["user_pseudo"]);
        $req->execute();
        header("Location: ../profils.php");
    }
