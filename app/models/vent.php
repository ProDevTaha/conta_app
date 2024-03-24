<?php        
class vent {  
    private $user_id; 
    private $id_facture;  
    private $search;
    private $fromDate;
    private $toDate;
    private $client;
    private $Date;
    private $result;    
    public function __construct() 
    {
        $this->db = new Database;   
    }  
           
    public function select($user_id,$star){    
        if(!empty($_POST['search'])){    
            $search=$_POST['search']; 
            $this->db->query("SELECT *FROM  `vents`  WHERE   `id_users`='$user_id' AND   `client` LIKE '%$search%'  limit 12"); 
            $result = $this->db->resultSet();
            return $result;            
        }                 
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND empty($_POST['client'])){ 
            $fromDate=$_POST['from_date']; $toDate=$_POST['to_date']; $client=$_POST['client'];           
            $this->db->query("SELECT *FROM `vents` WHERE  `id_users`='$user_id' AND  `date` BETWEEN '$fromDate' AND '$toDate' limit 12");        
            $result = $this->db->resultSet();  
            return $result;   
        }     
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND !empty($_POST['client'])){  
            $fromDate=$_POST['from_date']; $toDate=$_POST['to_date']; $client=$_POST['client'];              
            $this->db->query("SELECT * FROM `vents`  WHERE  `id_users`='$user_id' AND `client`='$client'  AND `date` BETWEEN '$fromDate' AND '$toDate' limit 12");          
            $result = $this->db->resultSet(); 
            return $result;   
        }else{      
            $this->db->query("SELECT * FROM `vents`  WHERE  `id_users`='$user_id'  ORDER BY `date` DESC limit $star,12");         
            $result = $this->db->resultSet();
            return $result; 
        }    
              
    }  
    public function insert($vents,$date){   
        $client=$vents['client'];$modde_reg=$vents['modde_reg'];$mentant_HT=$vents['mentant_HT']; 
        $situation=$vents['situation'];$date_échéance=$vents['date_échéance'];$prix_unitaire=$vents['prix_unitaire'];
        $Type=$vents['Type'];$quantité=$vents['quantité'];$user_id=$_SESSION['user_id']; 
        $this->db->query("INSERT INTO `vents` (date,client,modde_Reg,situation,type,quantité,prix_unitaire,manant_HT,date_échéance,id_users) VALUES ('$date','$client','$modde_reg','$situation','$Type','$quantité','$prix_unitaire','$mentant_HT','$date_échéance','$user_id')");
        if($this->db->execute()){                                               
            return true; 
        }else{  
            return false; 
        }   
    }       
    public function edit($vents){   
        $client=$vents['client'];$date=$vents['date'];$modde_reg=$vents['modde_reg'];$mentant_HT=$vents['mentant_HT']; 
        $situation=$vents['situation'];$date_échéance=$vents['date_échéance'];$prix_unitaire=$vents['prix_unitaire'];
        $Type=$vents['Type'];$quantité=$vents['quantité'];$user_id=$_SESSION['user_id'];$id_vent=$vents['id_vent']; 
        $this->db->query("UPDATE `vents` SET client='$client',date='$date',modde_Reg='$modde_reg',situation='$situation',date_échéance='$date_échéance',type='$Type',quantité='$quantité',prix_unitaire='$prix_unitaire',manant_HT='$mentant_HT'  WHERE `id_vent`='$id_vent'");
        if($this->db->execute()){                                               
            return true;
        }else{  
            return false; 
        }   
    }       
   
    public function delete($id_vent){  
        $this->db->query("DELETE FROM `vents` WHERE `id_vent`='$id_vent'");   
        $result = $this->db->resultSet();
        return $result;         
    }
     
    public function SUM($user_id){        
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND empty($_POST['client'])){ 
            $fromDate=$_POST['from_date'];$toDate=$_POST['to_date'];$client=$_POST['client'];    
            $this->db->query("SELECT SUM(`Manant_HT`) AS total_HT FROM `vents` WHERE `date` BETWEEN '$fromDate' AND '$toDate' AND   `id_users`='$user_id' ");         
            $SUM=$this->db->resultSet();  
            return $SUM;         
        }if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND !empty($_POST['client'])){ 
            $fromDate=$_POST['from_date'];$toDate=$_POST['to_date'];$client=$_POST['client'];           
            $this->db->query("SELECT SUM(`Manant_HT`) AS total_HT FROM `vents` WHERE  `id_users`='$user_id' AND  `client`='$client' AND `date` BETWEEN '$fromDate' AND ' $toDate'");         
            $SUM=$this->db->resultSet();  
            return $SUM;  
        }else{  
            $this->db->query("SELECT SUM(`manant_HT`) AS total_HT FROM `vents` WHERE  `id_users`='$user_id' ");          
            $SUM=$this->db->resultSet();  
            return $SUM;  
        }             
    }   
    
    public function facture($id_facture){
        $user_id=$_SESSION['user_id'];          
        $this->db->query("SELECT *FROM  `vents` WHERE `id_users`='$user_id' AND `id_vent`='$id_facture'");   
        $result = $this->db->resultSet();
        return $result;      
    }

    public function autoCompleteClient(){
        $user_id=$_SESSION['user_id'];    
        $this->db->query("SELECT `client` FROM `vents` WHERE  `id_users`='$user_id' GROUP BY `client`");   
        $result=$this->db->resultSet();  
        return $result; 
    }

    public function rowCol(){  
        $user_id=$_SESSION['user_id'];          
        $result=$this->db->query("SELECT count(*) FROM `vents`  WHERE  `id_users`='$user_id'");            
        $rowCount=$this->db->fetchCol();   
        return $rowCount; 
    }     
}   
  
