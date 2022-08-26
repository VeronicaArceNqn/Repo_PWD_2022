<?php
    if ($_GET){
       $numero=$_GET["ingnumero"];
      // echo "llegué por GET y el dato ingresado es: $numero <br>";
       if ($numero==0){
                echo " El numero ingresado es cero";
        }else{
            if ($numero>0){
                echo " El numero ingresado es positivo";
            }else{
                echo " El numero ingresado es negativo";
            }    
        }
    }    
    echo "<br/>";
?>
<a href="../Vista/ej1.html">Volver a inicio</a>