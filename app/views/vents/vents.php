<!DOCTYPE html> 
<html lang="en">
<head>
  <?php require APPROOT . '/views/inc/head.php'; ?>    
  <title>Les vents</title>  
</head> 
  <body style="";> 
      <div class="row w-100">    
          <?php require APPROOT . '/views/inc/aside.php'; ?>    
          <div class="col-10">   
            <?php include_once 'navbar.php'?> 
            <div class="collapse mt-1 " id="collapseExample"> 
              <div class="card card-body bg-primary" id="tmm">  
        
              </div>
            </div>       
            <div class="table-responsive"  id="table">   
  
            </div>   
            <div> 
              <?php include_once 'modal.php'?>    
            </div> 
            <div>
              <?php include_once 'modalSearch.php'?>      
            </div> 
          </div>   
      </div>  
  </body>    
  <input type="hidden" id="view"   value="<?php  echo URLROOT?>/vents/tableVent">      
  <input type="hidden" id="insert" value="<?php  echo URLROOT?>/vents/insert">    
  <input type="hidden" id="delete" value="<?php  echo URLROOT?>/vents/delete">    
  <input type="hidden" id="edit"   value="<?php  echo URLROOT?>/vents/edit">    
  <input type="hidden" id="TMM"    value="<?php  echo URLROOT?>/vents/SUM">     
  <input type="hidden" id="autoCompleteClient" value="<?php echo URLROOT?>/vents/autoCompletClient">   
  <script src="<?php echo URLROOT; ?>/js/crdVent.js"></script>
  <script src="<?php echo URLROOT; ?>/js/Ventes.js"></script>    
  <script src="<?php echo URLROOT; ?>/js/SearchDateVent.js"></script>       
</html>   