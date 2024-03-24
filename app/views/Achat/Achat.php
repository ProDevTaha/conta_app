<!DOCTYPE html> 
<html lang="en">
<head>
<?php require APPROOT . '/views/inc/head.php'; ?>    
<title>Les Achats</title> 
</head>
<body class="overflow-hidden" style="background-color:rgb(199, 218, 241)";>   
    <div></div>
    <div class="row w-100">    
        <?php require APPROOT . '/views/inc/aside.php'; ?>    
        <div class="col-10">    
            <?php include 'navbar.php'?> 
            <div class="collapse mt-1 " id="collapseExample"> 
                <div class="card card-body bg-primary" id="tmm">
                    
                </div>
            </div>  
            <div class="table-responsive"  id='fetch'>  

            </div>     
        </div>
        <div>
        <?php include_once 'modalAchat.php'?> 
        </div>
        <div>
        <?php include_once 'searchDate.php'?>  
        </div>
    </div> 
   
</body>  
</html> 
<input type="hidden" id='searchDate'  value="<?php echo URLROOT?>/Achat/tableAchat">  
<input type="hidden" id='SUM'         value="<?php echo URLROOT?>/Achat/SUM"> 
<input type="hidden" id="URLROOT"     value="<?php echo URLROOT?>/Achat/tableAchat"> 
<input type="hidden" id="modifyAchat" value="<?php echo URLROOT;?>/Achat/UpdateAchat">  
<input type="hidden" id="deleteAchat" value="<?php echo URLROOT;?>/Achat/deleteAchat">
<input type="hidden" id="insetAchat"  value="<?php echo URLROOT;?>/Achat/insertAchat">  
<input type="hidden" id="autoCompleteChentier"  value="<?php echo URLROOT?>/Achat/autoCompletChantier">  
<input type="hidden" id="autoCompleteFRS"  value="<?php echo URLROOT?>/Achat/autoCompletFrs">   
<script src="<?php echo URLROOT; ?>/js/searDateAchat.js"></script>     
<script src="<?php echo URLROOT; ?>/js/Achat.js"></script>   
<script src="<?php echo URLROOT; ?>/js/crdAchat.js"></script>   


