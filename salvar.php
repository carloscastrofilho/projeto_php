<?php 
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['opcao'];       
        if ($op =="so")
        {
            $soma = $n1 + $n2;        
            echo "<h2>A soma de $n1 com $n2 é $soma</h2>";
        }
        else if ($op == "su")
        {
            $sub = $n1 - $n2;        
            echo "<h2>A subtração dos números é $sub</h2>"; 
        }
        else if ($op == "m")
        {
            $m = $n1 * $n2;        
            echo "<h2>A multiplicação dos números é $m</h2>"; 
        }
        else
        {
            $d = $n1 / $n2;        
            echo "<h2>A divisão dos números é $d</h2>"; 
        }
?>