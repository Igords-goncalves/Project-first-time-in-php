<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
            $texto = isset($_GET["txt"])?$_GET["txt"]:"Texto inválido";
            $tamanho = isset($_GET["tamanho"])?$_GET["tamanho"]:"8pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000";
        ?>

    <!-- Css links -->
    <link rel="stylesheet" href="assets/variable.css">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/body.css">
    <link rel="stylesheet" href="assets/form.css">

    <style>
    /* Parte de estilo dentro do PHP */
    span.texto {
      font-size: <?php echo $tamanho; ?>;
      color: <?php echo $cor; ?>;
    }

  </style>

    <title>Verificador de fonte</title>
</head>
<body>
    <div>
        <?php
             echo "<span class='texto'>$texto</span>";
        ?>
    </div>
    <!-- Estilo css in line -->
    <a href="home-page.html" 
        style="text-decoration: none; 
        color:#fff; 
        font-size:40pt;
        margin-top: 30px;">Voltar</a>
</body>
</html>