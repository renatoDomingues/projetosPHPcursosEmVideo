
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

        <h4> Exibir vetor </h4>
        <pre>
            <?php
                $v = array("A", "J", "M", "x", "k");

                //echo "O vetor tem ".count($v)." elementos. </br>";
                $tot = count($v);
                echo "O vetor tem $tot elementos. </br>";

                print_r($v); //"print_r();" -> para exclusivo programadores ver tela 

                echo "</br>";

                var_dump($v); //A visualização para programadores é mais complexa na tela

                //<pre> </pre> -> Deixar sua tela pre para os programadores
            ?>
        </pre>
        
    </div>
</body>

</html>
