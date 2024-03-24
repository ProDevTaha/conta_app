<div class="row bg-light">
    <div class="col-4 text-center border border-2">
        <h5>TOTAL HT</h5>
        <?php echo number_format($mantant_ht=$SUM[0]['total_HT'],2)?> DH   
    </div> 
    <div class="col-4 text-center border border-2">
        <h5>TVA</h5>
        <?php echo number_format($TVAA=($mantant_ht)*0.2,2)?> DH  
    </div>
    <div class="col-4 text-center border border-2">
        <h5>MANTANT TTC</h5>
        <?php echo number_format($mantant_ttc=$TVAA+$mantant_ht,2) ?> DH 
    </div>
</div>  