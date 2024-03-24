<?php        
class banque{
     
    public function __construct(){
        $this->db = new Database;   
    }     
             
    public function select($user_id){
        $this->db->query("SELECT * FROM `banque`  WHERE  `id_user`='$user_id' ORDER BY `Date_Compta` DESC ");         
        $result = $this->db->resultSet(); 
        return $result; 
    }

    public function insert($compta_date,$compta_libelle,$compta_debit,$compta_credit,$banque_date,$banque_libelle,$banque_debit,$banque_credit,$user_id){
        $this->db->query("INSERT INTO `banque` (`Date_compta`,`libelle_compta`,`Debit_compta`,`credi_compta`,`Date_banque`,`libelle_banque`,`Debit_banque`,`credi_banque`,`id_user`) VALUES ('$compta_date','$compta_libelle','$compta_debit','$compta_credit','$banque_date','$banque_libelle','$banque_debit','$banque_credit','$user_id')");
        if($this->db->execute()){         
            return true; 
        }else{  
            return false; 
        } 
    }
    public function edit($id_bancaire,$Date_comptab,$libelle_comptab,$Debit_comptab,$credi_comptab,$Date_banqueb,$libelle_banqueb,$Debit_banqueb,$credi_banqueb){
        $this->db->query("UPDATE `banque` SET  `Date_compta`='$Date_comptab',`libelle_compta`='$libelle_comptab',`Debit_compta`='$Debit_comptab',`credi_compta`='$credi_comptab',`Date_banque`='$Date_banqueb',`libelle_banque`='$libelle_banqueb',`Debit_banque`='$Debit_banqueb',`credi_banque`='$credi_banqueb' WHERE `id_bancaire`='$id_bancaire'"); 
        if($this->db->execute()){         
            return true; 
        }else{  
            return false; 
        } 
    }
    public function delete($id_bancaire){
        $this->db->query("DELETE FROM `banque` WHERE `id_bancaire`='$id_bancaire'");     
        $result = $this->db->resultSet();
        return $result;    
    }

    public function Sumcompta($user_id){
        $this->db->query("SELECT SUM(Debit_compta) AS Sumcompta FROM `banque`  WHERE  `id_user`='$user_id'");         
        $result = $this->db->resultSet(); 
        return $result; 
    }     
    public function Sumbanque($user_id){ 
        $this->db->query("SELECT SUM(Debit_banque) AS Sumbanque FROM `banque`  WHERE  `id_user`='$user_id'");         
        $result = $this->db->resultSet(); 
        return $result;  
    }
    public function SumC_compta($user_id){
        $this->db->query("SELECT SUM(credi_compta) AS SumC_compta FROM `banque`  WHERE  `id_user`='$user_id'");         
        $result = $this->db->resultSet(); 
        return $result;  
    }
    public function SumC_banque($user_id){
        $this->db->query("SELECT SUM(credi_banque) AS SumC_banque FROM `banque`  WHERE  `id_user`='$user_id'");         
        $result = $this->db->resultSet(); 
        return $result;  
    }
    public function result_compta($user_id){
        $this->db->query("SELECT SUM(credi_compta - Debit_compta) AS result_compta FROM `banque`  WHERE  `id_user`='$user_id'");         
        $result = $this->db->resultSet();  
        return $result;  
    }
    public function result_banque($user_id){ 
        $this->db->query("SELECT SUM(credi_banque - Debit_banque) AS SumC_banque FROM `banque`  WHERE  `id_user`='$user_id'");         
        $result = $this->db->resultSet(); 
        return $result;  
    }

    public function rowCol(){  
        $user_id=$_SESSION['user_id'];        
        $result=$this->db->query("SELECT count(*) FROM `banque`  WHERE  `id_user`='$user_id'");            
        $rowCount=$this->db->fetchCol();   
        return $rowCount; 
    }  
}   
  
