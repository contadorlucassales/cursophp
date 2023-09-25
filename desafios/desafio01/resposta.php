<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e Sucessor</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <main>
    <h1>Resultado Final</h1>
    <p>
      <?php
      $numero = $_GET["numeroNoInput"] ?? "NaN";
      // $antecessor = $numero - 1;
      // $sucessor = $numero + 1;
      echo "O número escolhido foi <strong>$numero</strong>.";
      echo "<br>O seu <em>antecessor</em> é " . ($numero - 1) . ".";
      echo "<br>O seu <em>sucessor</em> é " . ($numero + 1) . ".";
    ?>
    <p>
      <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </p>
    </p>
  </main>

</body>

</html>