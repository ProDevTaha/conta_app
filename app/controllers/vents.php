<?php     
class Vents extends Controller{
    const Fetch=12; 
    public function __construct(){ 
        if(empty($_SESSION['username']) || empty($_SESSION['email'])){
            redirect('users/login'); 
        }  
        $this->vents=$this->model('vent');       
    }   

    public function tableVent(){  
        if(!empty($_POST['page'])){ 
            $page=$_POST['page'];     
        }else{
            $page=1;  
        }  
        $star=($page-1)*(Self::Fetch);     
        $user_id=$_SESSION['user_id'];  
        $data=$this->vents->select($user_id,$star);       
        $rowCount=$this->vents->rowCol();    
        $this->view('vents/table',$data,$rowCount);              
    }          
    public function insert(){    
        $vents=[
            'client'=>$_POST['client'],      
            'date_échéance'=>$_POST['date_échéance'],  
            'quantité'=>$_POST['quantité'],
            'prix_unitaire'=>$_POST['prix_unitaire'],
            'mentant_HT'=>$_POST['mentant_HT'],
            'situation'=>$_POST['situation'],
            'modde_reg'=>$_POST['modde_reg'],  
            'Type'=>$_POST['Type'] 
        ];
        $date=$_POST['date'];    
        if($this->vents->insert($vents,$date)){    
            $this->tablevent();           
        }  
    }   
    public function edit(){  
        $vents=[
            'client'=>$_POST['client'],   
            'date'=>$_POST['date'],    
            'date_échéance'=>$_POST['date_échéance'],  
            'quantité'=>$_POST['quantité'],
            'prix_unitaire'=>$_POST['prix_unitaire'],
            'mentant_HT'=>$_POST['mentant_HT'],
            'situation'=>$_POST['situation'],
            'modde_reg'=>$_POST['modde_reg'], 
            'Type'=>$_POST['Type'],
            'id_vent'=>$_POST['id_vent']    
        ];  
        if($this->vents->edit($vents)){    
            $this->tablevent();         
        }   
    }  
    public function delete(){ 
        $id_vent=$_POST['id_vents']; 
        if($this->vents->delete($id_vent)){    
            $this->tablevent();          
        }   
    }  

    public function SUM(){
        $user_id=$_SESSION['user_id'];      
        $SUM=$this->vents->SUM($user_id);     
        $this->viewColaps('vents/TMM',$SUM);     
    }     
    public function imprimer(){    
        $id_facture=$_GET['id_facture']; 
        if(empty($id_facture)){
            echo '<div class=" w-25 text-center m-auto mt-3 alert alert-danger" role="alert">
            nemuro de facture not existe
           </div>'; 
        }else{
            $data=$this->vents->facture( $id_facture); 
            $this->view('vents/pdf',$data,null);      
        } 
    } 
    
    public function index(){  
        $this->view('vents/vents');     
    }   
    
    public function autoCompletClient(){
        $result=$this->vents->autoCompleteClient();       
        $this->view('vents/autocompleteClient',$result,null);     
    }

}