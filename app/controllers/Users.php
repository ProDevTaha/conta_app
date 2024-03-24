<?php   
class Users extends Controller{ 
    private $data; 
    public function __construct(){
        $this->modelUser=$this->model('User');  
    }      
    
    public function __get($proprety){ 
        echo 'this proprety   '.$proprety. ' is not existe';  
    }                                              
    public function __call($propert,$test){  
        echo 'this function not existe'; 
        echo $test;
    }   

    public function register(){  
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST['username']) && !empty($_POST['password'])  && !empty($_POST['email']) ){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
    
                $data=[
                    'username'=>$_POST['username'],   
                    'email'=>$_POST['email'],
                    'password'=>$_POST['password'], 
                    'verify'=>$_POST['verify']  
                ]; 
    
                $data['password']=password_hash($data['password'], PASSWORD_DEFAULT); 
                if($this->modelUser->findUserByEmail($data['email'])){  
                    echo '<div class=" w-25 text-center m-auto mt-3 alert alert-danger" role="alert">
                    email or password is existe déja  
                    </div>'; 
                    $this->view('Users/register');       
                }else if($this->modelUser->register($data)){
                    redirect('users/login');    
                } 
            }else{
                echo '<div class=" w-25 text-center m-auto mt-3 alert alert-danger" role="alert">
                remplir tout les chemps 
                </div>'; 
                $this->view('Users/register');
            }  
        }else{        
            $this->view('Users/register');
        }        
    } 

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           // process form 
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [  
               'username' => $_POST['username'], 
               'password' => $_POST['password'],   
            ];      
            
            //make sure error are empty 
            if(!empty($data['username']) && !empty($data['password'])){ 
                $loggedInUser = $this->modelUser->login($data['username'],$data['password']);
                if($loggedInUser){ 
                    //create session  
                    $this->createUserSession($loggedInUser);  
                }else{ 
                    echo '<div class=" w-25 text-center m-auto mt-4 alert alert-danger" role="alert">
                        Ce compte nexiste pas
                        </div>'; 
                    $this->view('users/login', $data);
                  
                }
            }else{
                echo '<div class=" w-25 text-center m-auto mt-4 alert alert-danger" role="alert">
                remplir tout les chemps 
                </div>';   
                $this->view('users/login', $data);   
            }     

        }else{  
            $this->view('users/login');          
        } 
    } 
    //setting user section variable 
    public function createUserSession($user){ 
        $_SESSION['user_id'] = $user['id_user']; 
        $_SESSION['username'] = $user['username']; 
        $_SESSION['email'] = $user['email']; 
        redirect('dashboard/index');    
    } 

    //logout and destroy user session   
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        session_destroy();
        redirect('users/login');   
    }  

}

    
   



