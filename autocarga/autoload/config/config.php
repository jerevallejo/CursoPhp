<?php

    //autoloader
    spl_autoload_register(function($clase){
        require_once 'clases/'.$clase.'.php';
    });

/**
 * creando una fución personalizada
 * y cargandola en al spl_autoload_

    function miAutocarga($clase){
        require_once 'clases/'.$clase.'.php';
    }

    spl_autoload_register('miAutocarga');
 */