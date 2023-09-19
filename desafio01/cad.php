<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultado Final</h1>
  </header>
  <main>
    <?php
    $numero = $_GET["numero"] ?? "NaN";
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;
    echo "O número escolhido foi <strong>$numero</strong>.<br>
    O seu <i>antecessor</i> é $antecessor.<br>
    O seu <i>sucessor</i> é $sucessor.";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>

  </main>

</body>

</html>