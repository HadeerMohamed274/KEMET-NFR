<?php
include 'C:/xampp/htdocs/final_project/shared/config.php';
include 'C:/xampp/htdocs/final_project/shared/link.php';
include 'C:/xampp/htdocs/final_project/shared/navadmin.php';
include '../shared/auth_admin.php';
 
if(isset($_POST['send'])){

    $_SESSION['adminid']=$adminid;
    $imagename = $_FILES['image']['name'];
	$imagetype = $_FILES['image']['type'];
	$imagetmp = $_FILES['image']['tmp_name'];
  $location="upload/";
  move_uploaded_file( $imagetmp , $location . $imagename );

  $name = $_POST['name'];
  $description = $_POST['description'];
  $insert = "INSERT INTO `activities` VALUES (NULL , '$name' , '$description' ,'$imagename' )";
  $i = mysqli_query( $conn , $insert );
  header('location: /final_project/admin/listactivity.php');
  
}

$name = "";
$description = "";
$update = false;
if (isset($_GET['edit'])){
    $update = true;
    $act_id = $_GET['edit'];
    $select = " SELECT * FROM `activities` WHERE id = $act_id";
    $s = mysqli_query( $conn , $select );
    $row = mysqli_fetch_assoc($s);
    $name = $row['name'];
    $description = $row['description'];
}   
    if (isset($_POST['update'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $update = " UPDATE `activities` SET `name` = '$name' , `description` = '$description' WHERE  id = $act_id ";
        $s = mysqli_query( $conn , $update );
        header("location:/final_project/admin/listactivity.php");
    }



?>






<div class="container col-6 mt-5 ">
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <textarea type="text"  name="name" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Please Enter Your FeedBack"><?php echo $name; ?> </textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Decription</label>
      <input type="text" name="description"  value="<?php echo $description ?>" class="form-control" placeholder="Please Enter Your Name">
    </div>

    <?php if($update == false): ?>

    <div class="form-group">
      <label for="exampleInputEmail1"> Image</label> <br>
      <input type="file" name="image" class="custom-file__input" id="field-upload" required  required value="<?php echo $c_image; ?>" accept="upload/*">
    </div>
    
        <?php endif; ?>



        <?php if($update): ?>
    <button type="submit" name="update" class="btn btn-info"> update </button>
        <?php else: ?>
    <button type="submit" name="send" class="btn btn-primary">Create</button>
        <?php endif; ?>
    
</form>
</div>


<?php
ob_end_flush();
?>