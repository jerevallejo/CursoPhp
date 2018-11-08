http://curl.haxx.se/ca/cacert.pem.
tengo el archivo que tnego que pegar en el dico C en C:\xampp\php\
;aca pegamos la linea para configrar sinfony y descargarlo en nuestra carpeta en nuestra linea 1885
curl.cainfo = C:\xampp\php\cacert.pem ver si va entre ""
desde la consola ejecuto -> export PATH="$PATH:/c/xampp/php"
php -v muestra la version que tengo de php
luego ejecuto-> php -r "file_put_contents('symfony', file_get_contents('https://symfony.com/installer'));"
luego creo un-> php symfony new proyecto 2.8 
lugo cd proyecto
$ls (para listar archivos)


dentro de la carpeta proyecto 
ejecutar php app/console (te muestra los comandos)
ejecutar php app/console start:server &
