




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
        <h4>Situações</h4>
        <?php
            $nota1 = $_GET["n1"];             
            $nota2 = $_GET["n2"];     
            $m = ($nota1+$nota2) / 2;
            
            echo "A nota '1' informada pelo aluno(a) na URL é $nota1 <br/>";
            echo "A nota '2' informada pelo aluno(a) na URL é $nota2 <br/>";
            echo "A média entre $nota1 e $nota2 é $m <br/>";

            echo "<h6>A situação deste aluno, aprovado ou reprovado:</h6>";

            $sit = ($m<6) ? "REPROVADO" : "APROVADO";

            echo "A situação do aluno é $sit";

            echo "<h6>Usando a mesma lógica acima, porém com a concatenação</h6>";

            echo "A situação do aluno é ". (($m<6)?"REPROVADO":"APROVADO");
        ?>
    </div>
</body>

</html>




