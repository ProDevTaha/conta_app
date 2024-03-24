<?php     
class  Rapprochement_Bancaire extends Controller{   
    
    public function __construct(){ 
        if(empty($_SESSION['username']) || empty($_SESSION['email'])){
            redirect('users/login'); 
        }  
        $this->Bancaire=$this->model('banque');       
    }   
    
    public function index(){  
        $this->view('Bancaire/index');      
    }   
    public function table(){ 
        $user_id=$_SESSION['user_id']; 
        $data=$this->Bancaire->select($user_id); 
        $this->view('Bancaire/table',$data);          
    } 
            
    public function insert(){ 
        $compta_date=$_POST['compta_date'];$compta_libelle=$_POST['compta_libelle'];$compta_debit=$_POST['compta_debit'];   $compta_credit=$_POST['compta_credit'];$banque_date=$_POST['banque_date'];$banque_libelle=$_POST['banque_libelle'];$banque_debit=$_POST['banque_debit'];$banque_credit=$_POST['banque_credit'];$id_banqaire=$_POST['id_banqaire']; $user_id=$_SESSION['user_id']; 
        $this->Bancaire->insert($compta_date, $compta_libelle,$compta_debit,$compta_credit,$banque_date,$banque_libelle,$banque_debit,$banque_credit,$user_id);           
    }   
    public function edit(){  
        $id_bancaire=$_POST['id_bancaireb']; 
        $Date_comptab=$_POST['Date_comptab'];
        $libelle_comptab=$_POST['libelle_comptab'];
        $Debit_comptab=$_POST['Debit_comptab'];
        $credi_comptab=$_POST['credi_comptab'];
        $Date_banqueb=$_POST['Date_banqueb'];
        $libelle_banqueb=$_POST['libelle_banqueb'];
        $Debit_banqueb=$_POST['Debit_banqueb'];
        $credi_banqueb=$_POST['credi_banqueb'];
        $this->Bancaire->edit($id_bancaire,$Date_comptab,$libelle_comptab,$Debit_comptab,$credi_comptab,$Date_banqueb,$libelle_banqueb,$Debit_banqueb,$credi_banqueb);    
    }
    public function delete(){
        $id_bancaire=$_POST['id_bancaire']; 
        $this->Bancaire->delete($id_bancaire);    
    }
};