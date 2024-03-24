<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */ 
  class Core { 
    protected $currentController = 'Pages';
    protected $currentMethod = 'index'; 
    protected $params = [];   
    public function __construct(){  
      $url = $this->getUrl(); 
      try {
        $url = $this->getUrl(); 
        //Look in controllers for first value  
        if(!empty($url) && file_exists('../app/controllers/' . $url[1]. '.php')){
          // If exists, set as controller
          $this->currentController = $url[1]; 
          // Unset 0 Index
          unset($url[1]);    
        }elseif(empty($url[1])){  
          $this->currentController = 'Pages';
        }else{
          $this->currentController = 'Errors'; 
        }
        
        // Require the controller 
        require_once '../app/controllers/'. $this->currentController. '.php';   
        // Instantiate controller class 
        $this->currentController = new $this->currentController;
  
        // Check for second part of url 
        if(isset($url[2])){
          // Check to see if method exists in controller
          if(method_exists($this->currentController, $url[2])){
            $this->currentMethod = $url[2];
            // Unset 1 index
            unset($url[2]);  
          }
        } 
  
        // Get params
        $this->params = $url ? array_values($url) : []; 
  
        // Call a callback with array of params 
        call_user_func_array([$this->currentController , $this->currentMethod], $this->params);
      } catch (\Throwable $th) {
        return $th->getMessage();
      }
    }  
    
    public function getUrl(){
      $url =$_SERVER['REQUEST_URI'];
      $url = explode('/', $url);
      return $url;
    }  
  
}   
  
  