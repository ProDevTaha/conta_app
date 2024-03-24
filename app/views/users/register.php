<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="bg-dark">
   
        <form action="<?php echo URLROOT?>/Users/register" method="POST" class="needs-validation" novalidate> 
           <div class="mt-5">
                <div class="text-center m-auto " style="width:300px">  
                    <img src="<?= URLROOT?>/img/Logo Gérant.png" alt="image" class="w-50">
                    <h5 class="mt-3 text-light ms-1" style="border-left:solid 10px blue;">Inscrivez-vous pour gérant</h5>   
                </div>   
                <div class="bg-light m-auto p-4 rounded" style="width:500px"> 
                    <div class="mb-2">   
                       <label for="username">Username*</label>  
                       <input type="text" id="usernale" name="username" placeholder="Username"  class="w-100 form-control" required>
                    </div>
                    <div class="mb-2"> 
                       <label for="email">Email*</label>   
                       <input type="email" id="email"   name="email" placeholder="Email"     class="w-100 form-control" required> 
                     </div>
                    <div class="mb-2">
                       <label for="Password">Password*</label>   
                       <input type="password"   id="Password" name="password"  placeholder="Pasword" class="w-100 form-control"  required> 
                    </div>
                    <div class="text-center"> 
                       <button  type="submit" class="btn btn-primary mt-4">Register</button>   
                       <a href="<?php echo URLROOT ?>/users/login" class="btn btn-light mt-4" role='button'>connexion</a>
                    </div> 
                    <a href="#"><p class="text-center mt-2">mot de passe oublié</p></a>    
                </div>
           </div>
        </form>
        <script src="<?= URLROOT?>/js/ValidLogin.js"></script>
</body>
</html>  