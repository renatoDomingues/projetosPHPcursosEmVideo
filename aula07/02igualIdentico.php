




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
        <h5>Iguais</h5>
        <?php     
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM" : "NÃO";
            
            echo "As variáveis 'A' e 'B' são iguais? $r";
        ?>
        <h5>Identicos</h5>
        <?php 
            $a = 3;
            $b = "3";
            $r = ($a === $b) ? "SIM" : "NÃO";
            
            echo "As variáveis 'A' e 'B' são identicas? $r";
        ?>
    </div>
</body>

</html>




