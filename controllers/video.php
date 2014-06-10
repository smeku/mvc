<?php

class Video extends Controller {
    
    function __construct() {
         parent::__construct();

    }
    
    function watch($videoId) {
        
        
          
          $this->view->videoLosowe = $this->model->videoLosowe();
          // print_r($this->model->videoLosowe());
          
          $this->view->video = $this->model->watch($videoId);
          $this->view->render('video/index');
    }
    
    
    
}



