<!-- desc =error in update
show  data in image 9
& elevator &unite_type to make update =====done   -->

<?php
ob_start();
include("/xampp/htdocs/final_project/shared/config.php");
include("C:/xampp/htdocs/final_project/shared/link.php");
include ("C:/xampp/htdocs/final_project/shared/navadmin.php");
 //show data to update
 $title="";
 $address="";
 $price="";
 $location="";
 $desc="";
 $elevator="";
 $unit="";
 $image="";
 $roomnum="";
 $editing=false;
if(isset($_GET["edit"])){
  $editing=true;
  $editid = $_GET["edit"];
  $selected       = "SELECT * FROM `flats` WHERE id = $editid";
  $selectedQuery         = mysqli_query($conn, $selected);
  $selectedRow           = mysqli_fetch_assoc($selectedQuery);
  $title= $selectedRow ["title"];
$address= $selectedRow ["address"];
$price= $selectedRow ["price"];
$location=$selectedRow ["location"];
$desc= $selectedRow ["desc"];
$elevator=$selectedRow ["elevator"];
$unit=$selectedRow ["unit_type"];
$image=$selectedRow ["image"];
$roomnum=$selectedRow ["roomnum"];
}

if(isset($_POST["update"])){
  $title =$_POST["title"];
  $address= $_POST["address"];
  $price= $_POST["price"];
  $_location=$_POST["location"];
  $desc=addslashes($_POST["desc"]);
  $elevator=$_POST["elevator"];
  $unit=$_POST["unit"];
  $imagename = $_FILES['image']['name'];
	$imagetype = $_FILES['image']['type'];
	$imagetmp = $_FILES['image']['tmp_name'];
  $location="upload/";
  move_uploaded_file( $imagetmp , $location . $imagename );

  $roomnum=$_POST["roomnum"];
 //$update="UPDATE `flats` SET  desc='safe lace and pretty'    where id=$editid ";
 $update="UPDATE `flats` SET title='$title', `address`='$address' , `desc`='$desc' , `image`='$imagename', price='$price', roomnum='$roomnum ', `location`='$_location', unit_type='$unit',elevator='$elevator'  where id=$editid ";
 //desc='$desc'=error
 // ";
  //
  // ,
  // where id=$editid ";
  
  $updateQuery = mysqli_query($conn, $update);
  header("location: listflats_admin.php");

}

if (isset($_POST["add"]))
{   $title =$_POST["title"];
  $address= $_POST["address"];
$price= $_POST["price"];
$location=$_POST["location"];
$desc=$_POST["desc"];
$elevator=$_POST["elevator"];
$unit=$_POST["unit"];
$imagename = $_FILES['image']['name'];
	$imagetype = $_FILES['image']['type'];
	$imagetmp = $_FILES['image']['tmp_name'];
  $location="upload/";
  move_uploaded_file( $imagetmp , $location . $imagename );

$roomnum=$_POST["roomnum"];
$insert      = "INSERT INTO `flats` VALUES (null,'$title', '$address', '$imagename', '$desc', '$price', '$roomnum', '$location', '$unit','$elevator' , 0 )";
$insertQuery = mysqli_query($conn, $insert);



header("location: listflats_admin.php");

}

?>




<!DOCTYPE html>
<html lang="en">

<body>
<div class="df">
         <div class="or">
        <div class="container">
            <div class="title"> <h1>Add Appartment</h1></div>
            <form  method="POST" enctype="multipart/form-data" >
                <div class="inputs">

                 <!-- title input -->
                 <div class="input">
                        <span class="sp">Title</span>
                        <input  name="title"  value="<?php echo $title ;?>" type="text" placeholder="Enter the title " required>
                    </div>
                    <!-- address input -->
                    <div class="input">
                        <span class="sp">Address</span>
                        <input  name="address"  value="<?php echo $address ;?>" type="text" placeholder="Enter the address " required>
                    </div>

                    
                    <!-- price  input -->
                    <div class="input">
                        <span class="sp">Price</span>
                        <input name="price"  value="<?php echo $price ;?>" type="text" placeholder="Enter the price" required>
                    </div>

                    
                    <!--location input -->
                    <div class="input">
                        <span class="sp">location</span>
                        <input  name="location"   value="<?php echo $location ;?>" type="text" placeholder="Enter the location" required>
                    </div>
                    <div class="input">
                        <span class="sp"> Number Of Rooms</span>
                        <input  name="roomnum"  value="<?php echo $roomnum;?>" type="text" placeholder="Enter the location" required>
                    </div>
                      
                    
                    <!-- describtion textarea -->
                 <div class="form-floating">
                 <span class="sp">Description </span>

  <textarea name="desc" type = "text"  class="form-control" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"> <?php echo $desc ;?> </textarea>
  <!--label for="floatingTextarea2">Description</label-->
</div>
                  
  
  <div class="input">
  <div class="input-group">
      
                    <!-- elevator select -->
  <button class="btn btn-outline-secondary" type="button">Elevator</button>           
  <select  name="elevator"    class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                          <!--problem-->
    <option   value="<?php echo $elevator;?>" selected > <?php  if($editing){echo $elevator;} else {echo'choose...'; }?></option>
    <option   value="Exist">Exist</option>
    <option value="Not exist">Not exist</option>


  </select>
</div>  
</div>



                    <!-- unit select -->
 <div class="input">
                    <div class="input-group">
  <button class="btn btn-outline-secondary" type="button">Unit type</button>           
  <select   name="unit"  class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option   value= " <?php echo $unit ;?> ">  <?php  if($editing){echo $unit;} else {echo'choose...'; }?></option>
    <option value="compound">Compound</option>
    <option value="Apartment">Apartment</option>
    
  </select>
</div>
 </div>
         
                         <br><br>

                    <div class="new">
                    <div class="mb-3">       
                    <!-- image input -->
  <label for="formFileMultiple" class="form-label">Upload images of Compound,Apartment</label>
  <input  name="image"   value="<?php echo $image; ?>" class="form-control" type="file"  id="formFileMultiple" multiple>
</div>
 </div>


 <br>
 <?php if( $editing):?>

  <div class="center">
      
       
          <button type="submit" name="update" class="button1">Update</button>
          <br>
         <?php else:?>
        <!--a href="/BeyondWords/assets/admin/book/listBooks.php" class="custom-button float-right col-3 text-center">Back</a-->
            <button  type="submit" name="add" class="button1">Add</button>
            <?php endif ;?>
            </div>
              
                </div>
                    
                </div>
            </form>
        
        
        
     
    
    
    
    
            </div>
</form>
</body>
</html>


<?php 
ob_end_flush();
?>