<?php
class controladorPlantilla{
    /**
     *  Llamada a la plantilla 
     */

    static public function ctrTraerPlantilla(){
        # include() se utiliza para invocar el archivo que contiene 
        # codigo html o php.
        include "vistas/plantilla.php"; 

    }
    
}

?>