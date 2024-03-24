<?php   
class Achat extends Controller{ 
    const Fetch=12; 
    private $Achat;
    private $result;
    private $SUM;
    public function __construct(){
        if(empty($_SESSION['username']) || empty($_SESSION['email'])){
            redirect('users/login'); 
        }     
        $this->CrudeAchat=$this->model('Achats');    
    }   
    
    public function tableAchat(){   
        if(!empty($_POST['page'])){ 
            $page=$_POST['page'];      
        }else{
            $page=1; 
        }  
        $start=($page-1)*(Self::Fetch);      
        $Data=$this->CrudeAchat->SelectAchat($start); 
        $rowCount=$this->CrudeAchat->rowCol();    
        $this->view('Achat/loopAchat',$Data,$rowCount);                
    }                           
    public function SUM(){ 
        $SUM=$this->CrudeAchat->SUM(); 
        $this->viewColaps('Achat/TMM',$SUM);     
    }                        
    public function index(){ 
        $this->view('Achat/Achat');          
    }   
    public function insertAchat(){  
       $Achat=[ 
        'date'=>$_POST['date'],
        'Designation'=>$_POST['designation'], 
        'Type'=>$_POST['type'], 
        'Fas'=>$_POST['frs'], 
        'Quantité'=>$_POST['Quantité'],
        'prix_Unitaire'=>$_POST['prix_Unitaire'],  
        'Mantant_HT'=>$_POST['Mantant_HT'],
        'Chantier'=>$_POST['Chantier'], 
        'user_id'=>$_SESSION['user_id']  
       ];   
        if($this->CrudeAchat->insertAchat($Achat)){   
          $this->tableAchat();   
        }   
    }     
    
    public function autoCompletChantier(){ 
        $result=$this->CrudeAchat->autoCompletChantier($chantier); 
        $this->view('Achat/autoCompleteChantier',$result,null);       
    }     
    public function autoCompletFrs(){  
        $result=$this->CrudeAchat->autoCompleteFrs();      
        $this->view('Achat/autoCompleteFrs',$result,null);   
    }  
    public function DeleteAchat(){
        $id_Achat=$_POST['id_Achat'];   
        if($this->CrudeAchat->DeleteAchat($id_Achat)){ 
            $this->tableAchat();  
        }    
    } 
    public function UpdateAchat(){ 
        $Achat=[
            'id_Achat'=>$_POST['id_Achat'],
            'date'=>$_POST['date'],
            'Designation'=>$_POST['designation'],
            'Type'=>$_POST['type'], 
            'Fas'=>$_POST['frs'], 
            'Quantité'=>$_POST['Quantité'],
            'prix_Unitaire'=>$_POST['prix_Unitaire'], 
            'Mantant_HT'=>$_POST['Mantant_HT'],
            'Chantier'=>$_POST['Chantier'], 
            'user_id'=>$_SESSION['user_id']  
        ]; 
        if($this->CrudeAchat->UpdateAchat($Achat)){
            $this->tableAchat();     
        };  

    }
}  