<?php 
	$nombre = $_FILES['foto']['name'];
	$imgDefecto='<img src="no-img.png">';
  ?>
 <pre><?php// print_r($archivo) ?></pre>
<?php 
   //echo $_FILES['foto']['name'], ' ';
    //echo $_FILES['foto']['type'];
   // echo $_FILES['foto']['error'];

    $ruta = 'fotos/';
    $imagenTMP = $_FILES['foto']['tmp_name'];
    $imagen = $_FILES['foto']['name'];
    move_uploaded_file($imagenTMP, $ruta.$imagen);

	if($_FILES['foto']['error']==0)
	{
		$imgDefecto= '<img src=fotos/'.$imagen.'>';
	}
	echo $imgDefecto;
?>
