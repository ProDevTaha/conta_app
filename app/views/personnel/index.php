<!DOCTYPE html> 
<html lang="en">
<head>
  <?php require APPROOT . '/views/inc/head.php'; ?>    
  <title>Personnel|gérant</title>   
</head> 
   <body> 
      <div class="row w-100">    
          <?php require APPROOT . '/views/inc/aside.php'; ?>    
            <div class="col-10">
              <?php include_once 'navbar.php' ?>     
              <div class="table-responsive"  id="table">   
                       
              </div>    
              <div>
                <?php include_once 'ajouter.php'?>
              </div>
            </div>   
      </div>  
    </body> 
    <input type="hidden" id="view" value="<?=URLROOT?>/personnel/table"> 
    <input type="hidden" id="insert" value="<?=URLROOT?>/personnel/insert"> 
    <input type="hidden" id="delete" value="<?=URLROOT?>/personnel/delete"> 
    <input type="hidden" id="edit" value="<?=URLROOT?>/personnel/edit"> 
    <script src="<?=URLROOT?>/js/personnel.js"></script> 
</html>   