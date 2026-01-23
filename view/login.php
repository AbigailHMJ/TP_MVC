<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="../public/css/style.css" rel="stylesheet">
    <title>Connexion</title>
</head>

<body>
    <div class="login-title-background">
        <h1 class="login-title">se connecter</h1>
    </div>
    <form method="POST">
        <input type="email" class="form-email" name="email" placeholder="Email" required>
        <input type="password" class="form-password" name="password" placeholder="Mot de passe" required>
        <input type="submit" class="form-submit" value="Connexion" name="register">
    </form>
    <a class="go-back" href="http://localhost/TP_MVC/">← Retour</a>

<?php include('layout/footer.php'); ?>
</body>

</html>