<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>
<body>
    
    <div class="box">
        <div class="form">
            <h1>Rellenar</h1>
            <form action="" method="post">
                <input type="email" name="e-mail" id="email" placeholder="Correo electronico:">
                <div class="btn"><button type="submit" name="subir" id="subir">Enviar</button></div>
            </form>
        </div>
    </div>
    <? php
        include("validaciones.php");
    ?> 

</body>

</html>