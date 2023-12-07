<!--  user data===joinناقص نعمل relation ونعمل     ===DONE-->
<?php
include "/xampp/htdocs/final_project/shared/config.php";
include '../shared/navadmin.php';
include '../shared/auth_admin.php';

$selected      = "SELECT * FROM `feedback` LEFT JOIN `user` ON feedback.userid = user.id ";

$selectQuery = mysqli_query($conn, $selected);


if(isset($_GET["delete"])){
  $getid=$_GET['delete'];
  $delete="DELETE FROM `feedback` WHERE id=$getid ";
  $deleteQuery = mysqli_query($conn, $delete);
  header("location:/final_project/admin/feedback_admin.php");
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

</head>
<body>

<table class="table table-striped  container ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Feedback</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    
      <?php foreach($selectQuery as $selected) { ?>
    <tr>
      <th scope="row"><?php echo $selected['id']?></th>
      <td><?Php echo $selected['first_name'] ; ?></td>
      <td> <?Php echo $selected['email'] ; ?></td>
      <td> <?Php echo $selected['feedback'] ; ?></td>
      <td class="text-center"><a name="delete" href="/final_project/admin/feedback_admin.php?delete=<?php echo $selected["id"]; ?>" class="btn btn-danger" 
     onclick="return confirm('Would you like to delete This feedback')
  ">
    Delete</a></td>
      </tr>
     <?php } ?>

    </tbody>
  </table>

  
       
</body>
</html>

<?php
ob_end_flush();
?>