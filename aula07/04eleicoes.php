





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - cursoemvideo.com</title> 
    <style></style>   
</head>

<body>
    <div>
        <h4>Operadores Lógicos</h4>
        <h5>Eleições</h5>
        <?php
            $ano = $_GET["an"];
            $idade = 2022 - $ano;

            echo "O ano informado pelo URL foi $ano <br/>";

            echo "Quem nasceu em $ano tem idade de $idade anos <br/>";
            
            echo "<h5>Cidadão é obrigado ou não a votar: </h5>";

            $tipo = ($idade>=18 && $idade<65) ? "OBRIGATORIO" : "NÃO é OBRIGATORIO";

            echo "E dessa forma o seu voto é $tipo <br/>";
        ?>
    </div>
</body>

</html>





