
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

        <h4>Vetor - chaves personalizado </h4>
                <?php
                    $v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
                    $v[] ="E"; //Acrescentar
                    unset($v[9]); //Remover

                    print_r($v);
                ?>
    </div>
</body>

</html>
