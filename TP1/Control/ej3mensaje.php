<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalidaMensaje</title>
</head>
<body>
    <?php
  
if ($_POST){
       $nombre=$_POST["nombre"];
       $apellido=$_POST["apellido"];
       $edad=$_POST["edad"];
       $direccion=$_POST["direccion"];
       echo "Hola, yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion;
}
?>
</body>
</html>