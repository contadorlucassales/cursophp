<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorteador de números</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    
    // rand() = 1951 - Linear congrential Gererator
    // mt_rand() = 1997 - Mersenne Twister
    // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
    // random_int() gera números aleatórios criptograficamente seguros
    
    $min = 0;
    $max = 100;
    $num = mt_rand($min, $max);
    
    echo "Gerando um número aleatório entre $min e $max... <br>
    O valor gerado foi <strong>$num</strong>.";
?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
  </main>

</html>