<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profile.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title>Dachboard | gérant</title> 
</head>
<body> 
    <div class="row w-100">   
        <?php require APPROOT . '/views/inc/aside.php'; ?>    
        <div class="col-10 ">  
            <div class="row d-flex  flex-wrap justify-content-center mt-4 gap-5 h-25">
               <div class="Achats col-md-2 col-sm-3 col-5 d-flex flex-column justify-content-between bg-danger rounded">
                   <h2>Les Achats</h2>
                   <div class="d-flex">
                   <h4 class="ms-auto"><?php echo $Data['nombreAchat']; ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-basket3-fill" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>
                    </svg>

                   </div>
               </div>
               <div class="col-md-2 col-sm-3 col-5 d-flex flex-column justify-content-between  bg-success rounded shadow-sm" >
                   <h2>Les Vents</h2>
                   <div class="d-flex">
                   <h4 class="ms-auto"><?php echo $Data['nombreVent']; ?></h3>
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                   </svg>
                   </div>
               </div>
               <div class="col-md-2 col-sm-3 col-5 d-flex flex-column justify-content-between bg-primary rounded">
                   <h2>Bancaire</h2>
                   <div class="d-flex">
                   <h4 class="ms-auto"><?php echo $Data['nombrebanque']; ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                      <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                    </svg>
                   </div>
               </div>
               <div class="col-md-2 col-sm-3 col-5 d-flex flex-column justify-content-between bg-warning rounded">
                   <h2>Perssones</h2>
                   <div class="d-flex">
                   <h4 class="ms-auto"><?php echo $Data['nombrepersone']; ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                   </div>
               </div>
            </div>
            <div class="d-flex justify-content-between row m-auto mt-4 p-5 rounded" style="height:400px">   
                <canvas id="myChart" style="width:100%;max-width:500px" ></canvas>
                <canvas id="myCharts" style="width:100%;max-width:400px"></canvas>
            </div> 
        </div> 
    </div> 
    <?php 
      foreach($Data['TVACharge'] as $value ){
        $surcharge=$value['total_HTSurCharge']*(0.2);
      }
      foreach($Data['TVAvente'] as $val ){
        $survenete=$val['total_HTSurVent']*(0.2); 
      }
    ?>   
    <input type="hidden" id="resultTva" value="<?=($survenete)-($surcharge)?>"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <input type="hidden" id="Achat"    value="<?= $Data['nombreAchat']?>">
    <input type="hidden" id="Vents"    value="<?= $Data['nombreVent']?>">
    <input type="hidden" id="Bancaire" value="<?=$Data['nombrebanque']?>">
    <input type="hidden" id="TVA" value="<?=$Data['nombrepersone']?>">   
    <script src="<?=URLROOT?>/js/shartJs.js"></script>
    <script>
      

    </script>
</body>
</html> 