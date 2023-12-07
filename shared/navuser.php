<?php
session_start();

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('location:/final_project/login.php');
}




?> 

<!--<h1 class="text-center my-5">Search Results</h1>

<div class="container">
    <div class="displayedBooks row m-auto">
    <?php foreach($selectQuery as $selected){ ?>
    <div class="bookImage mx-auto mt-5">
            <a href="/team2/courses/coursepage.php?id=<?php echo $selected["id"]; ?>">
            <img style="width:250px; height: 300px;"src="upload/<?php echo $selected["image"];?>" alt=""></a>
            <p class="text-center bookInfo">Name: <?php echo $selected["name"] ?></p>
            <p class="text-center bookInfo">Price: <?php echo $selected["price"]; ?> L.E</p>
    </div>
    <?php } ?>
    </div>
    <?php if($numRows < 1){ ?>
        <div><h1 class="text-center outOfStock">No search reuslts found.</h1></div>
    <?php } ?>
</div>-->





<!DOCTYPE html>
<html lang="en">
<head>

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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!--Start Of Nav Bar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light transp">
	<div class="container-fluid">

	<a class="navbar-brand" href="#">  <img src="logo4.jpeg" class="logo">  </a>

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse ymeen" id="navbarSupportedContent">

		<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">

<li class="nav-item aa">
	<a class="nav-link active" aria-current="page" href="/final_project/finalhome.php">Home</a>
</li>

<li class="nav-item aa">
	<a class="nav-link" href="about.php">About</a>
</li>

<li class="nav-item aa">
	<a class="nav-link" href="apartmentview.php">Apartments</a>
</li>

<li class="nav-item aa">
	<a class="nav-link" href="activities.php">Activities</a>
</li>

<li class="nav-item aa">
	<a class="nav-link" href="supportsys.php">Support</a>
</li>

<?php if(isset($_SESSION['useremail'])): ?>
          <form method='POST' action="">
      <li class="nav-item">
	      <button class="nav-link" type="submit" name="logout">Logout</a>
      </li>
      </form>

          <?php else: ?>

      <li class="nav-item">
	      <a class="nav-link" href="login.php">Login</a>
      </li>
            <?php endif; ?>
     
		

		<!-- DARK MODE-->    
<div class="mode">
                    
        <span class="change">🌙</span>
    </div>
									
		</ul>
							

					
</div>
</div>

</nav>

<!--End Of Nav Bar-->


</body>
</html>

