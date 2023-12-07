<?php include './shared/navuser.php';
 ?> 

<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8" />
  <title>Kemet NFR</title>
  <!-- bootstrap cdn -->

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- font awesome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- style.css -->
  <link rel="stylesheet" type="text/css" href="activities.css" />

</head>


<?php include './shared/config.php'; ?>


<body>
<?php
         $select = "SELECT * FROM activities";
         $s = mysqli_query ($conn,$select);
         ?>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
   <?php foreach($s as $data) {?>
    <div class="col">
      <div class="col h-100 ">
        <div class="card h-100">
          <img src="<?php echo $data['image']; ?>" class="card-img-top ss" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['name']; ?></h5>
            <p class="card-text"> 
            <?php echo $data['description']; ?>
              <br><br>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </p>

          </div>
        </div>
      </div>
     </div>
     <?php } ?>

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