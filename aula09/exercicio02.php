
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
        <h5> </h5>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;

            echo "Você nasceu em $a e terá $i anos de idade. <br/>";

            if ($i<16) {
                $tipoVoto = "não pode votar";
                $tipoCart = "não pode dirigir";
            }
            else {
                if ($i>=16 && $i<18) {
                    $tipoVoto = "voto é opcional";
                    $tipoCart = "não pode dirigir";
                }
                else {
                    if ($i>=65) {
                        $tipoVoto = "voto é opcional";
                        $tipoCart = "pode dirigir";                        
                    }
                    else {   
                        $tipoVoto = "voto é obrigatorio";
                        $tipoCart = "pode dirigir";                     
                    }
                }
            }

            echo "Para essa idade acima, $tipoVoto e também $tipoCart";

            //else { if (($i>=16 && $i<18) || ($i>65)) {} }
        ?>
        <a href="exercicio02.html"> <h4>VOLTAR</h4> </a>
        
    </div>
</body>

</html>
