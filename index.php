<!DOCTYPE html>
<html>
<body>
    <?php
    //Función isset
    //Determina si una variable esta definida y no es null.
    $txt = "PHP";
    echo "I love $txt!";
    if (isset($txt)) {
        echo " " . "si hay algo";
    } else {
        echo " " . "no hay nada";
    }
    //Función sprint
    //Devuelve un string formateado.
    $num = 5;
    $ubicacion = 'arbol';
    $formato = 'hay %d monos en el %s';
    echo sprintf($formato, $num, $ubicacion);
    //Función count
    //Cuenta todos los elementos de un array o algo de un objeto.
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    var_dump(count($a));
    //Función substr
    //Devuelve parte de una cadena.
    echo substr('abcdef', 1);
    //Función strlen
    //Obtiene la longitud de un string.
    $str = "abcdef";
    echo strlen($str);
    //Función is_null
    //Comprueba si una variable es nula o null.
    $foo = NULL;
    var_dump(is_null($inexistent), is_null($foo));
    //Función is_array
    //Comprueba si una variable es un array.
    $si = array('esto', 'es', 'un array');
    echo is_array($si) ? 'array' : 'No es un array';
    
    //Función dirname
    //Devuelve la ruta de un directorio padre.
    echo dirname(".") . PHP_EOL;
    //Función strpos
    //Encuentra la posición de la primera ocurrencia de un substring en un string.
    $mystring = 'abc';
    $findme = 'a';
    $pos = strpos($mystring,$findme);
    //Función unset
    //Destruye una o mas variables especificadas.
    function destruir_foo(){
        global $foo;
        unset($foo);
    }
    //Función array_merge
    //Combina dos o mas arrays.
    $array1 = array("color"=>"red",2,4);
    $array2 = array("a","b","color"=>"green","shape"=>"trapezoid",4);
    $resultado = array_merge($array1,$array2);
    //Función in_array
    //Comprueba si un valor existe en un array.
    $os = array("Mac","NT","Irix", "Linux");
    if(in_array("Irix",$os)){
        echo "Existe Irix";
    }
    //Función str_replace
    //Reemplaza todas las apariciones del string buscando con el string de reemplazo.
    //Produce <body text='black'>
    $body_tag = str_replace("%body","black","<body text='%body%'>");
    //Función strtolower
    //Convierte un string a minúsculas.
    $str = "ESTO ESTA EN MAYUSCULA";
    $str = strtolower($str);
    echo $str; //Imprime  el texto en minuscula
    //Función preg_match
    //Realiza una comparación con expresión regular.
    $sujeto = "abcdef";
    $patron = '/^def/';
    $preg_match($patron,$sujeto,$coincidencias, PREG_OFFSET_CAPTURE, 3);
    print_r($coincidencias);
    //Función date
    //Dar formato a la fecha/hora local.
    echo date('H:i:s');
    //Función copy
    //Copia un fichero.
    $fichero = 'ejemplo.txt';
    $nuevo_fichero = 'ejemplo.txt.bak';
    if(!copy($fichero, $nuevo_fichero)){
        echo "Error al copiar $fichero...\n";
    }
    
    //Función asort 
    //Ordena un array y mantiene la asociación de los índices.
    $arrayasociativo = array("Juan"=>"29","Pedro"=>"18","Eduardo"=>"26");
 
    //orden ascendente
    asort($arrayasociativo);
    var_export($arrayasociativo);
     
    //orden descendente
    arsort($arrayasociativo);
    var_export($arrayasociativo);
    ?>
</body>
</html>
