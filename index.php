<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="signos">
    <?php include('layouts/header.php'); ?>
        <form id="signo-form" method="POST" action="layouts/show_zodiac_sign.php">
            <label for="data">Insira sua data de nascimento:</label>
            <input type="date" id="data" name="data" required placeholder="Exemplo: 21/03/2000">
            <button type="submit">Verificar Signo</button>
        </form>
    </div>
    
</body>
</html>