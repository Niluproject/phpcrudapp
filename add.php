<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert data from form to mysql database php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <div class="page-header">
                <h2>Add Record From Database PHP</h2>
            </div>
           
            <form action="insert-process.php" method="post">

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" required="">
                </div>                        

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required="">
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="save">
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