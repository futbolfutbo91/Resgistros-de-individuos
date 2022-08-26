<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="proceso.php" method="POST">
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        
       <br><br>

        <label>
            Apellido:
            <input type="text" name="apellido">
        </label>

        <br><br>

        <label>
            Celular:
            <input type="number" name="celular">
        </label>

        <br><br>

        <label>
            Pais:
            <input type="text" name="pais">
        </label>

        <br><br>
        
        <label>
            Numero de documento:
            <input type="number" name="documento">
        </label>
        
        <br><br>
       
        <label>
            Idioma:
            <input type="text" name="idioma">
        </label>
       
        <br><br>

        Genero 
        
        <br>

        <label>
            Hombre:
            <input type="radio" name="genero"  value="Hombre">
        </label>

        <br>

        <label>
            Mujer:
            <input type="radio" name="genero" value="Mujer">
        </label>

        <br><br>

        Seleccione

        <br>

        <label>
            Contabilidad
            <input type="checkbox" name="tareas[]" value="Contabilidad">
        </label>

        <label>
            Finanzas:
            <input type="checkbox" name="tareas[]" value="Finanzas">
        </label>
        
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

<?php 
echo "esta funcionando esta funcionando esta funcionando esta funcionando KJCVKDJJLKSDJFK";
?>
</html>