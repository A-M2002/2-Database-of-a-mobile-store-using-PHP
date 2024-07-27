<?php

session_start();

if(!isset($_SESSION['admin_name'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Priya Mobile Park</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <style>
        body {
            background-image: url('https://img.freepik.com/free-photo/laptop-near-smartphone-digital-devices_23-2147957578.jpg?t=st=1722105054~exp=1722108654~hmac=b9507454897b37db29c69fa181ae5b6b01e598c5b839281920e86cda02d971c4&w=1060');
            background-size: cover; /* Make the image cover the whole background */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-attachment: fixed; /* Make the background image fixed */
        }
        /* Add any other styles you need here */
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center m-4" style="color:black"><b><i><hr>Priya Mobile Park<hr></i></b></h1>
        </div>
    
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <form action="db.php" method="post" enctype="multipart/form-data">
            <p><b>Customer's name:
            <input type="text" name="name" placeholder="Write Customer's name"></b></p>

            <p><b>Mobile Choose:</b>
                <select name="mobile" id="">
                    <option value="">-Choose Any One-</option>
                    <option value="Apple">Apple</option>
                    <option value="Lg">Lg</option>
                    <option value="MI">MI</option>
                </select>
            </p>
            
            <p><b>Specification:</b>
                <input type="radio" name="spec" value="4Gb">4Gb
                <input type="radio" name="spec" value="16gb">16gb
                <input type="radio" name="spec" value="32gb">32gb
                
            </p>

            <p>
               <b>Customized Color:</b> 
                <input type="text" name="color" value="" >
            </p>

            <p>
               <b>Paymeny Terms:</b> 
                <input type="checkbox" name="pay[]" id="" value="Cash">Cash
                <input type="checkbox" name="pay[]" id="" value="Upi">Upi
                <input type="checkbox" name="pay[]" id="" value="Card">Card
            </p>

            <p>
                <b>Upload the image of mobile:</b> <input type="file" name="img" id="">
            </p>

            <p>
                <input class="btn btn-success" type="submit" name="submit" value="Submit"> &nbsp;
                <input class="btn btn-warning" type="reset" name="reset" value="Reset"> 
            </p>

            
        </form>
    </div>
    <div class="col-sm-4"></div>
    
</div>
</div>
</body>
</html>