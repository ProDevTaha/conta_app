<?php        
class TVAA {
    private $ORDER ;private $FACT_NUM ;private $DESIGNATION;private $M_HT;private $TVA;private $M_TTC;private $IF;
    private $ICE_FRS;private $LIB_FRSS;private $TAUX;private $ID_PAIE;private $DATE_PAIE;private $DATE_FAC;
    public function __construct(){
        $this->db = new Database;   
    }  

    public function select($id_user,$star){ 
        if(!empty($_POST['search'])){    
            $search=$_POST['search']; 
            $this->db->query("SELECT *FROM  `TVA`  WHERE   `id_user`='$id_user' AND   `ORDER` LIKE '%$search%'  limit 12");  
            $result = $this->db->resultSet();
            return $result;            
        }else{        
            $this->db->query("SELECT * FROM `TVA`  WHERE  `id_user`='$id_user'  ORDER BY `DATE_FACT` ASC limit $star,12");         
            $result = $this->db->resultSet();
            return $result; 
        }     
    }
           
    public function insert($ORDER,$FACT_NUM,$DESIGNATION,$M_HT,$TVA,$M_TTC,$IF,$ICE_FRS,$LIB_FRSS,$TAUX,$ID_PAIE,$DATE_PAIE,$DATE_FAC,$id_user){
        $this->db->query("INSERT INTO `TVA` (`ORDER`,`FACT_NUM`,`DESIGNATION`,`M_HT`,`TVA`,`M_TTC`,`IF`,`ICE_FRS`,`LIB_FRSS`,`TAUX`,`ID_PAIE`,`DATE_PAIE`,`DATE_FACT`,`id_user`) VALUES ('$ORDER','$FACT_NUM','$DESIGNATION',$M_HT,$TVA,$M_TTC,'$IF','$ICE_FRS','$LIB_FRSS','$TAUX','$ID_PAIE','$DATE_PAIE','$DATE_FAC','$id_user')");
        if($this->db->execute()){         
            return true; 
        }else{  
            return false; 
        } 
    }
    public function rowCol(){  
        $user_id=$_SESSION['user_id'];          
        $result=$this->db->query("SELECT count(*) FROM `TVA`  WHERE  `id_user`='$user_id'");            
        $rowCount=$this->db->fetchCol();    
        return $rowCount; 
    }  
    
    public function delete($id_TVA){ 
        $this->db->query("DELETE FROM `TVA` WHERE `id_TVA`='$id_TVA'");    
        $result = $this->db->resultSet();
        return $result;           
    }
    public function update($ORDER,$FACT_NUM,$DESIGNATION,$M_HT,$TVA,$M_TTC,$IF,$ICE_FRS,$LIB_FRSS,$TAUX,$ID_PAIE,$DATE_PAIE,$DATE_FAC,$id_user,$id_TVA){
        $this->db->query("UPDATE `TVA` SET `ORDER`='$ORDER',`FACT_NUM`='$FACT_NUM',`DESIGNATION`='$DESIGNATION',`M_HT`='$M_HT',`TVA`='$TVA',`M_TTC`='$M_TTC',`IF`='$IF',`ICE_FRS`='$ICE_FRS',`LIB_FRSS`='$LIB_FRSS',`ID_PAIE`='$ID_PAIE',`DATE_PAIE`='$DATE_PAIE',`DATE_FACT`='$DATE_FAC',`TAUX`='$TAUX'  WHERE `id_TVA`='$id_TVA'"); 
        if($this->db->execute()){                                               
            return true;
        }else{  
            return false; 
        }   
    }
    public function SUM($user_id){    
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date'])){
            $to_date=$_POST['to_date'];$from_date=$_POST['from_date'];  
            $this->db->query("SELECT SUM(`M_HT`) AS total_HT FROM `TVA` WHERE  `id_user`='$user_id' AND `DATE_FACT` BETWEEN '$from_date' AND '$to_date'");           
            $SUM=$this->db->resultSet();  
            return $SUM; 
        }else{
            $this->db->query("SELECT SUM(`M_HT`) AS total_HT FROM `TVA` WHERE  `id_user`='$user_id' ");           
            $SUM=$this->db->resultSet();  
            return $SUM; 
        }     
       
    }   
    public function SUMSurCharge($user_id){
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date'])){
            $to_date=$_POST['to_date'];$from_date=$_POST['from_date'];  
            $from_date=$_POST['from_date'];$to_date=$_POST['to_date'];
            $this->db->query("SELECT SUM(`Mantant_HT`) AS total_HTSurCharge FROM `Achat` WHERE  `id_users`='$user_id' AND `date` BETWEEN '$from_date' AND '$to_date'");          
            $SUMSurCharge=$this->db->resultSet();  
            return $SUMSurCharge;  
        }else{
            $this->db->query("SELECT SUM(`Mantant_HT`) AS total_HTSurCharge FROM `Achat` WHERE  `id_users`='$user_id'");          
            $SUMSurCharge=$this->db->resultSet();  
            return $SUMSurCharge;  
        }  
    }
    public function SUMSurVent($user_id){  
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date'])){ 
            $to_date=$_POST['to_date'];$from_date=$_POST['from_date'];  
            $this->db->query("SELECT SUM(`manant_HT`) AS total_HTSurVent FROM `vents` WHERE  `id_users`='$user_id'  AND `date` BETWEEN '$from_date' AND '$to_date'");          
            $SUMSurVent=$this->db->resultSet();  
            return $SUMSurVent;  
        }else{
            $this->db->query("SELECT SUM(`manant_HT`) AS total_HTSurVent FROM `vents` WHERE  `id_users`='$user_id'");          
            $SUMSurVent=$this->db->resultSet();   
            return $SUMSurVent;  
        }
    }
}   
  
