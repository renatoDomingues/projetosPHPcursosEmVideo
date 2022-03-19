

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
        <h4>Variáveis referenciadas</h4>
        <?php 
            echo "<h5>Não usando B de referencia do A</h5>";

            $a = 3;
            $b = $a;
            $b += 5;

            echo "A variável 'A' vale $a";
            echo "<br/>A variável 'B' vale $b";
        ?>
        <?php 
            echo "<h5>Usando o B como referencia do A</h5>";

            $a = 3;
            $b = &$a;
            $b += 5;

            echo "A variável 'A' vale $a";
            echo "<br/>A variável 'B' vale $b";
        ?>
    </div>
</body>

</html>

