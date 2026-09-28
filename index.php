<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulär</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Test</h1>
    </header>
    <main>
        <form action="index.php" method="post">
            <label for="name">Namn</label>
            <input type="text" name="namn" id="name" required placeholder="Ange ditt namn.">
            <label for="pass">Lösenord</label>
            <input type="password" name="pass" id="pass" required minlength="5">
            <input type="submit" name="btn" balue="log in">
        </form>
    </main>
    <footer>
        &copy; A.Hedell
    </footer>
</body>