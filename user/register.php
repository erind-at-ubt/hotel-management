<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register at Hotel Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="styles\style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles\register.css">
      </head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="form-container col-md-5 rounded d-flex flex-column">
                <h4 class="text-center">Register Here</h4>
                <hr>
                <form action="" class="form d-flex flex-column align-items-center" >
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-user p-2"></i>
                        <input type="text" placeholder="Your Name" class="form-input">
                    </div>
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Your Email" class="form-input">
                    </div>
                    <div class="input-group p-3 d-flex flex-row align-items-center justify-content-center">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Your Password" class="form-input">
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
                    <input type="submit" value="Register Now" class="w-100 submit-button">
                    <p class="w-100 p-3 text-start">Already have an account? <a href="/main/login.html">Log in here</a></p>
                </div>
                   
                    
                    
                    
                </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/19e928f6d9.js" crossorigin="anonymous"></script>
    <script src="/scripts/script.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</body>
</html>