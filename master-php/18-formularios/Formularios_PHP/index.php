<?

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="guardar.php" method="POST" enctype="multipart/from-data">

       <label for="nombre">Nombre:</label>
       <p><input type="text" name="nombre" autofocus="autofocus" maxlength="10" minlength="4" pattern="[A-Z;a-z]+" required="required"></p> <br>

       <label for="apellido">Apellido:</label>
       <p><input type="text" name="apellido" ></p> <br>

       <label for="sexo">Sexo:</label>
       <p>
       Hombre: <input type="checkbox" name="sexo" value="Hombre">
       Mujer:  <input type="checkbox" name="sexo" value="Mujer" checked="cheked">
       </p> <br>

       <label for="color">Color:</label>
       <p><input type="color" name="color" ></p> <br>
       
       <label for="boton"> Boton </label>
       <p><input type="button" name="boton" value="Presiona"></p> <br>
       
       <label for="fecha">Fecha:</label>
       <p><input type="date" name="fecha" ></p> <br>
       
       <label for="correo">Correo:</label>
       <p><input type="email" name="correo" ></p> <br>
        
       <label for="archivo">Archivo:</label>
       <p><input type="file" name="archivo" multiple="multiple" ></p> <br>
       
       <label for="numero">Numero:</label>
       <p><input type="number" name="numero" ></p> <br>

       <label for="pass">Contraseña:</label>
       <p><input type="password" name="pass" ></p> <br>

       <label for="radio">Continente:</label>
       <p>
            Sudamerica: <input type="radio" name="continente" value="America del sur" >
            Europa: <input type="radio" name="continente" value="Europa" >
            Asia: <input type="radio" name="continente" value="Asia" >
       </p> <br>

       <label for="url">Pagina Web:</label>
       <p><input type="url" name="url" ></p> <br>

       <label for="pass">Contraseña:</label>
       <p><input type="password" name="pass" ></p> <br>

       <textarea name="" id="" cols="30" rows="10">Area</textarea> <br>

        Peliculas:
        <select name="peliculas" id="">
            <option value="spiderman">Spiderman</option>
            <option value="batman">batman</option>
            <option value="ironman">ironman</option>
            <option value="hulk">Hulk</option>
        </select>

     <br>  <input type="submit" value="enviar">

       
    </form>
</body>
</html>
