
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
        <form method="get" action="02taboada.php">
            <select name="num">
                <?php
                    for($c =1; $c <=10; $c++) {
                        echo " <option> $c </option>";
                    } 
                ?>
            </select>
            <input type="submit" value="Gerar-tabuada"/>
        </form>

        <?php
        ?> 

    </div>
</body>

</html>
