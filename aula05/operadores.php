
<DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="" href="_css/estilo.css"/>
		<title>Operações Aritméticas</title>

	</head>	

	<body>
		<div>
            <h4>Operadores Aritméticos</h4>
			<?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<h5>Valores recebidos: $n1 e $n2</h5>";

                echo "A soma $n1 + $n2 vale ". ($n1 + $n2);
                echo "<br/> A subtração $n1 - $n2 vale ". ($n1 - $n2);
                echo "<br/> A multiplicação $n1 x $n2 vale ". ($n1 * $n2);
                echo "<br/> A divisão $n1 : $n2 vale ". ($n1 / $n2);
                echo "<br/> O modulo $n1 com $n2 vale ". ($n1 % $n2);
			?>
            <h4>A media da Aritméticas</h4>
            <?php
                $m = ($n1 + $n2) / 2;
                
                echo "A media de $n1 com $n2 vale $m";
            ?>
		</div>
	</body>


</html>
