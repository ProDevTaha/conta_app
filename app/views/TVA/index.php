<!DOCTYPE html> 
<html lang="en">
<head>
  <?php require APPROOT . '/views/inc/head.php'; ?>    
  <title>TVA</title>   
</head> 
   <body> 
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
  <input type="hidden" id="insert" value="<?php echo URLROOT?>/TVA/insert">  
  <input type="hidden" id="view"   value="<?php echo URLROOT?>/TVA/table">    
  <input type="hidden" id="delete" value="<?php echo URLROOT?>/TVA/delete">    
  <input type="hidden" id="update" value="<?php echo URLROOT?>/TVA/update">       
  <input type="hidden" id="TMM" value="<?php echo URLROOT?>/TVA/SUM">              
  <script src="<?=URLROOT?>/js/crdTVA.js"></script>  
  <script src="<?=URLROOT?>/js/TVA.js"></script>  
  <script src="<?=URLROOT?>/js/searchDateTVA.js"></script>  
</html>   