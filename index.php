<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>files</title>
</head>
<body>

    <form>
        code   : <input type="text" name="code">
        name   : <input type="text" name="name">
        salary : <input type="text" name="salary">
        <input type="submit" value="Submit">
        
        <p>
            <?php 
                $code = $_GET['code'];
                $name = $_GET['name'];
                $salary = $_GET['salary'];
            
                $filepath = '/home/aluno/Área de Trabalho/file';
                $filename = $filepath."/arquivo.txt";
                $mode = "a+";
                
                $file = fopen($filename, $mode);
	            $break = "\n";

	            if ($file) {
		            if (fwrite($file, $code.';'.$name.';'.$salary.$break)) {
			            echo "<br/> write successful <br/>";
			            fclose($file);				
		            }
	            }
            ?>
        </p>
    </form>

</body>
</html>