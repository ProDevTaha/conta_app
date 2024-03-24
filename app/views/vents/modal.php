<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un vent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class=" row">
         <div class="col-8">
            <input type="hidden" id='id_vent'>  
            <input type="text"  class="form-control mt-3"  id='client'        placeholder='client'>  
            <input type="text"  class="form-control mt-3"  id='date'          placeholder='date 2022/07/01' autocomplete="off">  
            <input type="text"  class="form-control mt-3"  id="date_échéance" placeholder="date d'échéance" autocomplete="off">   
            <input type="text"  class="form-control mt-3"  id="prix_unitaire" placeholder="prix unitaire"> 
            <input type="text"  class="form-control mt-3"  id='quantité'      placeholder='quantité'>      
            <input type="text"  class="form-control mt-3"  id="mentant_HT"    placeholder="mentant HT">   
         </div>
         <div class="col-4"> 
            <select id='situation' class="form-select mt-3" aria-label="Default select example">
              <option selected>Situation</option> 
              <option value="valide" >valide</option>
              <option value="payé">payé</option>
              <option value="en cours">en cours</option> 
            </select>   
            <select id='modde_reg' class="form-select mt-3" aria-label="Default select example">
              <option selected>modde reg</option> 
              <option value="cheque">cheque</option>
              <option value="versement">versement</option>
              <option value="espece">espece</option> 
            </select>
            <select  id="Type"    class="form-select mt-3"  aria-label="Default select example"> 
              <option selected>TYPE</option>
              <option value="U">U</option>
              <option value="ML">ML</option>
              <option value="ENS">ENS</option> 
            </select>    
         </div>
       </div>
      </div>
      <div class="modal-footer">
        <button id="save" type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Save</button> 
      </div>
    </div>
  </div>  
</div>
