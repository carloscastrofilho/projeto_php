<?php
include_once "cabecalho.php";
?>
    <div id="conteudo">
        <h2>For - Estrutura de repetição</h2>
        <p class="txt">Repete um bloco de código porém com uma sintaxe diferente do while, sempre respeitando as premissas. </p>
        <?php
           $lista = array("Pietro","Maria","Joao", "Carlos", "Gabriela");
           for ($i=0; $i < count($lista); $i++) {
                echo $lista[$i]."<br>";
           }
        ?>
    </div>    
<?php
include_once "footer.php";
?>

