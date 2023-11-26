<?php

// Mostrar log en carpeta local
ini_set('display_errors', 1); // 0: no aparecen los errores en el navegador
ini_set('log_errors', 1); // indicamos que queremos crear un nuevo archivo de errores
ini_set("error_log", "C:/xampp/htdocs/proyectos/repository/EnvioEmail/php_error_log");

// fatal error

class ClaseCliente{
    public function functionName() {
        
    }
}

$var = new ClaseCliente();
$var ->functionName();

//Warning

$var1 = "Dato 1";

echo $var2;

// Error Parse
$var3 = "Hola mundo";

echo "Mensaje";
