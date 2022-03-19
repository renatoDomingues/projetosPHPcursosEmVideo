
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
        <h4>Formulario</h4>
        <h5></h5>
        <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);

            echo "O valor enviado foi $valor <br/>";
            //echo "A raiz quadrada deste valor acima é $rq <br/>";
            echo "A raiz quadrada deste valor acima é ". number_format($rq, 2);
        ?>
        <a href="01exercicio.html"> <h4>VOLTAR</h4> </a>
        
    </div>
</body>

</html>
