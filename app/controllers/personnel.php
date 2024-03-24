<?php 
final class controlerAbsence{
    final function getEmplAbsence(){ 
          
    } 

    final function calcAbsence(){

    }
    final function Reclamation(){

    }  
}        
class  personnel extends Controller{   
    const Fetch=12; 
    public function __construct(){ 
        if(empty($_SESSION['username']) || empty($_SESSION['email'])){
            redirect('users/login'); 
        }  
        $this->modelpersonnel=$this->model('persone');
    }   
    
    public function index(){  
        $this->view('personnel/index');      
    }  
    
    public function table(){  
        if(!empty($_POST['search'])){
            $search=$_POST['search']; 
        }else{
            $search="";
        }
        if(!empty($_POST['page'])){ 
            $page=$_POST['page'];      
        }else{
            $page=1; 
        }      
        $start=($page-1)*(Self::Fetch);      
        $user_id=$_SESSION['user_id']; 
        $rowcol=$this->modelpersonnel->rowCol($user_id); 
        $data=$this->modelpersonnel->select($user_id,$search,$start); 
        $this->view('personnel/table',$data,$rowcol);         
    }
    
    public function insert(){
        $date=$_POST['date'];$nom=$_POST['nom'];$durée=$_POST['durée'];$absence=$_POST['absence'];$justification=$_POST['justification'];
        $user_id=$_SESSION['user_id'];  
        $this->modelpersonnel->insert($user_id,$date,$nom,$durée,$absence,$justification); 
        $this->table(); 
    }
    public function delete(){
        $id_persone=$_POST['id_persone']; 
        $data=$this->modelpersonnel->delete($id_persone);
        $this->table(); 
    }
    public function edit(){
        $date=$_POST['date'];$nom=$_POST['nom'];$durée=$_POST['durée'];$absence=$_POST['absence'];$justification=$_POST['justification'];$id_persone=$_POST['id_persone']; 
        $this->modelpersonnel->edit($id_persone,$date,$nom,$durée,$absence,$justification);  
        $this->table();  
    }
}   