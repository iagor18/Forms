<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$media = $_POST["media"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro Recebido</title>
</head>
<body>

<h1>Obrigado pelo envio!</h1>

<p>Nome: <?php echo $nome; ?></p>
<p>Média: <?php echo $media; ?></p>

</body>
</html>