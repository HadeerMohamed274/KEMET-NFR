<?php include './shared/navuser.php';
 ?>


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
	<link rel="stylesheet" type="text/css" href="/final_project/supportsys.css" />
	
</head>

<body>


<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "final";
$conn = mysqli_connect($host , $user , $pass , $dbName);
?>



<section class="search"> <!--Search Bar-->

    <h1 class="ques">Have a Question?</h1><br>
    <p class="par"> If you have any question you can ask below or enter what you looking for!</p>

<input class="inp" type="search" placeholder="Search" aria-label="Search">

</section>

<?php
                  
    $ss = " SELECT * FROM `questions` WHERE `approved` = 1 ";
    $s = mysqli_query( $conn , $ss );
?>
<div  class="container-fluid"> 
<div class="row">
 <?php foreach( $s as $data ){ ?>
<div class="col-4" >
<section class="faq" style=" 
        margin-top:50px;
        display: grid;
        width:auto;
        height:500px;
        grid-template-columns: 0.5fr 2fr;
        grid-template-rows:1fr 1fr 1fr;">

    <h2 class="ques1" style="grid-area: ques1;
        margin-left: 10px;            
        margin-top: 10px;"><i class="fas fa-quote-left"></i> <?php echo $data['question']; ?> </h2><br> 
		<p class="ans1" style=" grid-area: ans1;
        font-size: 18px;
        margin-top: 10px;
        margin-left: 10px;">
	  <?php echo $data['answer'] ?>.</p> 

</section>

</div>
<?php } ?>
</div>
</div> 



<?php 
     
 
  

 // getting customer [ id ] =>> to make feedback with his [ id ]
 //$user_id = $_SESSION['userid'];
 if(isset($_POST['send'])){ 
   $question = $_POST['question'];
   $insert = "INSERT INTO `questions` VALUES ( NULL , '$question' , '' , 0 , 1 , 1  )";
  
  $query = mysqli_query( $conn , $insert );
  
  header("location:final_project/admin/listquestions.php");
   
   }
  

?>

<section class="quesf">

<div class="questionn">
<h2 class="toadd"> To Add A Question</h2>	
<div class="part">
<form method="POST" class="col row g-3">


<div class="col-md-6">
<label for="inputEmail4" class="form-label">Email</label>
<input type="email"  class="form-control" id="inputEmail4" placeholder="Your Email goes here..">
</div><br>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">Name</label>
<input type="text" class="form-control" id="inputPassword4" placeholder="Please Enter Your Name..">
</div>


<div class="col-md-6">
<label for="inputCity" class="form-label">Question</label>
<input type="text" name="question" class="form-control" id="inputCity" placeholder="Type your inquiries here.. ">
</div>


<div class="col-12">
<button type="submit" name="send" class="but">Submit</button>
</div>
</form>

</div>
</div>
</div>
</div>

</section>


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