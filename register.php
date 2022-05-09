<? php

 $server = 'localhost';
 $username='root';
 $passsword='';
 $database='job_portal_two';

 $conn= mysqli_connect($server,$username,$passowrd,$database);

 if($conn->connect_error){
     die("connection failed:".$conn->connect_error());

 }
 echo"";
 
 

 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $number=$_POST['phone_no'];
     $password=$_POST['password'];

     $sql = "INSERT INTO `user`(`name` , `email` , `password` , `number`) VALUES ('$name','$email','$password','$number')";
     if(mysqli_query($conn, $sql)){
         echo "Records inserted successfully.";
     } else {
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
     }
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body{
        background-image: url('back.img.jpg');
        background-size: cover;
        background-repeat: no-repeat;
      }
      form{
        margin-top: 6em;
        margin-left: 30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
        background-color: #fff;
      }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form method="POST" >
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputName" name="number">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Ragistered? <a href="login.php">Login</a>
</form>
    </div>
</body>
</html>