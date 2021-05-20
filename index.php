<?php
    header("Content-Type: application-json");

    $obj = new stdClass();
    $obj->nombre = (string) "Miguel Angel Castro Escamilla";
    $obj->edad = (int) 23;
    $obj->hoobis = (array) ["Programar","Cocinar","Musica","Leer"];
    $obj->saludar = function (object $arg):string{
        return (string) <<<MENSAJE
            Hola ${!${''} = $arg->nombre} como estas
        MENSAJE;
    };
    // print_r(call_user_func($obj->saludar, (object) array("nombre" => "Diana")));
    
    $obj->mensaje = function ():object{
        $arg = (func_num_args()) ? 
                    (object) func_get_args()[0]
                : (object) array(
                    'Nombre' => (string) 'Obligatorio'
                    );
        return $arg;
        
    };
    print_r(($obj->mensaje)([
                    'Nombre' => (string) $obj->nombre, 
                     "edad" => (int) $obj->edad
                    ]
            ));
    


            
    // print_r(get_defined_functions()["user"]);
    // function EJEMPLO(){

    //     $arg = func_get_args(2);
    // }
    // EJEMPLO("Miguel", 23, "Castro");



    // $json = (string) json_encode($obj);
    // $json2 = (array) json_decode($json, true);
    // print_r($json);
    // echo "<br>";
    // print_r($json2);

?>