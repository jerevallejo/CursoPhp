<?php
    $nombreColores = [
                'rojo', 'verde', 'amarillo',
                'azul', 'violeta', 'naranja',
                'marron', 'fucsia', 'rosa'
    ];
    $codigoColores = [
                '#f00', '#0a2', '#ff0',
                '#02a', '#939', '#f60',
                '#800', '#f0f', '#f99'
    ];
    $cantColor= count($nombreColores);
    $i=0;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-family: helvetica;
            font-size: 1.2en;
            color: #666;
        }
        #muestras{
            width: 220px;
            padding: 16px 16px 32px 20px;
            margin: 20px;
            border: 1px solid #ccc;
        }
        #muestras span{
                display: inline-block;
                width: 32px;
                height: 32px;
                margin-right: 8px;
                position: relative;
            top: 10px;
        }
    </style>
</head>
<body>
    <h1>muestra de colores</h1>
    <div id="muestras"> 
<?php   

        while ($i<$cantColor) 
            {   
             ?>
        
        <span style="background-color:<?php echo $codigoColores[$i];?>"></span>  <?php echo $nombreColores[$i]?>
        <br>
<?php $i++; }  ?>

    </div>

</body>
</html>
