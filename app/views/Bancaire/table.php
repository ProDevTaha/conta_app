<table class="w-100 mt-2">   
    <thead> 
      <tr class="text-dark"> 
        <th colspan="4" class="text-center bg-warning ">Chez la comptabilité</th>
        <th colspan="4" class="text-center bg-info">Chez la banque</th> 
      </tr>
      <tr class="text-dark">
        <th  class="text-center">Date</th>
        <th  class="text-center">libelle</th> 
        <th  class="text-center">Débit</th>    
        <th  class="text-center">Crédit</th>
        <th  class="text-center">Date</th>
        <th  class="text-center">libelle</th> 
        <th  class="text-center">Débit</th> 
        <th  class="text-center">Crédit</th>
        <th>OPTIONS</th>
      </tr>
    </thead>
   
      <tbody id="tbody">  
      <?php foreach($Data as $value):?>
        <tr >
          <td><input style="width:100px;" type="text" id="Date_comptaUBT"    class="text-center" value="<?=$value['Date_compta']?>"></td>  
          <td><input style="width:100px"  type="text" id="libelle_comptaUBT" class="text-center" value="<?=$value['libelle_compta']?>"></td>   
          <td><input style="width:100px"  type="text" id="Debit_comptaUBT"   class="text-center" value="<?=$value['Debit_compta']?>"></td>  
          <td><input style="width:100px"  type="text" id="credi_comptaUBT"   class="text-center" value="<?=$value['credi_compta']?>"></td> 
          <td><input style="width:100px"  type="text" id="Date_banqueUBT"    class="text-center" value="<?=$value['Date_banque']?>"></td> 
          <td><input style="width:100px"  type="text" id="libelle_banqueUBT" class="text-center" value="<?=$value['libelle_banque']?>"></td>
          <td><input style="width:100px"  type="text" id="Debit_banqueUBT"   class="text-center" value="<?=$value['Debit_banque']?>"></td>
          <td><input style="width:100px"  type="text" id="credi_banqueUBT"   class="text-center" value="<?=$value['credi_banque']?>"></td> 
          <td class="text-center">    
          <a onclick="fill(<?= $value['id_bancaire'] ?>,'<?= $value['Date_compta'] ?>','<?= $value['libelle_compta'] ?>','<?= $value['Debit_compta'] ?>','<?= $value['credi_compta'] ?>','<?= $value['Date_banque'] ?>','<?= $value['libelle_banque'] ?>','<?= $value['Debit_banque'] ?>','<?= $value['credi_banque'] ?>')"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer">
              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
            </svg>
          </a>
          <a onclick="Delete(<?= $value['id_bancaire']?>)"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill ms-3" viewBox="0 0 16 16" style="cursor:pointer">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
          </a>
          </td>  
        </tr>
      <?php endforeach;?> 
      </tbody> 
    <tfoot>   
      <tr>
        <th colspan="2" class="text-center bg-warning">Solde</th>
        <th><input type="text" id="SumCompta" class="text-center w-100" value="<?=$SdatCompt[0]['Sumcompta']?>"></th>
        <th><input type="text" id="SumCompta" class="text-center w-100" value="<?=$SumC_compta[0]['SumC_compta']?>"></th>
        <th colspan="2" class="text-center  bg-info">Solde</th>
        <th><input type="text" id="Sumbanque" class="text-center w-100" value="<?=$Sdatbanque[0]['Sumbanque']?>"></th>
        <th><input type="text" id="Sumbanque" class="text-center w-100" value="<?=$SumC_banque[0]['SumC_banque']?>"></th>
      </tr>
      <tr>
        <td style="border:none"></td> 
        <td style="border:none"></td> 
        <th class="text-center bg-warning" colspan="2"><input type="text" class="bg-warning text-center" id="result_compta" value="<?=$result_cpmpta[0]['result_compta']?>"></th>
        <td style="border:none"></td> 
        <td style="border:none"></td>
        <th class="text-center  bg-info" colspan="2"><input type="text"  class="bg-info text-center "  id="result_banque"    value="<?=$result_banque[0]['SumC_banque']?>"></th>  
      </tr>
    </tfoot>      
</table> 
<script>
  $(document).ready(function(){
    var input=$('#result_banque').val();
    if(input<0){
      $('#result_banque').css("color","red");
      $('#result_banque').css("font-weight","bolder");  
    }else{
      $('#result_banque').css("color","green"); 
      $('#result_banque').css("font-weight","bolder"); 
    }
    var inpucompt=$('#result_compta').val();
    if(inpucompt<0){
      $('#result_compta').css("color","red"); 
      $('#result_compta').css("font-weight","bolder"); 
    }else{
      $('#result_compta').css("color","green"); 
      $('#result_compta').css("font-weight","bolder"); 
    }

  });    
  $('.compta_date').keyup(function(){
    var valu=$('.compta_date').val()
    console.log(valu);
  }); 
</script>