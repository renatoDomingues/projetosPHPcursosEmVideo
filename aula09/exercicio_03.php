
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
            $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
            $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
            $m = ($n1+$n2)/2;

            $nome = isset($_GET["nome"])?$_GET["nome"]:"não informado";
            $ra = isset($_GET["RA"])?$_GET["RA"]:00000;

            echo "A primeira nota informada é $n1 </br>";
            echo "A segunda nota informada é $n2 </br>";
            echo "<h4> A média está sendo gerada abaixo ... </h4>";
            echo "A média entre $n1 e $n2 são $m </br>";

            if($m>=5 && $m<=7) {
                $final = "recuperação";
            }elseif($m>=8 && $m<=10) {
                $final = "aprovado";
            }else {
                $final = "reprovado";
            }
            echo "<h4> Situação do aluno $nome do RA$ra: </h4>";
            
            echo "O aluno com essa média de $m está $final";
        ?>
        <a href="exercicio_03.html"> <h5>VOLTAR</h5> </a>
        
    </div>
</body>

</html>
