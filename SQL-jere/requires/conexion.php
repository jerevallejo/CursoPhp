<?php
    define('SERVER', 'localhost');
    define('BASE', 'catalogo');
    define('USUARIO', 'root');
    define('CLAVE', '');

    function conectar(){
        $charset = 'utf8mb4';

        $dsn = 'mysql:host='.SERVER.';dbname='.BASE.';charset='.$charset;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $link = new PDO($dsn, USUARIO, CLAVE, $options);
            return $link;
        } catch ( PDOException $e) {
            throw new  PDOException( $e->getMessage(), (int)$e->getCode());
        }
    }
