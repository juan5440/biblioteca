<?php
class Views{
    public function getView($directorio, $vista, $data = ""){
        if ($directorio == 'home'){
            $vista = 'Views/' . $vista . '.php';
        }else{
            $vista = 'Views/' . $directorio. '/' . $vista . '.php';
        }
        require_once $vista;
    }
}

?>