<?php

namespace App;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){

        var_dump($class);
        // Si on est dans le namespace (ici tutoriel) alors on charge, sinon non
        if (strpos($class, __NAMESPACE__ . '\\') === 0){
            // on enlève le namespace de l'autoload (pour se positionner relativement au root du répertoir)
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            // on change les antislash par slash pour avoir un semblant de chemin
            $class = str_replace('\\', '/', $class);
            // on requière la classe
            require __DIR__ . '/' . $class . '.php';
        }
    }
}