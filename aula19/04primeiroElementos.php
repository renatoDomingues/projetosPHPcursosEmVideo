
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

        <h4> Gerenciamento primeiros elementos vetor </h4>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "k");
                print_r($v);
                
                echo "</br>";
                
                array_unshift($v, "O");
                print_r($v);
                
                echo "</br>";
                
                array_shift($v);
                print_r($v);
            ?>
        </pre>
        
    </div>
</body>

</html>
