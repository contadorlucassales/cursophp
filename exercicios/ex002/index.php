<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>

  <p>
    <?php 
        $divisaoInteira = intdiv(20, 9);
        echo "A resposta é $divisaoInteira.";       
  ?>
  </p>

  <p>
    <?php 
        $baseConvertida = base_convert(20, 10, 2); // Converte o número 20 da base decimal para a base binária
        echo "A resposta é $baseConvertida.";       
  ?>
  </p>

  <p>
    <?php 
        $valorAbsoluto = abs(-2000);
        echo "A resposta é $valorAbsoluto.";
  ?>
  </p>

  <p>
    <?php 
        $res = 50 / (2 + 3) ** 2;
        echo "O resultado é $res.";    
  ?>
  </p>

  <p>
    <?php 
  $canal = "Curso em Vídeo";
  $ano = date('Y');
  echo <<< TESTE
      Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo este ano de $ano?
    Abraços! \u{1F596}
  TESTE;
  
  //Visualizável apenas em Textarea
  ?>
  </p>

  <p>
    <?php 
  $nom = "Rodrigo";
  $snom = "Nogueira";
  echo "$nom \"Minotauro\" $snom";
  ?>
  </p>

  <p>
    <?php 
  const ESTADO = "MG";
  echo "Moro em " . ESTADO . ".";
  ?>
  </p>

  <p>
    <?php 
  $nome = "Lucas";
  $sobrenome = "Sales";
  echo '$nome $sobrenome';
  ?>
  </p>

  <p>
    <?php 
  $nome = "Lucas";
  $sobrenome = "Sales";
  echo "$nome $sobrenome";
  ?>
  </p>

  <?php  
  date_default_timezone_set("America/Sao_Paulo"); //GMT-3
  echo "Hoje é dia " . date("d/M/Y") . " e a hora atual é " . date("G:i:s T") . ".";
  ?>

</body>

</html>