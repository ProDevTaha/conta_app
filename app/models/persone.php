<?php        
class persone {
   
    public function __construct(){
        $this->db = new Database;   
    }  

    public function select($id_user,$search,$start){        
       if(!empty($search)){  
        $this->db->query("SELECT *FROM  `personnel`  WHERE   `id_user`='$id_user' AND   `nom` LIKE '%$search%'  limit 12"); 
        $result = $this->db->resultSet();
        return $result;        
       }else{
        $this->db->query("SELECT * FROM `personnel`  WHERE  `id_user`='$id_user'  ORDER BY `date_saisie` ASC limit $start,12");         
        $result = $this->db->resultSet();
        return $result;   
       }
    }  
    public function insert($user_id,$date,$nom,$durée,$absence,$justification){
        $this->db->query("INSERT INTO `personnel` (`nom`,`durée`,`date`,`justification`,`id_user`,`date_saisie`) VALUES ('$nom','$durée','$absence','$justification','$user_id','$date')");
        if($this->db->execute()){         
            return true; 
        }else{  
            return false; 
        } 
    }
   
    public function delete($id_persone){
        $this->db->query("DELETE FROM `personnel` WHERE `id_persone`='$id_persone'");    
        $result = $this->db->resultSet();
        return $result;           
        
    }
    
    public function edit($id_persone,$date,$nom,$durée,$absence,$justification){
        $this->db->query("UPDATE `personnel` SET `nom`='$nom',`date`='$absence',`durée`='$durée',`date_saisie`='$date',`justification`='$justification' WHERE `id_persone`='$id_persone'");  
        if($this->db->execute()){                                               
            return true;
        }else{  
            return false; 
        }   
    }

    public function rowCol($user_id){          
        $result=$this->db->query("SELECT count(*) FROM `personnel`  WHERE  `id_user`='$user_id'");            
        $rowCount=$this->db->fetchCol();   
        return $rowCount;   
    }     
   
}   
  
