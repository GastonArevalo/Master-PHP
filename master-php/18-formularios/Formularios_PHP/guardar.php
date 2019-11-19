<?php

if(isset($_POST['nombre']) && isset($_POST['apellido'])){

    echo "<h1>Bienvenido</h1>";
    echo "<h2>".$_POST['nombre']."</h2>";
    echo "<br>";
    echo "<h2>".$_POST['apellido']."</h2>";
}

    echo "<p>A base del formulario que has llenado, podemos brindarte esta informacion</p>";

    if(isset($_POST['edad'])){
        $edad = $_POST['edad'];
    }
    if($edad>=18){
        echo "<h1>Eres Mayor De edad</h1>";
    }else if($edad<18){
        echo "<h1>Eres Menor De edad</h1>";
    }else if($edad<0){
        echo "<h1>Ingresaste un numero de edad invalido</h1>";
    }
    if(isset($_POST['peliculas'])){

        echo "<h2>"."<h2>La pelicula que elegiste fue: </h2>".$_POST['peliculas']."</h2>";
    }
    if (isset($_POST['texto'])){
        echo "<p>"."<b>Decidiste escribir: </b>".$_POST['texto']."</p>";
    }
