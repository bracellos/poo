<?php
class Autoload{

    public function __construct(){
                            // $this->load()
        spl_autoload_register([$this, 'load']);
        spl_autoload_register([$this, 'loadModel']);
    }

    private function load($className){
        set_include_path(__DIR__);
        spl_autoload_extensions('.Class.php');
        spl_autoload($className);
    }

    private function loadModel($className){
        set_include_path(__DIR__);
        spl_autoload_extensions('.Model.php');
        spl_autoload($className);
    }
}