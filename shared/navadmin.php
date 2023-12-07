<?php
session_start();
include 'C:/xampp/htdocs/final_project/shared/link.php';

if(isset($_POST['logout'])){
  session_unset();
  session_destroy();
  header('location:/final_project/login.php');
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/final_project/admin/homeadmin.php">Admin Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Apartments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="color:black !important; " class="dropdown-item" href="/final_project/admin/flats_admin.php">Add Apartments</a>
          <a style="color:black !important; " class="dropdown-item" href="/final_project/admin/listflats_admin.php">List Apartments</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Activities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="color:black !important; " class="dropdown-item" href="/final_project/admin/addactivity.php">Add Activities</a>
          <a style="color:black !important; " class="dropdown-item" href="/final_project/admin/listactivity.php">List Activities</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Questions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a style="color:black !important; " class="dropdown-item" href="/final_project/admin/listquestions.php">List Questions</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Feedback
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a style="color:black !important; " class="dropdown-item" href="/final_project/admin/listfeedback.php">List Feedback</a>
         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a style="color:black !important; " class="dropdown-item" href="./listttuserrs.php">List Users</a>
         
        </div>
      </li>

        <?php if(isset($_SESSION['adminemail'])): ?>
          <form method='POST' action="">
      <li class="nav-item">
	      <button class="btn  btn-info"  type="submit" name="logout">Logout</button>
      </li>
      </form>

          <?php else: ?>

      <li class="nav-item">
	      <a class="nav-link" href="login.php">Login</a>
      </li>
            <?php endif; ?>
     
    </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>
</html>