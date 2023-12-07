<?php 
 ob_start();
 include '../shared/config.php';
 include '../shared/link.php';
 include '../shared/navadmin.php';
 include '../shared/auth_admin.php';

 //testmessage( $conn , "connection");




//====== receiving [ question id ] from page [ listquestions.php ] ========
 if (isset($_GET['id'])){
    $qid = $_GET['id'];
    $select = "SELECT * FROM `questions` where id = $qid";

    $s = mysqli_query( $conn , $select );
    $fetch = mysqli_fetch_assoc( $s );

    $question = $fetch['question'];
    $ans = $fetch['answer'];
 }




//======== add & update answer into DB ========
// defining variables related to [ update ] =>> not to make errors with [ update ] part
$r = "";
$question = "";
$ans = "";
$update = false;

if (isset($_GET['edit'])){
  $update = true;
  $ansid = $_GET['edit'];
  $select = " SELECT * FROM `questions` WHERE id = $ansid";
  $s = mysqli_query( $conn , $select );
  $row = mysqli_fetch_assoc($s);
  $question = $row['question'];
  $ans = $row['answer'];

}   

 if(isset($_POST['answer'])){
  $adminid = $_SESSION['adminid'];
  $r = $_POST['response'];

  $update = " UPDATE `questions` SET `answer` = '$r' , adminid = $adminid WHERE id = $ansid ";
  $i = mysqli_query( $conn , $update );

 header('location:/final_project/admin/listquestions.php');
  
}

// `adminid` = $admin_id =>> in update statement 


?>




<div class="container col-6 mt-5 ">
<form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1"><?php  echo $question ;?></label>
      <input type="text" name="response" value="<?php echo $ans; ?>"class="form-control" placeholder="Answer">
    </div>

    <button type="submit" name="answer" class="btn btn-primary"> Add Answer </button>    
</form>
</div>




<?php 
//include '../shared/script.php';
ob_end_flush();

?>

