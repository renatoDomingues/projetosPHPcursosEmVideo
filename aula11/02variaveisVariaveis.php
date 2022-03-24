
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
        <h4> REPETIÇÃO - Crescente </h4>
        <?php
            //Pegar os dados da URL=>
            $i = 1;

            while($l<=5) {
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;
            }
            // $$v <=> está criando uma variavel v da variavel v
            //Mostrar na tela=>
            $i = 1;
            echo "$num1 $num2 $num3 $num4 $num5";
            /*
            while($i<=5) {
                $v = "num".$i;

                echo "Valor $i : ".$$v."<br/>";
                $i++
            }
            */
        ?>     
    </div>
</body>

</html>
