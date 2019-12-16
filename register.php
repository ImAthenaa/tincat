<?php require "head.php"; ?>

<body>
    <div class="form-container">
        <h1>TINCAT</h1>
        <form action="functions/setUser.php" method="post">
            <input type="email" placeholder="email" name="email">
            <input type="text" placeholder="pseudo" name="pseudo">
            <input type="password" placeholder="password" name="password">
            <input type="password" placeholder="password_confirm" name="password_confirm">
            <input type="submit" value="Créer un compte">
        </form>
    </div>
</body>
</html>
