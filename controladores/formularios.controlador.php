<?php
class ControladorFormularios{
    /**
     * Registro
     */
    static public function ctrRegistro(){
        if (isset($POST["registroNombre"])){
            //return $_POST["registroNombre"]."<br>".$POST["registroEmail"]."<br>".$POST["registroNombre"]."<br>";
            return "ok";

        }
    }
}
?>