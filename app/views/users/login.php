<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>connexion</title> 

</head>
<body class="bg-dark">
    <form action="<?php echo URLROOT?>/Users/login" method="POST" class="needs-validation" novalidate>  
       <div class="mt-5">
            <div class="text-center m-auto " style="width:220px">  
                <img src="<?= URLROOT?>/img/Logo Gérant.png" alt="image" class="w-50">
                <h5 class="mt-3 text-light ms-1" style="border-left:solid 10px blue;">se connecter à gérant</h5>   
            </div>    
            <div class="contente  m-auto p-4 border-2 bg-light rounded" style="width:500px"> 
                <div> 
                    <label for="username">Username*</label>  
                    <input type="text"    id="username" name="username" placeholder="Username" class="w-100 form-control" required>
                    <span></span>   
                </div> 
                <div class="mt-3">
                    <label for="Password">Password*</label>   
                    <input type="password" id="Password" name="password"  placeholder="Pasword" class="w-100 form-control"  required> 
                    <span></span>    
                </div> 
                <div class="text-center">
                    <button  class="btn btn-primary mt-4" type="submit">connexion</button> 
                    <a href="<?php echo URLROOT ?>/users/register" class="btn btn-light mt-4" role='button'>Register</a> 
                </div> 
                
            </div>  
       </div>
    </form>    
    <script src="<?= URLROOT?>/js/ValidLogin.js"></script> 
</body>
</html>  