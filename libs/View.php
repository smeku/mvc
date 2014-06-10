<?php

class View {
    
    public $menuActiv = null;

    function __construct() {
        
        //echo 'to jest View<br>';
        
    }
   


    public function render($name) {
        
        require 'views/header.php';

        require 'views/'.$name.'.php';
        
        require 'views/footer.php';
        
    }

}
