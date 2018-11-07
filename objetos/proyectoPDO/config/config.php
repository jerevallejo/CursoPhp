<?php
    // constantes del sistema
	session_start();
    
    //autoloader
    spl_autoload_register(function($clase)
    {
    	require_once 'clases/'.$clase.'.php';
    });