
<?php 

class Achats{   
    private $user_id;
    private $Achat;
    private $ChantierR;
    private $from;
    private $to;
    public function __construct() 
    {
        $this->db = new Database;  
    }              
    public function SelectAchat($start){     
        if(!empty($_POST['Search'])){ 
            $user_id=$_SESSION['user_id'];              
            $search=$_POST['Search'];  
            $this->db->query("SELECT *FROM  `Achat`  WHERE  `id_users`='$user_id' AND   `Fas` LIKE '%$search%'    limit 12"); 
            $result = $this->db->resultSet();
            return $result;            
        }                 
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND empty($_POST['frsR']) AND empty($_POST['ChantierR']) ){
            $user_id=$_SESSION['user_id'];              
            $from=$_POST['from_date'];  
            $to=$_POST['to_date'];
            $this->db->query("SELECT *FROM `Achat` WHERE  `id_users`='$user_id' AND  `date` BETWEEN '$from' AND '$to' limit 12");        
            $result = $this->db->resultSet();  
            return $result;   
        } 
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND !empty($_POST['frsR']) AND !empty($_POST['ChantierR'])){
            $from=$_POST['from_date'];
            $to=$_POST['to_date'];
            $frsR=$_POST['frsR'];
            $ChantierR=$_POST['ChantierR'];    
            $user_id=$_SESSION['user_id'];         
            $this->db->query("SELECT * FROM `Achat`  WHERE  `id_users`='$user_id' AND `FAS`='$frsR' AND `Chantier`='$ChantierR' AND `date` BETWEEN '$from' AND '$to' limit 12");         
            $result = $this->db->resultSet(); 
            return $result;  
        }else{
            $user_id=$_SESSION['user_id'];         
            $this->db->query("SELECT * FROM `Achat`  WHERE  `id_users`='$user_id'  ORDER BY `date` DESC limit $start,12");         
            $result = $this->db->resultSet();
            return $result; 
        }    
    }           
    public function SUM(){  
        if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND empty($_POST['frsR']) AND empty($_POST['ChantierR']) ){ 
            $toDate=$_POST['to_date'];  
            $fromDate=$_POST['from_date'];   
            $user_id=$_SESSION['user_id'];     
            $this->db->query("SELECT SUM(`Mantant_HT`) AS total_HT FROM `Achat` WHERE `date` BETWEEN '$fromDate' AND '$toDate' AND   `id_users`='$user_id' ");         
            $SUM=$this->db->resultSet();  
            return $SUM;        
        }if(!empty($_POST['from_date']) AND !empty($_POST['to_date']) AND !empty($_POST['frsR']) AND !empty($_POST['ChantierR'])){ 
            $user_id=$_SESSION['user_id']; 
            $frsR=$_POST['frsR'];
            $toDate=$_POST['to_date'];  
            $fromDate=$_POST['from_date']; 
            $ChantierR=$_POST['ChantierR'];        
            $this->db->query("SELECT SUM(`Mantant_HT`) AS total_HT FROM `Achat` WHERE  `id_users`='$user_id' AND `Chantier`='$ChantierR' AND `FAS`='$frsR' AND `date` BETWEEN '$fromDate' AND ' $toDate'");         
            $SUM=$this->db->resultSet();  
            return $SUM;  
        }else{  
            $user_id=$_SESSION['user_id'];         
            $this->db->query("SELECT SUM(`Mantant_HT`) AS total_HT FROM `Achat` WHERE  `id_users`='$user_id' ");          
            $SUM=$this->db->resultSet();  
            return $SUM;  
        }             
    }                               
    public function rowCol(){   
        $user_id=$_SESSION['user_id'];         
        $result=$this->db->query("SELECT count(*) FROM `Achat`  WHERE  `id_users`='$user_id'");            
        $rowCount=$this->db->fetchCol();   
        return $rowCount;   
    }     
    public function insertAchat($Achat){  
        $date=$Achat['date']; 
        $Designation= $Achat['Designation']; 
        $Type=$Achat['Type']; 
        $Fas= $Achat['Fas'];  
        $Quantité=$Achat['Quantité']; 
        $prix_Unitaire=$Achat['prix_Unitaire']; 
        $Mantant_HT=$Achat['Mantant_HT'];  
        $Chantier=$Achat['Chantier'];   
        $user_id=$Achat['user_id'];       
        $this->db->query("INSERT INTO `achat` (date , Designation , Type , Fas , Quantité , prix_unitaire , Mantant_HT , Chantier , id_users) VALUES ('$date','$Designation','$Type','$Fas','$Quantité','$prix_Unitaire','$Mantant_HT','$Chantier','$user_id')");
        
        if($this->db->execute()){
            return true;
        }else{  
            return false; 
        }   
    }  
     
    public function DeleteAchat($id_Achat){
        $this->db->query("DELETE FROM `Achat` WHERE '$id_Achat'=`id_Acchat`");
        
        if($this->db->execute()){
            return true;
        }else{  
            return false; 
        }   
    } 

    public function UpdateAchat($Achat){
        $id_Achat=$Achat['id_Achat'];
        $date=$Achat['date']; 
        $Designation= $Achat['Designation']; 
        $Type=$Achat['Type']; 
        $Fas= $Achat['Fas'];   
        $Quantité=$Achat['Quantité']; 
        $prix_Unitaire=$Achat['prix_Unitaire']; 
        $Mantant_HT=$Achat['Mantant_HT'];  
        $Chantier=$Achat['Chantier'];   
        $user_id=$Achat['user_id'];  
        $this->db->query("UPDATE `achat` SET `date`='$date',`Designation`='$Designation',`Type`='$Type',`Fas`='$Fas',`Quantité`='$Quantité',`prix_Unitaire`=' $prix_Unitaire',`Mantant_HT`='$Mantant_HT',`Chantier`='$Chantier' WHERE '$id_Achat'=`id_Acchat`");
        
        if($this->db->execute()){ 
            return true;
        }else{  
            return false; 
        }   
    } 
    public function autoCompletChantier($chantier){ 
        $user_id=$_SESSION['user_id'];    
        $this->db->query("SELECT `Chantier` FROM `Achat` WHERE  `id_users`='$user_id' GROUP BY `Chantier`");  
        $result=$this->db->resultSet();  
        return $result;    
    }
    public function autoCompleteFrs(){  
        $user_id=$_SESSION['user_id'];    
        $this->db->query("SELECT `Fas` FROM `Achat` WHERE  `id_users`='$user_id' GROUP BY `Fas`");  
        $result=$this->db->resultSet();  
        return $result; 
    }
  
}

