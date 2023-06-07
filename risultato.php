<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>

    <p>Il testo che hai scritto è: <br> <?php echo $_GET["testo"] ?> <br> ed è lungo <?php echo strlen($_GET["testo"]) ?> caratteri</p>


    <p>Il tuo testo censurato è: <br> <?php echo str_replace($_GET["ban"],"***",$_GET["testo"]) ?> <br> ed è lungo <?php echo strlen(str_replace($_GET["ban"],"***",$_GET["testo"])) ?> caratteri </p>

</body>
</html>