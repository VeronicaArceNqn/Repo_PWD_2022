<html>
<?php
if ($_POST){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $direccion=$_POST["direccion"];
    echo "Hola, yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion .". <br>";
if ($edad >=18) {
    echo " Soy mayor de edad.";
} else {
    echo " Soy menor de edad.";
}

}
?>

</html>