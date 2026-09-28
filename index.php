<!DOCTYPE html>
<?php
    $user="";
    $pass="";
    if(isset($_POST['btn'])){
        $user=$_POST['namn'],
        $pass=$_POST['pass'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulär</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php if(isset($_POST['btn']))( ?>
        <h1>Välkommen <?=user?>!</h1>
        <h2>Ditt lösenord är <?=$pass?></h2>
        <?php )while( ?>
    </header>
    <main>
        <form action="index.php" method="post">
            <label for="name">Namn</label>
            <input type="text" name="namn" id="name" required placeholder="Ange ditt namn.">
            <label for="pass">Lösenord</label>
            <input type="password" name="pass" id="pass" required minlength="16">
            <input type="submit" name="btn" balue="log in">
            <?php) ?>
        </form>
    </main>
    <footer>
        &copy; A.Hedell
    </footer>
</body>