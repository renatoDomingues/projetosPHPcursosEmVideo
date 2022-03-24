
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
        <h4> </h4>
        <?php
            $num = isset($_GET["num"])?$_GET["num"]:1;
            $total =0;
            echo "Analisando o número $num </br>";

            echo "Valores múltiplos: ";
            for($i =1; $i <=$num; $i++) {
                $res = $num /$i;
                if($num % $i ==0) {
                    $multi = $i;
                    $total++;
                    echo "$multi ";
                }
            }
            echo "<br/> Total de multiplos: $total <br/>";
            echo "<h3> Resultado: $num </h3>";

            if($total >2) {
                echo "NÃO é primo!";
            }else {
                echo "É primo!!";
            }
        ?> 
        <fieldset> <legend> Para a pagina anterior </legend>
            <a href="javascript:history.go(-1)"> VOLTAR </a>
        </fieldset>

    </div>
</body>

</html>
