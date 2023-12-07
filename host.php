<?php
include './shared/navuser.php';
?>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <title>Kemet NFR</title>
    <!-- bootstrap cdn -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="host.css" />
</head>

<body>
    <?php
    include './shared/config.php';

    if (isset($_POST['send'])) {
        $address = $_POST['address'];
        $price = $_POST['price'];
        $tittle = $_POST['tittle'];
        $location = $_POST['location'];
        $desc = $_POST['desc'];
        $unit_type = $_POST['unit_type'];
        $elevator = $_POST['elevator'];
        $roomnum = $_POST['roomnum'];
        $place = $_POST['place'];


        $img_name = $_FILES['img']['name'];
        $img_type = $_FILES['img']['type'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_location = "upload/";
        move_uploaded_file($img_tmp, $img_location . $img_name);

        $insert = "INSERT INTO `flats` VALUES (NULL , '$tittle' ,'$address' , '$img_name' ,'$desc' , '$price' , '$roomnum' , '$location' , '$unit_type' , '$elevator' , '$place')";
        $i = mysqli_query($conn, $insert);
        
        $unit_type = "";
        $elevator = "";
        $roomnum = "";
        $place = "";
    }


    ?>


    <div class="df">
        <div class="or">
            <div class="container">
                <div class="title">
                    <h1>Information</h1>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="inputs">
                        <div class="input">
                            <span class="sp">Address</span>
                            <input name="address" type="text" placeholder="Enter the address " required>
                        </div>

                        <div class="input">
                            <span class="sp">Price</span>
                            <input type="text" name="price" placeholder="Enter the price" required>
                        </div>

                        <div class="input">
                            <span class="sp">Tittle</span>
                            <input name="tittle" type="text" placeholder="Enter small description about your apartment " required>
                        </div>

                        <div class="input">
                            <span class="sp">Location</span>
                            <input name="location" type="text" placeholder="Enter the location " required>
                        </div>

                        <div class="input">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button">Rooms Number</button>
                                <select name="roomnum" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option>Choose...</option>
                                    <option value="One">One</option>
                                    <option value="Two">Two</option>
                                    <option value="Three">Three</option>
                                    <option value="Four">Four</option>
                                    <option value="Five">Five</option>
                                </select>
                            </div>
                        </div>

                        <div class="input">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button">Unit type</button>
                                <select name="unit_type" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option value="">Choose...</option>
                                    <option value="Compound">Compound</option>
                                    <option value="Apartment">Apartment</option>

                                </select>
                            </div>
                        </div>

                        <div class="input">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button">Elevator</button>
                                <select name="elevator" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option selected value="">Choose...</option>
                                    <option value="Exist">Exist</option>
                                    <option value="Not exist">Not exist</option>
                                </select>
                            </div>
                        </div>


                        <div class="input">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button">Place</button>
                                <select name="place" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option selected value="">Choose...</option>
                                    <option value="Cairo">Cairo</option>
                                    <option value="Giza">Giza</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-floating">
                            <textarea class="form-control" name="desc" placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label>
                        </div>

                        <br><br>
                        <div class="new">

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload images of Compound,Apartment</label>
                                <input class="form-control" name="img" type="file" id="formFile" multiple>
                            </div>
                        </div><br>

                        <div class="center">
                            <div class="link">
                                <a href="#">
                                    <button name="send" class="button1">Save</button>
                                </a>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>

    </div>
    <section class="fadii">
    </section>
    <section>

        <footer class="row footer">

            <div class="containerr">

                <div class="cont">
                    <h3>Contact Us</h3>
                    <p> <i class="fa fa-whatsapp"></i>:+20 1158656096 </p>
                    <p> <i class="fa fa-phone"></i>:01158656096</p>
                    <p><i class="fa fa-envelope"></i>:kemet.nfr22@gmail.com</p>

                </div>

                <div class="social">
                    <h3> Social Media</h3>

                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button">
                        <i class="fa fa-facebook-f"></i>
                    </a>

                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button">
                        <i class="fa fa-google"></i>
                    </a>

                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>

                <div class="about">
                    <h3 class="abt"> About Us</h3>
                    <p class="us">We are an online travel agency which provide hospitality services was founded in 2021 and
                        aim to introduce all sides of Egypt to the world.</p>
                </div>

            </div>
            <hr>
            <div class="para">
                <p>©2020 Copyright:kemetNfr.com</p>
            </div>

        </footer>

    </section>


</body>


</html>