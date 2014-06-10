<?php

class Kontakt extends Controller{
    
    function __construct() {
         parent::__construct();
        
        
    }
    
    function index() {
        
          $this->view->menuActiv = 'kontakt';
          $this->view->header = 'Kontakt';
          $this->view->render('kontakt/index');
    }
    
    public function other() {
        
         echo 'to jest other';
    }
    
    
}

