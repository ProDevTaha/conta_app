<table class="table mt-2 ">
    <thead>
     <tr class="bg-primary">
        <th>FACTURE</th>
        <th>CLIENT</th>
        <th>DATE</th>
        <th>MODDE REG</th>
        <th>SITUATION</th>
        <th>ECHEANCE</th> 
        <th>TYPE</th>
        <th>QUANTITE</th>
        <th>PRIX UNITAIRE</th>
        <th>MENTANT HT</th>     
        <th>OPTIONS</th>        
     </tr> 
    </thead>
    <?php foreach($Data as $value):?> 
    <tbody>    
        <tr >
            <td><?=$value['id_vent']?></td>
            <td><?=$value['client']?></td>
            <td><?=$value['date']?></td>
            <td><?=$value['modde_Reg']?></td>
            <td><?=$value['situation']?></td>  
            <td><?=$value['date_échéance']?></td>
            <td><?=$value['type']?></td>
            <td><?=$value['quantité']?></td>
            <td><?=$value['prix_unitaire']?></td>    
            <td><?=$value['manant_HT']?></td>
            <td>     
                <a onclick="Delete(<?php echo $id=$value['id_vent']?>)"> 
                    <svg class="ms-2 cursor-pointer " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="cursor:pointer;color:red">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>  
                </a> 
                <a  onclick="update(<?php echo $value['id_vent']?>,'<?php echo  $value['client']?>','<?php echo $value['date'] ?>','<?php echo $value['modde_Reg'] ?>','<?php echo $value['situation']?>','<?php echo $value['date_échéance'] ?>','<?php echo $value['type']?>','<?php echo $value['quantité']?>','<?php echo $value['prix_unitaire']?>','<?php echo $value['manant_HT']?>')">
                    <svg  class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor:pointer;color:green">
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    </svg> 
                </a> 
            </td> 
        </tr>
    </tbody>    
    <?php endforeach;?>  
</table> 

    <?php
        $totalPage=ceil($rowCount/12);   
    ?>
    <div class="d-flex mb-5 p-2" style="display:inline-block;margin-top:-20px"> 
       <?php for($i=1;$i<=$totalPage;$i++):?>
       <button class="pagination " style="border:2px;width:30px;" id="<?=$i?>"><?=$i?></button> 
       <?php endfor ;?>
    </div> 