<?php include '../includes/header.php';
      include 'usermanagement.php';  

      if(isset($_POST['submit'])){

        $user = new User();
        $user->addUser(); 
      }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register at Hotel Management System</title>
        <style>
                                            .form-container{
                                    background-color: white;
                                    padding: 50px 20px !important;
                                    box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
                                }

                                .input-group{
                                    color: #495057;
                                    width: 100%;
                                    
                                }

                                .input-group i{
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    font-size: 14px;
                                    border-radius: 4px;
                                    border: 0.5px solid #d6d6d6;
                                    background-color: #f0f0f2;
                                    width: 10%;
                                    height: 36px;
                                }

                                .form-input{
                                    width: 90%;
                                    height: 36px;
                                    outline: none;
                                    border-radius: 4px;
                                    border: 0.5px solid #d6d6d6;
                                    padding-left: 8px;
                                    color: #495057;
                                    font-size: 15px;

                                }

                                .form-input::placeholder{
                                    font-size: 14px;
                                    color: #d6d6d6;
                                }

                                .chk-agreement{
                                    /* width: 336px; */
                                    
                                    
                                }

                                .submit-button{
                                    /* width: 336px; */
                                    height: 36px;
                                    background-color: #24af4b;
                                    outline: none;
                                    border: none;
                                    border-radius: 4px;
                                }

                                #agree-terms:checked{
                                    color: red;
                                }
        </style>
      </head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="form-container col-md-5 rounded d-flex flex-column">
                <h4 class="text-center">Register Here</h4>
                <hr>
                <form action="" method="POST" class="form d-flex flex-column align-items-center" >
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-user p-2"></i>
                        <input type="text" name="username" placeholder="Your Name" class="form-input">
                    </div>
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Your Email" class="form-input">
                    </div>
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="userpassword" placeholder="Your Password" class="form-input">
                    </div>
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Confirm Your Password" class="form-input">
                    </div>
                   
                   <div class="chk-agreement d-flex p-3 w-100">
                    <input type="checkbox" name="agree-terms" id="agree-terms" style="width: 16px;cursor: pointer; border-radius: 4px;">
                    <label for="agree-terms" style="margin-left: 12px; " class="w-100" >I agree with the Terms & Conditions</label>
                   </div>
                   <div class="input-group p-3 d-flex flex-column">
                    <input type="submit" name="submit" value="Register Now" class="w-100 submit-button">
                    <p class="w-100 p-3 text-start">Already have an account? <a href="/main/login.html">Log in here</a></p>
                </div>
                   
                    
                    
                    
                </form>
        </div>
    </div>
</body>
</html>