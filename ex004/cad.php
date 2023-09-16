<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resutado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
    echo "Muito prazer em te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site."
    // var_dump($_REQUEST) // $_GET $_POST $_COOKIES
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

  </main>

</body>

</html>