<?php

class userController{
                public $adminModel;
                public function __construct(){
                                $this->adminModel = new admin;
                }
                public function login($email,$password){
                   $adminInfo = $this->adminModel->login($email,$password);
                  
                   if($adminInfo){
                    $_SESSION['admin_id'] = $adminInfo['id_admin'];
                    header('location:dashboard');
                   }
                   else{
                    header('location:login');

                   }
                }
               
                public function logout(){
                    session_destroy();
                    header('location:login');
                }
        
               
}
?>
