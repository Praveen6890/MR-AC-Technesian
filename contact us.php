
<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("faild" . mysqli_connect_error());
    }
    // echo " succes";
    $name = $_POST['name'];
    // $age = $_POST['age'];
    // $gender = $_POST['gender'];
    // $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc= $_POST['desc'];
    $sql ="INSERT INTO `trip`.`triipe` (`name`, `phone`, `desc`, `dt`) VALUES ('$name', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo " successful";
        $insert = true;
    }
    // else "Error:$sql <br> $con->error";
    // $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid d-flex justify-content-center">
        <a class="navbar-brand" href="#"> ALL Types of Split AC Service is Here</a>
      </div>
    </nav> -->

    
    
    
    <div class="container">
    <h3>welocome to ac service</h3>
    <p>Enter your detail and submit your form</p>
    <h1>
    <p class="pk">
    <?php
    if($insert == true){
        echo "<p class='submitmsg'>Thanks for submiting the form</p>";
    }
      
    ?>
    </p>
    </h1>

    
    


    <form action="contact us.php" method="post">
        <input type="text" name = "name" id="name" placeholder="enter your  name">
        <input type="phone" name = "phone" id="phone" placeholder=" enter your phone">
        <textarea name = "desc" id ="desc" cols="30" rows="10" placeholder="enter your other information
        "></textarea>
        <button class="btn">submit</button>
        

    </form>
    
    
</div>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-center">
  <div class="container1 d-flex justify-content-center ">
    <footer style="color: white;">
      &copy; 2023 @MR.AC TECHNECIAN. All rights reserved.
  </footer>   
  </div>
</nav> -->
<script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>




