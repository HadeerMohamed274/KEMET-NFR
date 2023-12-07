<?php

 include './shared/config.php' ;
include './shared/navuser.php';

$select="SELECT * FROM `flats` WHERE approved = 1";
$s=mysqli_query ($conn , $select );

if(isset($_POST['send'])){

    $place=$_POST['place'];
    $unit=$_POST['type'];
    $price=$_POST['price'];
    $ss=" SELECT * FROM `flats` WHERE place = '$place' AND unit_type='$unit' AND price > '$price' AND approved = 1 ";
    $s=mysqli_query ($conn , $ss );
   // header("location:/final_project/apartmentview.php");
}


?>



<!DOCTYPE HTML>
<html>
<haed>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="apartmentsview.css">
   
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">-->
    <title>Kemet NFR</title>
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <title>Kemet NFR</title>
    <!-- bootstrap cdn -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">


    
    
    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- style.css -->
    
</haed>

<body>


<div class="sidebar">
        <div class="sidecontent">
            <!------------------------place------------------------>
            <form method="POST" >
            <div class="price">
  
                    <label for="prices">
                        <h5>place: </h5>
                    </label>
                    <select class="dropbtn" name="place" id="cars">
                        <option value="" disabled="disabled" selected="selected">
                            Select Option
                        </option>
                        <option value="cairo">Cairo</option>
                        <option value="giza">Giza</option>
                    </select>
    
            </div>
            <!------------------------type of place------------------>
            <hr>
            <div class="type">
    
                    <label for="prices">
                        <h5>Type Of Place: </h5>
                    </label>
                    <select class="dropbtn" name="type" id="cars">
                        <option value="" disabled="disabled" selected="selected">
                            Select Option
                        </option>
                        <option value="compound">Compound</option>
                        <option value="Apartment">Apartment</option>
                    </select>

            </div>
            <hr>

            <!-------------------------price-------------------------->
            <div class="price">
 
                    <label for="prices">
                        <h5>Price : </h5>
                    </label>
                    <select class="dropbtn" name="price" id="cars">
                   
                        <option value="" disabled="disabled" selected="selected">
                            Select Option
                        </option>
                        <option value="500"> >500 EGP</option>
                        <option value="1000">>1000 EGP</option>
                        <option value="1500">>1500 EGP</option>
                        <option value="2000"> more than 2000 EGP </option>
                    </select>
  
                
            </div>
            <hr>
            <!------------------------save button------------------------>
            <div>
                <button type="submit"  name="send" class="save">Save changes</button>
            </div>

            </form>

        </div>
    </div>
    <!------------------------cards------------------------>

    <div class="container appts">
       <div class="row">
       <?php foreach($s as $select) { ?> 

    <div class="col-md-6">
                <article>
                    <img src="<?php echo $select['image']; ?>" height="300px" width="500px">
                    <div class="text">
                        <h3><?php echo $select['title'] ;?></h3>
                        <p>
                            <i>Address:</i> <?php echo $select['address'] ;?><br>
                            <i>Rooms number:</i> <?php echo $select['roomnum'] ;?>.<br>
                            <i>Rent Price:</i> <b><?php echo $select['price'] ;?>€</b> / day.
                        </p>
                      
                        <a href="/final_project/book.php?id=<?php echo $select["id"]; ?>" class="book">
                            <i class="fas fa-book pr-2"></i>Book Now
                        </a>
                        <a href="/final_project/apartmentpage.php?id=<?php echo $select["id"]; ?>" class="details">
                            <i class="fas fa-info-circle pr-2"></i>Details
                        </a>
                    </div>
                </article>
</div>
<?php } ?> 
</div>
</div>



    <script>
        $( ".change" ).on("click", function() {
			
            if( $( "body" ).hasClass( "dark" )) {
                $( "body" ).removeClass( "dark" );
                $( ".change" ).text( "🌙" );
            } else {
                $( "body" ).addClass( "dark" );
                $( ".change" ).text( "☀️" );
				
            }
        });
    </script>
    
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
           
    
            <div class="para">
                <p>©2020 Copyright:kemetNfr.com</p>
            </div>
    
    
    
        </footer>

</body>

</html>