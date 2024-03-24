<div class="mydiv col-2 aside bg-dark text-center" style="height:100vh;"> 
    <div class="m-auto mt-3" style="height:70px;"> 
       <a href="<?=URLROOT?>">
            <img src="<?= URLROOT ?>/img/Logo Gérant white.png" class="h-100">
       </a>
    </div> 
    <div id="myDIV">
    <a href="<?php echo URLROOT ?>/dashboard" > 
        <button class="w-75  p-2 btn btn-dark mt-4 <?php if( basename($_SERVER['REQUEST_URI'])=="dashboard"){ echo "asidebar_active";}?>" data-bs-toggle="tooltip" data-bs-placement="right" title="dashboard"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill mb-1" viewBox="0 0 16 16">
              <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
            </svg>
            dashboard
        </button> 
    </a>  
    <a href="<?php echo URLROOT ?>/Achat">
        <button class="w-75 mt-4 p-2 btn btn-dark <?php if( basename($_SERVER['REQUEST_URI'])=="Achat"){ echo "asidebar_active";}?>" data-bs-toggle="tooltip" data-bs-placement="right" title="les achats">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill mb-1" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
            </svg>
            les achats 
        </button>
    </a>  
    <a href="<?php echo URLROOT ?>/vents">
        <button class="w-75 mt-4 p-2 btn btn-dark <?php if( basename($_SERVER['REQUEST_URI'])=="vents"){ echo "asidebar_active";}?>" data-bs-toggle="tooltip" data-bs-placement="right" title="les ventes"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack mb-1" viewBox="0 0 16 16">
              <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
              <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
            </svg>
            les ventes
        </button>
    </a>    
    <a href="<?=URLROOT?>/Bancaire">  
        <button class="w-75 mt-4 p-2 btn btn-dark <?php if( basename($_SERVER['REQUEST_URI'])=="Bancaire"){ echo "asidebar_active";}?>" data-bs-toggle="tooltip" data-bs-placement="right" title="bancaire">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2 mb-1" viewBox="0 0 16 16">
              <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
            </svg>
            bancaire 
        </button> 
    </a> 
   <a href="<?=URLROOT?>/personnel">
        <button class="w-75 mt-4 p-2 btn btn-dark <?php if( basename($_SERVER['REQUEST_URI'])=="personnel"){ echo "asidebar_active";}?>" data-bs-toggle="tooltip" data-bs-placement="right" title="personnel">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
              <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg>  
            personnel
        </button>  
   </a>
    <a href="<?=URLROOT?>/TVA">
        <button class="w-75 mt-4 p-2 btn btn-dark <?php if( basename($_SERVER['REQUEST_URI'])=="TVA"){ echo "asidebar_active";}?>" data-bs-toggle="tooltip" data-bs-placement="right" title="TVA">    
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pip-fill mb-1" viewBox="0 0 16 16" >
              <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5z"/>
            </svg>
            TVA
        </button>  
    </a>
    <a href="<?php echo URLROOT ?>/users/logout">  
        <button class="w-75 mt-4 p-2  btn btn-dark " data-bs-toggle="tooltip" data-bs-placement="right" title="déconnexion"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left mb-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>   
            déconnexion
        </button>  
    </a>    
    
    </div>
</div>   
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script> 

 
