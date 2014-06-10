<?php

class Controller {

    function __construct() {
        //echo'To jest Controller <br>';
        $this->view = new View(); 
        Session::init();
        

    }
    
    
    public function loadModel($name) {
        
        $modelPath = 'models/'.$name.'_model.php'; 
        
        if ( file_exists($modelPath) ) {
            
            require $modelPath; 
            
            $modelName = $name.'_Model';
            $this->model = new $modelName;
        }        
        
    }

}

