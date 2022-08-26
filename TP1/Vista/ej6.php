<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form id="mensaje" name="mensaje" method="post" action="../Control/ej6deportes.php">
    <h3>Ingresar los datos:</h3>
        Nombre: <input name="nombre" type="text" id="nombre" autofocus/></br></br>
        Apellido: <input name="apellido" type="text" id="apellido"/></br></br>
        Edad: <input name="edad" type="text" id="edad"/></br></br>
        Direccion: <input name="direccion" type="text" id="direccion"/></br>
    <h3>Seleccionar genero</h3>
        <input type="radio" name="genero" value="Femenino">Femenino
        <input type="radio" name="genero" value="Masculino">Masculino
        <input type="radio" name="genero" value="Otro">Otro  
    <h3>Seleccionar el nivel de estudios</h3>    
        <input name="nivel" type="radio" id="nivel" value="No tiene"/> No tiene estudios</br>
        <input name="nivel" type="radio" id="nivel" value="Primario"/> Estudios primarios</br>
        <input name="nivel" type="radio" id="nivel" value="Secundario"/> Estudios secundarios</br>
    <h3>Selecciona si practicar uno de estos deportes</h3> 
        <input type="checkbox" id="deporte1" name="deporte1" value="Futbol">
  <label for="deporte1"> Futbol</label><br>
        <input type="checkbox" id="deporte2" name="deporte2" value="Basket">
  <label for="deporte2"> Basket</label><br>
        <input type="checkbox" id="deporte3" name="deporte3" value="Tenis">
  <label for="deporte3"> Tenis</label><br>
        <input type="checkbox" id="deporte4" name="deporte4" value="Voley">
  <label for="deporte4"> Voley</label><br>
      <br>
    
    
    <input type="submit" name="submit" value="Enviar"/>
</form>
</body>

</html>

