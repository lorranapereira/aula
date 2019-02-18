<?php
   if(($_GET[""])){
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $_GET["codigo"];
    $_GET["nome"];
    $_GET["salario"];
    $filepath = "/home/aluno/Área de Trabalho/";
	$filename = $filepath."/teste2.txt";
	$mode = "x+";
	$arquivo = fopen($filename, $mode); 
	if ($arquivo == FALSE) {
		die("Arquivo nao criado");
    }
    $quebra="\n";
    if ($arquivo) {
		if (fwrite($arquivo, 'Novo conteúdo'.$quebra)) {
			echo "<br />escrita realizada com sucesso<br />";
			fclose($arquivo);				
		}
	}
	?>

</body>
</html>