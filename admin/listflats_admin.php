<!-- 
  ,نضيف للداتا بيز title ====== done
   ناقص جزء الصور  الكتير  اللي هتتضاف-->

<?php
include "/xampp/htdocs/final_project/shared/config.php";
include '../shared/navadmin.php';
include '../shared/auth_admin.php';
$select="SELECT * FROM `flats` ";
$selectQuery = mysqli_query($conn, $select);

if(isset($_GET["delete"])){
  $getid=$_GET['delete'];
  $delete="DELETE FROM `flats` WHERE id=$getid ";
  $deleteQuery = mysqli_query($conn, $delete);
  header("location: listflats_admin.php");
}

if(isset($_GET['approved'])){
  $approved = $_GET['approved'];
  $update = " UPDATE `flats` SET `approved` = 1 where id = '$approved'";
  $u = mysqli_query( $conn , $update );
  header('location:/final_project/admin/listflats_admin.php');
}
?>
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
       <th scope="col">Title</th>
      <th scope="col">Address</th>
     
      <th scope="col">Images</th>
      <th scope="col">Describtion</th>
      <th scope="col">Price</th>      
      <th scope="col">Room_Numbers</th>      
      <th scope="col">Location</th> 
           <th scope="col">Unit Type</th>       
           <th scope="col">Elevator</th>
           <th scope="col">approved</th>
           <th  colspan="2" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php $count=1;
      foreach($selectQuery as $selected) { ?>
    <tr>
      <th scope="row"><?php echo $count; $count++; ?></th>
      <td><?Php echo $selected['title'] ; ?></td>
      <td><?Php echo $selected['address'] ; ?></td>
      <td><img style="width: 200px; height: 200px;" src="upload/<?php echo $selected['image']; ?>"></td>
      <td><?Php echo $selected['desc'] ; ?></td>
      <td><?Php echo $selected['price'] ; ?></td>
      <td><?Php echo $selected['roomnum'] ; ?></td>
      <td> <iframe
 src=" <?Php echo $selected['location'] ; ?>"
    width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
    <td><?Php echo $selected['unit_type'] ; ?></td>
    <td><?Php echo $selected['elevator'] ; ?></td>
    <td><?Php echo $selected['approved'] ; ?></td>


    <td class="text-center"><a name="delete" href="/final_project/admin/listflats_admin.php?delete=<?php echo $selected["id"]; ?>" class="btn btn-danger" 
     onclick="return confirm('Would you like to delete This Appartment ')
  ">
    Delete</a></td>

    <td class="text-center"><a name="delete" href="/final_project/admin/listflats_admin.php?approved=<?php echo $selected["id"]; ?>" class="btn btn-info" >
    approved</a></td>

    <td>
    <a name="edit" href="/final_project/admin/flats_admin.php?edit=<?php echo $selected["id"]; ?>"  class="btn btn-success">EDIT </a></td>
    </tr>
   <?php } ?>
  </tbody>
</table>

</body>
</html>

<?php
ob_end_flush();
?>