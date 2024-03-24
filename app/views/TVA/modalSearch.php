<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search TVA</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">   
        <div class="modal-body"> 
          <input type="text"  id="from_date" autocomplete='off' class="form-control mt-2" placeholder="depuis la date 2022/01/05" /> 
          <input type="text"  id="to_date"   autocomplete='off' class="form-control mt-3" placeholder="à la date 2022/02/07" />   
          <select  id="selectTva" class="form-control mt-3"> 
            <option Selected>select TVA</option> 
            <option value="0.07">7%</option>
            <option value="0.1">10%</option>
            <option value="0.2">20%</option>   
          </select>
        </div>
      <div class="modal-footer">
        <button type="button" name="filter" class="btn btn-primary w-100" id="filterDate" data-bs-dismiss="modal">recherché</button> 
      </div>
    </div>
  </div>
</div>