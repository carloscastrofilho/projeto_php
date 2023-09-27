<?php include "cabecalho.php"; ?>
<div id="conteudo">
    <h1 class="">
        Entre em contato
    </h1>
    <form action="salvar.php" method="get" style="font-size:2rem;">
    <label for=""> Digite o 1° Número</label>
    <input type="text" name="n1" style="font-size:2rem;">
    <br>
    <label for=""> Digite o 2° Número</label>
    <input type="text" name="n2" style="font-size:2rem;">
    <br>
    <input type="radio" name="opcao" value="so" required> Somar <br>
            <input type="radio" name="opcao" value="su" required> Subtrair <br>
            <input type="radio" name="opcao" value="m" required> Multiplicar <br>
            <input type="radio" name="opcao" value="d" required> Dividir <br><br>
            <button type="submit" style="font-size:2rem;">Enviar</button>
    </form>
    </div>
 <?php include "rodape.php";?>