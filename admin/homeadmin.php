<?php 
 include '../shared/navadmin.php';
 include '../shared/auth_admin.php';
 
?>
<!DOCTYPE HTML>

<?php
 
  
  
  if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header('location: /final_project/finalhome.php');
  }

?>
<html>

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title> Admin Home</title>
    <style>
        a {
            color: grey;
        }
    </style>
</head>

<body>
     <div class=" text-center ">
    <div class="d-flex justify-content-around mt-5 text-center">

        <div class="flex-shrink-0 p-3 bg-white ml-5 pl-5" style="width: 25%;">
            <a href="#" class=" text-secondary d-flex align-items-center pb-3 margin:auto;  color-black text-decoration-none border-bottom display-3 " >Kemet NFR </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning rounded collapsed" data-bs-toggle="collapse" data-bs-target="#news-collapse">
                    Apartments
                    </button>
                    <div class="collapse mt-2" id="news-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/team2/news/create_news.php" class="link-dark rounded">Add Apartments</a></li>
                            <li><a href="/team2/news/list_news.php" class="link-dark rounded">List Apartments</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#instructors-collapse" aria-expanded="false">
                    Activities
                    </button>
                    <div class="collapse mt-2" id="instructors-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/final_project/admin/addactivity.php" class="link-dark rounded">Add Activities</a></li>
                            <li><a href="/final_project/admin/listactivity.php" class="link-dark rounded">List Activities</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#students-collapse" aria-expanded="false">
                    Questions
                    </button>
                    <div class="collapse mt-2" id="students-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/final_project/admin/addanswers.php" class=" link-dark rounded">Add Answer</a></li>
                            <li><a href="/final_project/admin/listquestions.php" class=" link-dark rounded">List Questios</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#courses-collapse" aria-expanded="false">
                    Feedback
                    </button>
                    <div class="collapse mt-2" id="courses-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/final_project/admin/feedback_admin.php" class="link-dark rounded">List Feedback</a></li>
                           
                           
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#courses-collapse" aria-expanded="false">
                    Users
                    </button>
                    <div class="collapse mt-2" id="courses-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/final_project/admin/listttuserrs.php" class="link-dark rounded">List Users</a></li>
                           
                           
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <form method="POST">
                    <a  href="/final_project/finalhome.php"name="logout" class="btn btn-block btn-outline-dark align-items-center rounded">
                        Log Out</a>
                    </form>
                </li>
        </div>
       
    </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<?php
ob_end_flush();
?>