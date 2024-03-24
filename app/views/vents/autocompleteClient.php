    <option Selected>select Client</option>  
    <?php foreach($Data as $value):?>
        <option  value='<?= $value['client']?>'><?= $value['client']?></option>   
    <?php endforeach;?>  
