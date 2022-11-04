<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit and Update Data PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
  body{
      background-color: rgba(0, 0, 0, 0.2);
      }
</style>
<body>

<div class="container mt-2">

  <div class="page-header">
      <h2>Update Data From Database PHP</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php


            include 'mydbCon.php';

            $query = "SELECT * FROM customers WHERE custId='" . $_GET["custId"] . "'"; // Fetch data from the table customers using id

            $result=mysqli_query($dbCon,$query);

            $customer = mysqli_fetch_assoc($result);


            ?>
            <form action="update-process.php" method="POST">

              <input type="hidden" name="custId" value="<?php echo $_GET["custId"]; ?>" class="form-control" required="">

              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $customer['fname']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $customer['lname']; ?>" required="">
              </div>              

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $customer['email']; ?>" required="">
              </div>

              <button type="submit" class="btn btn-primary" value="submit">Submit</button>

            </form>
        </div>
    </div>        
</div>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://www.covrize.com/">nilesh.v@covrize.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>