<?php
    $archivoArray = $_FILES['archivo'];
?>
<pre><?php   print_r($archivoArray)   ?></pre>
<?php
    //rutina para subir imagenes
    $ruta = "images/productos/";
    $archivoEnviado = "noDisponible.jpg";

    echo $archivoEnviado, "<br>";

    if( $_FILES['archivo']['error'] == 0 ){
        $archivoEnviado = $_FILES['archivo']['name'];
        $archivoTMP = $_FILES['archivo']['tmp_name'];
        move_uploaded_file($archivoTMP, $ruta.$archivoEnviado);
    }
?>
    <img src="images/productos/<?php   echo $archivoEnviado ?>" alt="">
