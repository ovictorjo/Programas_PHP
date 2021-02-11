<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eu posso votar?</title>
</head>

<body>
    <?php
        $nasc = $_GET['y'];
        $atual = date('Y');
        $idade = $atual - $nasc;

        echo "Quem nasceu em $nasc tem idade de $idade anos.<br/>";

        echo "E dessa forma, seu voto é ".(($idade>=18 && $idade<65)? "<b>obrigatório.</b>" : "<b>não obrigatório.</b>");
    ?>
</body>
</html>
