<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <h4 class="modal-title text-center" id="staticBackdropLabel">recherché</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <div>
          <input type="text" name="from_date" id="from_date" autocomplete='off' class="form-control mt-2" placeholder="depuis la date 2022/01/05" /> 
          <input type="text" name="to_date" id="to_date"     autocomplete='off' class="form-control mt-3" placeholder="à la date 2022/02/07" />   
        </div>  
        <textera id='precise'>  
          <select  id="frsR" name="Type" class="form-select mt-3"  aria-label="Default select example">  
               
          </select>         
          <select  id="ChantierR" name="Type" class="form-select mt-3"  aria-label="Default select example" > 
                 
          </select>     
        </textera>  
        <div class="text-center" id="sélectionner">  
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16" style='cursor:pointer' >
            <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
          </svg>
        </div>
      <div class="modal-footer">
        <button type="button" name="filter" class="btn btn-primary w-100" id="filterDate" data-bs-dismiss="modal">recherché</button> 
      </div>
    </div>
  </div> 
</div> 