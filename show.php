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
            background-image: url('https://img.freepik.com/free-vector/blur-pink-blue-abstract-gradient-background-vector_53876-174836.jpg?w=360&t=st=1722079614~exp=1722080214~hmac=e919d894094cbd3d1b1350c7a876cead48045a61ffa8ba0c7c3acd63d94e7a69');
            background-size: cover; /* Make the image cover the whole background */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-attachment: fixed; /* Make the background image fixed */
        }
        /* Add any other styles you need here */
    </style>
</head>
<body>
<h1 class="text-centr m-4" style="color:blue;" align="center"><b><i><u>Show all datas of customers<hr></u></i></b></h1>
<table class="table">
<thread>
    <tr>
        <th>Sl.No</th>
        <th>Customer's name</th>
        <th>Mobile</th>
        <th>Specification</th>
        <th>Mobile Color</th>
        <th>Payment Terms</th>
        <th>Image of mobile</th>
        <th>Options</th>
    </tr>
</thread>
<tbody>
    <?php
        $i=0;
        $con = mysqli_connect("localhost","root","","tasknit");
        $sel="SELECT*FROM std ";
        $rs=$con->query($sel);
        while($row=$rs-> fetch_assoc()){

     ?> 
        <tr>
            <td scope="row"> <?php echo ++$i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['spec']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['pay']; ?></td>
            <td><img style="width: 100px;" src="upload/<?php echo $row['img']; ?>" alt=""></td>
            <td><a class="btn btn-danger" href="del.php?id=<?php echo $row['c_id'];?>" onclick="return confirm('Are you want to delete?');">Delete</a></td>
            <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['c_id'];?>" onclick="return confirm('Are you want to edit?');">Update</a></td>
         </tr> 
         
       <?php  } ?>
       
       
</tbody>

</table>
<center>
    <a class="btn btn-success" href="index.php">Insert</a> &nbsp; &nbsp;
    <a class="btn btn-danger" href="logout.php">Logout</a>
       </center>     
</body>
</html>