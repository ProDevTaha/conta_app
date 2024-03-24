<option Selected>select fornisseur</option>
<?php
foreach($Data as $key => $value):?>
        <option  value="<?= $value['Fas']?>"><?=$value['Fas']?></option>   
<?php endforeach;?>
  