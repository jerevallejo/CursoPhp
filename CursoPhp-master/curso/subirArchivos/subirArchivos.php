<?php
    $archivo = $_FILES['archivo'];
?>
<pre><?php print_r($archivo) ?></pre>
<?php 
    echo $_FILES['archivo']['name'], ' ';
    echo $_FILES['archivo']['type'];
?>
<hr>
<?php
    $ruta = 'fotos/';
    $imagenTMP = $_FILES['archivo']['tmp_name'];
    $imagen = $_FILES['archivo']['name'];
    move_uploaded_file($imagenTMP, $ruta.$imagen);
?>
