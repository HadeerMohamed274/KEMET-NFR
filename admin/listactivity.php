<?php
include 'C:/xampp/htdocs/final_project/shared/config.php';
include 'C:/xampp/htdocs/final_project/shared/link.php';
include 'C:/xampp/htdocs/final_project/shared/navadmin.php';
include '../shared/auth_admin.php';
$select = "SELECT * from `activities` ";
$s = mysqli_query ( $conn , $select);   





//====== Delete Part =======
if (isset($_GET['delete'])){
    $act_id = $_GET['delete'];
    $delete = "DELETE FROM `activities` WHERE id = $act_id";
    $d = mysqli_query( $conn , $delete);
    header('location:/final_project/admin/listactivity.php');
}




?>

<div class="container col-7 text-center my-5">
    <table class="table table-hover">
        <tr class="thead-dark">
            <th>ID</th>
            <th>Activity Name</th>
            <th>Description</th>
            <th>Activity Image</th>
            <th>Action</th>
        </tr>
            <?php foreach($s as $data){  ?>
        <tr>
            <td> <?php echo $data['id'] ?> </td>
            <td> <?php echo $data['name'] ?> </td>
            <td> <?php echo $data['description'] ?> </td>
           
            <td> <img width="150" height="100" src="upload/<?php echo $data['image']; ?>"> </td>
            <td> 
                <a href="/final_project/admin/addactivity.php?edit=<?php echo $data['id'] ?>"  class="btn btn-primary"> Update </a>
                <a href="/final_project/admin/listactivity.php?delete=<?php echo $data['id'] ?>"  onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger"> Delete </a>
            </td>
        </tr>
            <?php }  ?>
    </table>
</div>

<?php
ob_end_flush();
?>

