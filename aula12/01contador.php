
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

        <h4> Contador </h4>
        <?php
            $c = 1;

            do {
                echo "$c ";
                $c++;
            } while ($c <=10);
        ?> 
        </br>
        <?php 
            $co = 1;

            do {
                echo "$co ";
                $co +=2;
            } while ($co <=20);
        ?>
        <h4> Contagem REGRESSIVA </h4>
        <?php 
            $cr = 10;

            do {
                echo "$cr ";
                $cr--;
            } while ($cr >=1);
        ?>
        </br>
        <?php 
            $cre = 10;

            do {
                echo "$cre ";
                $cre-=2;
            } while ($cre >=-10);
        ?>

    </div>
</body>

</html>
