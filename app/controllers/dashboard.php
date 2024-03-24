<?php   
class Dashboard extends Controller {
  public function __construct(){  
    if(empty($_SESSION['username']) || empty($_SESSION['email'])){
      redirect('users/login'); 
    }   
    $this->AchatsModal = $this->model('Achats');
    $this->VentsModal = $this->model('Vent');
    $this->banqueModal = $this->model('banque');
    $this->personeModal = $this->model('persone'); 
    $this->TVAModal = $this->model('TVAA'); 
  } 
   
  public function index(){   
    $user_id=$_SESSION['user_id'];
    $nombreAchat = $this->AchatsModal->rowCol();
    $nombreVent = $this->VentsModal->rowCol();
    $nombrebanque = $this->banqueModal->rowCol();
    $nombrepersone = $this->personeModal->rowCol($user_id);  
    $TVACharge = $this->TVAModal->SUMSurCharge($user_id);  
    $TVAvente = $this->TVAModal->SUMSurVent($user_id);   
    $data = [
      'nombreAchat' => $nombreAchat,
      'nombreVent' => $nombreVent,
      'nombrebanque' => $nombrebanque,
      'nombrepersone' => $nombrepersone,
      'TVACharge' => $TVACharge, 
      'TVAvente' =>  $TVAvente 
    ];
    $this->view('dashboard/dashboard',$data);             
  }    
}   