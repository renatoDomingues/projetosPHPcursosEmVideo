
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

        <h4>Condicional(switch, if, else, elseif) & Repetição(for, while) </h4>
        <h4>Passagem por valor</h4>
        <h5> </h5>
        <?php
            function teste($x) {
                //$x = $x + 5;
                $x =+ 5;
                echo "<p> O valor passado de 'X' é $x </p> </br>";
            }
            $a = 3;
            teste($a);
            echo "<p> O valor de 'A' é $a </p>";
        ?>
        
    </div>
</body>

</html>
