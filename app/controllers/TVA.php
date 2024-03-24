<?php     
class TVA extends Controller{   
    const Fetch=12;  
    public function __construct(){ 
        if(empty($_SESSION['username']) || empty($_SESSION['email'])){
            redirect('users/login'); 
        }  
        $this->TVA=$this->model('TVAA');       
    }   
    
    public function index(){  
        $this->view('TVA/index');      
    }   
    public function table(){
        if(!empty($_POST['page'])){ 
            $page=$_POST['page'];     
        }else{
            $page=1; 
        }  
        $star=($page-1)*(Self::Fetch);     
        $user_id=$_SESSION['user_id'];  
        $data=$this->TVA->select($user_id,$star);         
        $rowCount=$this->TVA->rowCol();     
        $this->view('TVA/table',$data,$rowCount);          
    }   
    public function insert(){ 
        if(!empty($_POST['ORDER']&&$_POST['FACT_NUM']&&$_POST['DESIGNATION']&&$_POST['M_HT']&&$_POST['TVA']&&$_POST['M_TTC']&&$_POST['IF']&&$_POST['ICE_FRS']&&$_POST['LIB_FRSS']&&$_POST['TAUX']&&$_POST['ID_PAIE']&&$_POST['DATE_PAIE']&&$_POST['DATE_FAC'])){
            $ORDER=$_POST['ORDER'];$FACT_NUM=$_POST['FACT_NUM'];$DESIGNATION=$_POST['DESIGNATION'];$M_HT=$_POST['M_HT'];$TVA=$_POST['TVA'];$M_TTC=$_POST['M_TTC'];$IF=$_POST['IF'];$ICE_FRS=$_POST['ICE_FRS']; 
            $LIB_FRSS=$_POST['LIB_FRSS'];$TAUX=$_POST['TAUX'];$ID_PAIE=$_POST['ID_PAIE'];$DATE_PAIE=$_POST['DATE_PAIE'];$DATE_FAC=$_POST['DATE_FAC'];$id_user=$_SESSION['user_id'];  
            if($this->TVA->insert($ORDER,$FACT_NUM,$DESIGNATION,$M_HT,$TVA,$M_TTC,$IF,$ICE_FRS,$LIB_FRSS,$TAUX,$ID_PAIE,$DATE_PAIE,$DATE_FAC,$id_user)){
                $this->table();  
            }  
        }else{
            echo '<div class=" w-25 text-center m-auto mt-4 alert alert-danger" role="alert">
            remplir tout les cas  
            </div>';  
        } 
    }      
    public function update(){    
        $ORDER=$_POST['ORDER'];$FACT_NUM=$_POST['FACT_NUM'];$DESIGNATION=$_POST['DESIGNATION'];$M_HT=$_POST['M_HT'];$TVA=$_POST['TVA'];$M_TTC=$_POST['M_TTC'];$IF=$_POST['IF'];$ICE_FRS=$_POST['ICE_FRS']; 
        $LIB_FRSS=$_POST['LIB_FRSS'];$TAUX=$_POST['TAUX'];$ID_PAIE=$_POST['ID_PAIE'];$DATE_PAIE=$_POST['DATE_PAIE'];$DATE_FAC=$_POST['DATE_FAC'];$id_user=$_SESSION['user_id'];$id_TVA=$_POST['id_TVA'];    
        if($this->TVA->update($ORDER,$FACT_NUM,$DESIGNATION,$M_HT,$TVA,$M_TTC,$IF,$ICE_FRS,$LIB_FRSS,$TAUX,$ID_PAIE,$DATE_PAIE,$DATE_FAC,$id_user,$id_TVA)){
            $this->table();  
        }  
    }
    public function delete(){
        if(!empty($_POST['id_TVA'])){
            $id_TVA=$_POST['id_TVA'];  
            $id_user=$_SESSION['user_id']; 
            if($this->TVA->delete($id_TVA,$id_user)){
                $this->table(); 
            }
        } 
    } 
    public function SUM(){ 
        $user_id=$_SESSION['user_id']; 
        if(!empty($_POST['Tva'])){
            $tv=$_POST['Tva'];
        }else{
            $tv=0.2;
        }
        $SUM=$this->TVA->SUM($user_id);      
        $SUMSurCharge=$this->TVA->SUMSurCharge($user_id);     
        $SUMSurVent=$this->TVA->SUMSurVent($user_id);     
        $this->viewColaps('TVA/TMM',$SUM,$SUMSurCharge,$SUMSurVent,$tv);      
    }     
}
