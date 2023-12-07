<?php
include './shared/navuser.php';
?>

<?php


include 'C:/xampp/htdocs/final_project/shared/config.php';
$first = ""; 
$last =  "";
$email = "";
$pass = "";
$cpass ="";
$phone = "";
$alt_phone =""; 
$birth = "";
$gender ="";

if (isset($_POST['send'])) {

$first =  $_POST['first_name'];
$last =  $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$phone = $_POST['phone'];
$alt_phone = $_POST['alt_phone'];
$birth = $_POST['birthday'];
$gender = $_POST['gender'];

$checkEmail = "SELECT * FROM `user` where email = '$email' ";
$emailQuery = mysqli_query($conn, $checkEmail);

$emailRows  = mysqli_num_rows($emailQuery);

if($emailRows > 0){
 echo ' <div class="alert alert-warning alert-dismissible fade show alert-danger container-sm col-5 " role="alert" >
 The email address is <strong>already used</strong> before. Please use another email address.
 <button type="button" class="close" aria-label="Close" data-dismiss="alert">
 <span aria-hidden="true">&times;</span>
 </button>
 </div> ';
}else{

if ($pass !== $cpass ) {
   /*here is alert to password confirm error! */
   echo ' <div class="alert alert-warning alert-dismissible fade show alert-danger container-sm col-7" role="alert" >
   <strong>NOT SAME PASSWORD!</strong> You should check in on some of password field below.
   <button type="button" class="close" aria-label="Close" data-dismiss="alert">
<span aria-hidden="true">&times;</span>
</button>
 </div> ';
}else{
    $insert = "INSERT INTO `user` VALUES ( NULL , '$first' , '$last' , '$email','$pass', '$cpass' , '$phone' , '$alt_phone' , '$birth','$gender' )";
    $i = mysqli_query( $conn , $insert );
   
    header("location:login.php");
    
} 
}



}


?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8"/>
        <title>Kemet NFR</title>
        <!-- bootstrap cdn -->
    
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
        <!-- font awesome cdn -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- style.css -->
        <link rel="stylesheet" type="text/css" href="register.css" />
    </head>
    <body>
   

                <div class="df">
         <div class="or">
        <div class="container">
            <div class="title"> <h1>Registration</h1> </div>
            <form method="POST"> 
                <div class="inputs">
                    <div class="input">
                        
                        <span class="sp"> First name</span>
                        <input type="text" name="first_name" placeholder="Enter your first name" required>
                    </div>
                    <div class="input">
                        <span class="sp">Last name</span>
                        <input type="text"  name="last_name" placeholder="Enter your last name" required>
                    </div>
                    <div class="input">
                        <span class="sp">Email</span>
                        <input type="text"  name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input">
                        <span class="sp">Password</span>
                        <input type="text"  name="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="input">
                        <span class="sp">Confirm password</span>
                        <input type="text"   name="cpass" placeholder="Confirm your password" required>
                    </div>
                    <div class="input">
                        <span class="sp">Phone number </span>
                        <input type="text"  name="phone" placeholder="Enter your number" required>
                    </div>
                    <div class="input">
                        <span class="sp">Alternative number</span>
                        <input type="text"  name="alt_phone" placeholder="Enter your alternative number" required>
                    </div>
                    
                    <div class="input"><form action="/action_page.php">
  <label class="birth" for="birthday">
      
    <span class="sp">Birthday</span></label>
  <input type="date"  name="birthday" id="birthday" name="birthday">
  

    </div>                
                       
        
</div>
                 <div class="neewo">
                            <input class="mf"  name="gender"type='radio' value="male" id='male' checked='checked'>
                            <label class="mf"  for='male'>Male</label>
                            <input class="mf" type='radio' value="female" id='female'  name="gender">
                            <label class="mf"  for='female'>Female</label>
                        </div> <br>
      
                

                        <div class="center"> 
                            
                            <div class="link">
                                   <button type="submit" name="send" class="button1"> Sign Up </button>
                               </div>
                                      
                                   </div>
                                   </form>
                       
                           <div class="link">
                               <span class="sp">Already have an account? </span>
       
                                <a href="login.php">
Log In.                               </a>
                               </div>
                       </div>
            
            </form>
      
        
        
        </div>
    </div>
        
        </div>
        <section class="fadii">

        </section>
        <section>
    
    
        <footer class="row footer">
    
            <div class="containerr">
    
                <div class="cont">
    
                    <h3>Contact Us</h3>
    
                    <p> <i class="fa fa-whatsapp"></i>:+20 1158656096 </p>
                    <p> <i class="fa fa-phone"></i>:01158656096</p>
                    <p><i class="fa fa-envelope"></i>:kemet.nfr22@gmail.com</p>
    
                </div>
    
    
    
    
    
                <div class="social">
    
                    <h3> Social Media</h3>
    
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button">
                        <i class="fa fa-facebook-f"></i>
                    </a>
    
    
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button">
                        <i class="fa fa-twitter"></i>
                    </a>
    
    
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button">
                        <i class="fa fa-google"></i>
                    </a>
    
    
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button">
                        <i class="fa fa-instagram"></i>
                    </a>
    
    
                </div>
    
    
                <div class="about">
    
                    <h3 class="abt"> About Us</h3>
                    <p class="us">We are an online travel agency which provide hospitality services was founded in 2021 and
                        aim to introduce all sides of Egypt to the world.</p>
    
                </div>
    
            </div>
            <hr>
    
            <div class="para">
                <p>©2020 Copyright:kemetNfr.com</p>
            </div>
    
    
    
        </footer>
        </section>

    </body>


</html>