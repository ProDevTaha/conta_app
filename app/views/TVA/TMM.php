<div class="row bg-light">
    <div class="col-4 text-center border border-2">
        <h5>TOTAL HT</h5>
        <?php echo number_format($mantant_ht=$SUM[0]['total_HT'],2).'DH'; ?> 
    </div> 
    <div class="col-4 text-center border border-2">
        <h5>TVA</h5>
        <?php echo number_format($TVA=($mantant_ht)*$tv).'DH' ?> 
    </div>
    <div class="col-4 text-center border border-2">
        <h5>MANTANT TTC</h5>
        <?php echo number_format($mantant_ttc=$TVA+$mantant_ht, 2).'DH'; ?>  
    </div>
</div>
<div class="row bg-info">
    <div class="col-4 text-center border border-2">
        <h5>TVA Surcharge</h5>
        <?php echo number_format($TVASurCharge=($SUMSurCharge[0]['total_HTSurCharge'])*$tv).'DH'?>   
    </div> 
    <div class="col-4 text-center border border-2">
        <h5>TVA Survent</h5> 
        <?php echo number_format($TVASurVent=($SUMSurVent[0]['total_HTSurVent'])*$tv).'DH'?> 
    </div>  
    <div class="col-4 text-center border border-2">
        <h5>Resultat</h5> 
        <input type="text" id='resultat' class="text-center rounded" value="<?=$TVASurVent-$TVASurCharge?> " style="border:none">
    </div> 
</div>  

<script>
 var resultat=$('#resultat').val(); 
 console.log(resultat);
  if(resultat<0){
    $('#resultat').css("background-color","red");
  }else{ 
    $('#resultat').css("background-color","rgb(64, 255, 0)");
  }  
</script>  