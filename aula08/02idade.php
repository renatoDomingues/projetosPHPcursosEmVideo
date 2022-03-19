
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

        <h4></h4>
        <h5> </h5>
        <?php
            /*
            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];
            isset => Ternario
            */
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[NÃO INFORMADO]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[SEM SEXO]";
            //$idade = 2022 - $ano;
            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos.";

            //fieldset => é uma borda;
            // Input => botão;
            // Label => modelo de uma caixa;
        ?>
        <a href="02exercicio.html"> <h4>VOLTAR</h4> </a>
        
    </div>
</body>

</html>
