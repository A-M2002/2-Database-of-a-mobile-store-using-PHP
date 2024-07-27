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
            background-image: url('https://img.freepik.com/premium-photo/flat-lay-various-tech-gadgets-plant-blue-background_14117-716637.jpg?w=1480');
            background-size: cover; /* Make the image cover the whole background */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-attachment: fixed; /* Make the background image fixed */
        }
        /* Add any other styles you need here */
    </style>
</head>
<body>
<center>
    <h1><b><i><hr>Priya Mobile Park<hr></i></b></h1>
    <h2><b><u>Login Please</u></b></h2>
</center>
<center>


    <?php
        if(isset($_GET['msg'])){
    ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Invalid!</strong> Try Again
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php } ?>


<form action="lch.php" method="post">
    <p>User Name: 
        <input type="text" name="email" placeholder="ur@gmail.com">
    </p>

    <p>
        Password:
        <input type="text" name="password">
    </p>

    <p>
                <input class="btn btn-success" type="submit" name="submit" value="Login"> &nbsp;
                <input class="btn btn-warning" type="reset" name="reset" value="Reset"> 
    </p>

</form>
</center>
</body>
</html>