<div class="modal fade" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
       <div class="modal-dialog">  
            <div class="modal-content">
                <div class="modal-header" >
                  <h5 class="modal-title" id="exampleModalLabel">enregistré acha</h5> 
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
                  <div class="modal-body">  
                    <input type="hidden"         name="id_Achat"   id="id_Achat"> 
                    <input type="text" placeholder="date"          id="date"      autocomplete='off'       name="date"        class="w-100 form-control mt-2"  required>
                    <input type="text" placeholder="Designation"   id="Designation"  list='dropDesignation'    name="Designation" class="w-100 form-control mt-2"  required> 
                    <div class="input-group mt-2 w-100"> 
                     <select name="Type" class="form-select"       id="Type"             aria-label="Default select example">
                        <option selected>TYPE</option>
                        <option value="U">U</option>
                        <option value="ML">ML</option>
                        <option value="ENS">ENS</option> 
                     </select>  
                    </div>  
                    <input type="text" placeholder="FRS"            id="frs"         list='dropfrs'     name="Frs"           class="w-100 form-control mt-2" required> 
                    <input type="text" placeholder="Quantité"       id="Quantité"         name="Quantité"      class="w-100 form-control mt-2" required>
                    <input type="text" placeholder="prix Unitaire"  id="prix_Unitaire"    name="prix_Unitaire" class="w-100 form-control mt-2" required> 
                    <input type="text" placeholder=" Mantant HT"    id="Mantant_HT"       name="Mantant_HT"    class="w-100 form-control mt-2" required>
                    <input type="text" placeholder="Chantier"       id="Chantier"         name="Chantier"      class="w-100 form-control mt-2  chantier" required> 
                  </div>     
                <div class="modal-footer" id="modal_footer">   
                    <input   type="btn" value="SAVE" id='addAchat' class="btn btn-primary w-100" data-bs-dismiss="modal">
                </div> 
        </div>     
</div>  

