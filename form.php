
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
    <form action="info.php" method="GET">
        <label for="">Código</label>
        <input name = "cod" type="number">
        <label for="">Nome</label>
        <input type="text">
        <label for="">Sálario</label>
        <input type="number">
        <button type=submit></button>
        <?php
    try {
        if($_GET[cod] < 0 ){
        throw new Exception("ERROR: Código negativo");
        }
    } catch (Exception $e) {
            echo $e->getMessage();
    }


    ?>
    </form>
</body>
</html>
