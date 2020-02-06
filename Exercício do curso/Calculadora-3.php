<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action=""  method="post">
         Valor 1: <input type= "number" name="txtv1"><br>
         Valor 2: <input type= "number" name="txtv2"><br>
         <br>
         <input type="radio" name="op" value="soma">Soma<br>
         <input type="radio" name="op" value="sub">Subtração<br>
         <input type="radio" name="op" value="mult">Multiplicação<br>
         <input type="radio" name="op" value="div">Divisão<br>
         <input type="radio" name="op" value="pot">Potência<br>
         <br> <input type="reset" value="Limpar"> &nbsp <input type="submit" value="Calcular">
         
    </form>>

</body>
</html>

<?php

if ($_POST){
     
     $v1 = $_POST ['txtv1'];
     $v2 = $_POST ['txtv2'];
     $op = $_POST ['op'];
     switch ($op) {
     	case 'soma':
        $total = $v1 + $v2;
        echo $total;
        break;
        case 'sub':
        $total = $v1 - $v2;
        echo $total;
        break;
        case 'mult':
        $total = $v1 * $v2;
        echo $total;
        break;
        case 'div':
        $total = $v1 / $v2;
        echo $total;
        break;
        case 'pot':
        $total = pow ($v1, $v2);
        echo $total;
        break;
        default:
        echo "Selecione uma opção";
        break;
    }

  
}


?>


