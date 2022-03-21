
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

        <h4></h4>
        <h5> </h5>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;

            echo "Você nasceu em $a e terá $i anos de idade. <br/>";

            if($i >=18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            }
            else{
                $v = "não pode votar";
                $d = "não pode dirigir";
            }

            echo "Com essa idade você $v e também $d";
        ?>
        <a href="exercicio01.html"> <h4>VOLTAR</h4> </a>
        
    </div>
</body>

</html>
