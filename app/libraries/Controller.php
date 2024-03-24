<?php
  /*
   * Base Controller
   * Loads the models and views
   */ 
  class Controller {
    // Load model  
    public function model($model){  
      // Require model file
      require_once '../app/models/' . $model . '.php'; 

      return new $model();   
    }    
    public function view($view,$Data=null,$rowCount=null,$SdatCompt=null,$Sdatbanque=null,$SumC_compta=null,$SumC_banque=null,$result_cpmpta=null,$result_banque=null){                 
      // Check for view file 
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php'; 
      } else {
        // View does not exist 
        die('View does not exist'); 
      } 
    }                 
    public function viewbanque($view,$Data){              
      // Check for view file 
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php'; 
      } else {
        // View does not exist 
        die('View does not exist'); 
      } 
    }                 
    public function viewColaps($view,$SUM,$SUMSurCharge=null,$SUMSurVent=null,$tv=null){               
      // Check for view file 
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php'; 
      } else {
        // View does not exist 
        die('View does not exist'); 
      } 
    }                 
  }