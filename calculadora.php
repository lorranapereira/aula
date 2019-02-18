

<form action="" method="GET">
    valor 1 
    <input type="number" name="valor1">
    valor 2 
    <input type="number" name="valor2">
    <br/>
    <input type="radio" id="dewey" name="soma">
    soma
    <input type="radio" id="dewey" name="multiplicação">
    multiplicação
    <input type="radio" id="dewey" name="divisão">
    divisão
    <input type="radio" id="dewey" name="subtração">
    subtração
    <button type="submit"> Calcular</button>
</form>

<?php
   if(($_GET["soma"])){
      echo $res = $_GET[valor1]+$_GET[valor2];
   }
   if(($_GET["multiplicação"])){
    echo $res = $_GET[valor1]*$_GET[valor2];
   } 
   if(($_GET["divisão"])){
    echo $res = $_GET[valor1]/$_GET[valor2];

   }
   if(($_GET["subtração"])){
    echo $res = $_GET[valor1]-$_GET[valor2];

}  
try {
    if($_GET[valor2] == 0 ){
       throw new Exception("ERROR: Não existe divisão por zero");
    }
} catch (Exception $e) {
        echo $e->getMessage();
}

?>
