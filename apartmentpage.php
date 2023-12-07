<?php include './shared/config.php';
 include './shared/navuser.php';
 

$id=$_GET["id"];
//$select="SELECT * FROM `flats`  WHERE id =$id ";
$select="SELECT * FROM `images` left join `flats` on images.flatid = flats.id where flatid = $id";
$s=mysqli_query ($conn ,$select);
$data = mysqli_fetch_assoc($s);


?>



<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@1,300&family=Nunito:wght@300;400&family=Old+Standard+TT:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <title>Kemet NFR</title>
    <!-- bootstrap cdn -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&Sdisplay=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- style.css -->

    <link rel="stylesheet" href="nav.css">
    
    </head>
    <body>
    		
<?php

$id=$_GET["id"];
$select="SELECT * FROM `images` left join `flats` on images.flatid = flats.id where flatid = $id";
$s=mysqli_query ($conn ,$select);
$data = mysqli_fetch_assoc($s);


?>

        
        <!-- el content -->
          <div class="container-fluid">
          <?php foreach ($s as $data){ ?> 
     

            <div class="row one">
         <div class="col-md-4">
        <img class="image1" src="<?php echo $data ['image1'] ;?>">
                </div>
<div class="col-md-4">
    <img class="image1" src="<?php echo $data ['image2'] ;?>">
                </div>
                <div class="col-md-4">
      <img class="image1" src="<?php echo $data ['image3'] ;?>">
                </div>
            </div>
            <div class="row two">
  
     <div class="col-md-4">
         <img class="image1" src="<?php echo $data ['image4'] ;?>">
                </div>
                <div class="col-md-4">
      <img class="image1" src="<?php echo $data ['image5'] ;?>">
                </div>
                <div class="col-md-4">
      <img class="image1" src="<?php echo $data ['image6'] ;?>">
                </div>
                  
            </div>
       
      
             <div class="row">
                <div class="col-md-6">
         <h1 class="location">Location</h1>
        <p>
          <iframe src="<?php echo $data ["location"] ;?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </p>
                 </div>
                <div class="col-md-6">
                <p class="des">
                    <h1>Description</h1>
 <p class="det">
 <?php echo $data ["desc"] ; ?>
 <br>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="far fa-star"></i>
                    </p>
                    
                    <a href="book.php">
                        <button class="buttoonn">
                        Book now
                    </button>
                </a>
            </div>
            </div>
            <?php } ?>

            </div>
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