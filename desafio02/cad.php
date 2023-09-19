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
    $reais = $_GET["reais"] ?? "NaN";
    $dolares = $reais / 5.22;
    echo "<p>Seus R$ $reais equivalem a <strong>US$ $dolares</strong></p>";
    echo "<p><strong>*Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>

  </main>

</body>

</html>