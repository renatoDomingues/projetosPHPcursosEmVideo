
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
        <h4> contando ... ... </h4>
        <?php
            $i = isset($_GET["ini"])?$_GET["ini"]:0;
            $f = isset($_GET["fin"])?$_GET["fin"]:0;
            $in = isset($_GET["inc"])?$_GET["inc"]:1;

            while(TRUE) {
                if($i < $f) {
                    while($i <=$f) {
                        echo "$i - ";
                        $i = $i +$in;
                    }
                }
                if($f < $i) {
                    while($i >=$f) {
                        echo "$i - ";
                        $i = $i -$in;
                    }
                }
                break;
            }
        ?> 
        </br>

        <fieldset> <legend> OBRIGADO pela a sua participação!! </legend>  
            <a href="javascript:history.go(-1)" class="botao"> VOLTAR pagina anterior </a>
        </fieldser>
    </div>
</body>

</html>
