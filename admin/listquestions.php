<?php 

include '../shared/config.php';
include '../shared/link.php';
include '../shared/navadmin.php';
include '../shared/auth_admin.php';



$select ="  SELECT * FROM `questions` ";
$s= mysqli_query( $conn , $select ) ;


//======== delete part =========

if(isset($_GET['delete'])){
    $q_id = $_GET['delete'];
    $delete = "DELETE  FROM  `questions` WHERE id = $q_id";
    $d = mysqli_query($conn , $delete);
    header('location:/final_project/admin/listquestions.php');
    
}


//======= show part =========
$update = false;
if(isset($_GET['show'])){
  $update = true;
  $q_id = $_GET['show'];
  $update = " UPDATE `questions` SET `approved` = 1 WHERE id = $q_id ";
  $u = mysqli_query( $conn , $update );
  header('location:/final_project/admin/listquestions.php');

}




//======= hide part =========
$update = false;
if(isset($_GET['hide'])){
  $update = true;
  $q_id = $_GET['hide'];
  $update = " UPDATE `questions` SET `approved` = 0 WHERE id = $q_id ";
  $u = mysqli_query( $conn , $update );
  header( 'location:/final_project/admin/listquestions.php' );

}

?>




<div class="container col-11 text-center my-5">
<table class="table table-hover">
  <thead  class="table table-dark">
    <tr>
      <th scope="col"> Id</th>
      <th scope="col"> Question</th>
      <th scope="col"> Answer</th>
      <th scope="col"> Approved value</th>
      <th scope="col"> User ID</th>
      <th scope="col"> Admin ID</th>

      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php foreach($s as $data){ ?>
    <tr>
      <td> <?php echo $data['id']; ?> </td> <!-- [ id ] = question id -->
      <td> <?php echo $data['question']; ?> </td>
      <td> <?php echo $data['answer']; ?> </td>
      <td> 
        <?php 
          $status = $data['approved'];
          if( $status == 0 ){
            echo "hidden";
          }else{
            echo "shown";
          }
        ?> 
      </td>
      <td> <?php echo $data['user_id']; ?> </td>
      <td> <?php echo $data['adminid']; ?> </td>

      <td>
        <a href="/final_project/admin/addans.php?edit=<?php echo $data['id']; ?>"  class="btn btn-primary mr-2"> Answer </a>
        <a href="/final_project/admin/listquestions.php?show=<?php echo $data['id']; ?>"  class="btn btn-success mr-2"> Show </a>
        <a href="/final_project/admin/listquestions.php?hide=<?php echo $data['id']; ?>"  class="btn btn-dark mr-2"> Hide </a>
        <a href="/final_project/admin/listquestions.php?delete=<?php echo $data['id']; ?>" onclick="return confirm(' Sure To Delete ?! ')"   class="btn btn-danger"> Delete </a>


      </td>
    </tr>
  <?php } ?>

</table>
</div>



<?php  
ob_end_flush();

?>