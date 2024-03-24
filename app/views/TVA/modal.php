<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajouter TVA</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
       <div class=" row">
         <div class="col-4"> 
            <input type="hidden" id='id_TVA'>      
            <input type="text"  class="form-control mt-3"  id='ORDER'         placeholder='ORDER'>  
            <input type="text"  class="form-control mt-3"  id='FACT_NUM'      placeholder='FACT_NUM' >  
            <input type="text"  class="form-control mt-3"  id="DESIGNATION"   placeholder="DESIGNATION">   
            <input type="text"  class="form-control mt-3"  id="M_HT"          placeholder="M_HT">   
         </div>
         <div class="col-4"> 
            <input type="text"  class="form-control mt-3"  id='TVA'           placeholder='TVA'>   
            <input type="text"  class="form-control mt-3"  id='M_TTC'         placeholder='M_TTC'>  
            <input type="text"  class="form-control mt-3"  id="IF"            placeholder="IF">    
            <input type="text"  class="form-control mt-3"  id="ICE_FRS"       placeholder="ICE_FRS">
            <input type="text"  class="form-control mt-3"  id="LIB_FRSS"      placeholder="LIB_FRSS"> 
         </div>
         <div class="col-4"> 
            <input type="text"  class="form-control mt-3"  id='TAUX'          placeholder='TAUX'>  
            <input type="text"  class="form-control mt-3"  id='ID_PAIE'       placeholder='ID_PAIE' >  
            <input type="text"  class="form-control mt-3"  id="DATE_PAIE"     placeholder="date d'échéance" autocomplete="off">   
            <input type="text"  class="form-control mt-3"  id="DATE_FAC"      placeholder="DATE_FAC"       autocomplete="off">
         </div>
       </div>
      </div>
      <div class="modal-footer">
        <button id="save" type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Save</button> 
      </div>
    </div>
  </div>  
</div>
