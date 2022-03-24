
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
            echo "<br/> Contagem crescente ...";
            echo "<br/>";

            for($i = 1; $i <=10; $i++) {
                echo " ".$i;
            }
            echo "<br/>";
            echo "<br/> Contagem decrescente ...";
            echo "<br/>";

            for($i = 10; $i >=1; $i--) {
                echo "$i ";
            }
            echo "<br/>";
            echo "<br/> Contagem crescente ... </br>";
            
            for($i =1; $i <=100; $i +=5) {
                echo "$i ";
            }
            echo "<br/>";
            echo "<br/> Contagem ... </br>";

            for($i =20; $i >=1; $i -=2) {
                print " $i";
            }
        ?> 
    </div>
</body>

</html>
