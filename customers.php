<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Member</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
     
    <script src="js/slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
</script>
</head>
<style>
  body{
      background-color: rgba(0, 0, 0, 0.2);
      }
</style>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php include 'msg.php';  ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        </div>

        <div class="col-md-12">
            <div class="float-left">
                <!-- <h2>PHP Member List</h2> -->
                <!-- <input id="myInput" type="text" placeholder="Search.."> -->
                <input class="form-control mr-sm-2" type="search" id="myInput" placeholder="Search" aria-label="Search">
            </div>            
            <div class="float-right">
                <a href="add.php" class="btn btn-success">Add New Customer Record</a>
            </div><br><br>
            

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">C_Id</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php

                include 'mydbCon.php';

                $query="select * from customers limit 200"; // Fetch all the data from the table customers

                $result=mysqli_query($dbCon,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>

                <?php 
                  while($array=mysqli_fetch_row($result)): 
                  ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td> 
                      <a href="edit.php?custId=<?php echo $array[0];?>" class="btn btn-primary">Edit</a>
                      <a href="delete.php?custId=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                      
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
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