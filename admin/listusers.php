<?php

 include 'C:/xampp/htdocs/final_project/shared/link.php';
include 'C:/xampp/htdocs/final_project/shared/config.php';
include 'C:/xampp/htdocs/final_project/shared/navadmin.php';
include 'C:/xampp/htdocs/final_project/shared/auth_admin.php';

$select = " SELECT * FROM `user` ";
 $s = mysqli_query( $conn , $select );

 //DELETE PART

 if(isset($_GET['delete'])){
    $userid= $_GET['delete'];
    $delete = " DELETE  FROM `user` WHERE id = $userid ";
    $d = mysqli_query( $conn , $delete );
    header("location: C:/xampp/htdocs/final_project/admin/listusers.php");
  }

?>



<div class="container col-6 mt-5"> 
 <table class="table  table-hover">
 
   <thead class="thead-dark">
     <tr>
       <th scope="col">ID</th>
       <th scope="col">First Name</th>
       <th scope="col">Last Name</th>
       <th scope="col">Email</th>
       <th scope="col">Pass</th>
       <th scope="col">Con Pass</th>
       <th scope="col">Phone</th>
       <th scope="col">altphone</th>
       <th scope="col">birthday</th>
       <th scope="col">gender</th>
       <th scope="col">Delete</th>
     </tr>
   </thead>
 
   <tbody>
     
    <?php foreach ( $s as $data ) { ?>

     <tr>
       <td> <?php echo $data ['id']; ?> </td>
       <td> <?php echo $data ['first_name']; ?> </td>
       <td> <?php echo $data ['last_name']; ?> </td>
       <td> <?php echo $data ['email']; ?> </td>
       <td> <?php echo $data ['pass']; ?> </td>
       <td> <?php echo $data ['cpass']; ?> </td>
       <td> <?php echo $data ['phone']; ?> </td>
       <td> <?php echo $data ['alt_phone']; ?> </td>
       <td> <?php echo $data ['birthday']; ?> </td>
       <td> <?php echo $data ['gender']; ?> </td>
       <td>
         <a href="/final_project/listusers.php?delete=<?php echo $data['id']; ?>"  onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger">Delete</a>
       </td>
     </tr>

    <?php } ?>

    <?php
     ob_end_flush();  
     ?>
 