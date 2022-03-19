



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
        <h4>Operações</h4>
        <h5>Somar e multiplicação, são operadores unario "básicos"</h5>
        <?php             
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];

            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

            echo "Os valores passados foram de 'A'= $n1 e de 'B'= $n2 <br/>";

            echo "O resultado será $r";
        ?>
    </div>
</body>

</html>



