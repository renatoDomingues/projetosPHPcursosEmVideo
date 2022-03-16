

<DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="" href="_css/estilo.css"/>
		<title>Operações Aritméticas</title>
        <style>
            h5 {
                font: 12pt Arial;
                color: #171559;
                font-weight: bold;
            }            
        </style>

	</head>	

	<body>
		<div>
            <h4>Funções Aritméticas em PHP</h4>
                <?php
                    $v1 = $_GET["x"];
                    $v2 = $_GET["y"];

                    echo "<h5>Valores recebidos: $v1 e $v2</h5>"
                ?>
            <h4>Valores absoluto</h4>
                <?php
                    echo "O valor  absoluto de $v1 é ". abs($v1);
                    echo "<br/>O valor  absoluto de $v2 é ". abs($v2);
                ?>
            <h4>Potenciação</h4
                <?php
                    echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
                ?>
            <h4>Raiz Quadrada</h4
                <?php
                    echo "<br/> A raiz de $v1 é ". sqrt($v1);
                    echo "<br/> A raiz de $v2 é ". sqrt($v2);
                ?>
            <h4>Arredondamento</h4
                <?php
                    echo "<br/> O valor de $v1 arredondado é ". round($v1); //ceil <=> floor
                    echo "<br/> O valor de $v2 arredondado é ". round($v2);
                ?>
            <h4>INTVAL valor inteiro da variável</h4
                <?php
                    echo "<br/> A parte inteira de $v1 é ". intval($v1);
                    echo "<br/> A parte inteira de $v2 é ". intval($v2);
                ?>
            <h4>number_format Formatação</h4
                <?php
                    echo "<br/> O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");
                    echo "<br/> O valor de $v2 em moeda é R$". number_format($v2, 2, ",", ".");
                ?>
		</div>
	</body>


</html>

