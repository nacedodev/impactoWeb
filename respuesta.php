<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Respuesta del Formulario</title>
    </head>
    <body>

    <?php
    //NACHO ACEDO ALVAREZ
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //SI EL METODO ES POST...
        // Campo de Texto
        $texto = isset($_POST["texto"]) && $_POST["texto"] !== "" ? $_POST["texto"] : NULL;//SI EL CAMPO TEXTO EXISTE , LO MUESTRO , SI EXISTE PERO ESTA VACIO , LE DOY EL VALOR NULL (ESTO ES UNA PRUEBA)

        // Campo Select
        $select = isset($_POST["select"]) ? $_POST["select"] : "No se ha seleccionado ninguna opción en el campo select.";// SI HAY ALGUN CAMPO SELECCIONADO LO MUESTRO , SI NO MUESTRO UN MENSAJE DE ERROR

        // Campo de Radio
        $radio = isset($_POST["radio"]) ? $_POST["radio"] : "No se ha seleccionado ningún género en el campo de radio.";// SI SE HA SELECCIONADO ALGUN CAMPO TIPO RADIO LO MUESTRO , SI NO MUESTRO UN MENSAJE DE ERROR

        // Checkbox Único
        $checkboxUnico = isset($_POST["checkboxUnico"]) ? $_POST["checkboxUnico"] : "El checkbox de aceptación de términos no ha sido marcado.";//SI SE HA SELECCIONADO ALGUN CHECKBOX LO MUESTRA , SI NO MUESTRA UN MENSAJE DE ERROR

        // Varios Checkboxes (Múltiple Selección)
        $opciones = isset($_POST["opciones"]) ? $_POST["opciones"] : "No se ha seleccionado ninguna opción en los checkboxes de múltiple selección.";//SI SE HA SELECCIONADO UNA O VARIAS OPCIONES , LAS MUESTRO , SI NO MUESTRO UN MENSAJE DE ERROR
    }
    ?>

    <p>Texto: <?php if(is_null($texto)) echo "La variable tiene valor = NULL"; else echo $texto; ?></p> <!-- ESTRUCTURA IF ELSE CLASICA -->
    <p>Selección en el campo select: <?php echo $select; ?></p>
    <p>Género seleccionado: <?php echo $radio; ?></p>
    <p>Checkbox de aceptación de términos: <?php echo $checkboxUnico; ?></p>
    <p>Opciones seleccionadas (checkboxes de múltiple selección):
        <?php
        //echo is_array($opciones) ? implode(", ",$opciones) : $opciones;
        foreach($opciones as $opcion){
            echo "<p>".$opcion."</p>";
        }
        ?>
    </p>
    </body>
</html>
