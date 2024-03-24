<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">modifier</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <input  type="hidden" id="bancaire"       class="text-center form-control mt-2" placeholder="bancaire"      > 
              <input  type="text"   id="Date_compta"    class="text-center form-control mt-2" placeholder="Date compta"   > 
              <input  type="text"   id="libelle_compta" class="text-center form-control mt-2" placeholder="libelle compta">   
              <input  type="text"   id="Debit_compta"   class="text-center form-control mt-2" placeholder="Debit compta"  >  
              <input  type="text"   id="credi_compta"   class="text-center form-control mt-2" placeholder="credi compta"  >  
            </div>
            <div class="col-6">
              <input  type="text" id="Date_banque"    class="text-center form-control mt-2" placeholder="Date banque"   > 
              <input  type="text" id="libelle_banque" class="text-center form-control mt-2" placeholder="libelle banque">
              <input  type="text" id="Debit_banque"   class="text-center form-control mt-2" placeholder="Debit banque"  > 
              <input  type="text" id="credi_banque"   class="text-center form-control mt-2" placeholder="credi banque"  > 
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="savebanque" class="btn btn-primary w-100" data-bs-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>