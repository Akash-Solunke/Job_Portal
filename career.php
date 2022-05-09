<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php' ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .banner{
            background:url('banner.jpg');
            background-size: cover;
        }
        .navbar{
      overflow: hidden:
      background-color: #333;
      position: fixed;
      top: 0;
      width: 100%;
  }
  h1,
  p{
    color: #fff;
  }

  .jobs{
    border: 1px solid black;
    box-shadow: 5px 5px 4px 5px grey;
    margin: 10px;
    padding: 10px;
  }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Career</title>
</head>

 <!-- <div class="container-fluid">

 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
<body style="margin: 0; padding:0;">
<div class="row mr-0">
  <div class="col-12 container-fluid">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('banner.jpg); background-size:cover;">
    <div class="container">
      <h1 class="display">Job Portal</h1>
      <p class="lead"> Best Jobs available matching your skills</p>
    </div>
  </div>
  </div>
</div>
 <div class="row m-0"> 

<!-- <div class="banner">
   <img src="banner.jpg" alt="" class="img-fulid" width="150">
</div>
    <h1 class="display-4">Job Portal</h1>
    <p class="lead">Best job available matching your skills</p>
 </div>

 <div class="row"> -->
 <?php
     $sql="SELECT cname,Position,Jdesc,CTC,skills FROM jobs ";
     $result=mysqli_query($conn,$sql);
    //  $i=0;
     if($result->num_rows>0){
       while($rows=$result->fetch_assoc()){
     echo'
     <div class="col-md-4">
     <div class="jobs">
     <h3> style="text-align; center;">'.$rows['position'].'</h3>
     <h4> style="text-align; center:">'.$rows['cname'].'</h4>
     <p style="color: black; text-align: justify;">'.$rows['Jdocs'].'</p>
     <p style="color: black;"><b>skills Required: </b>'.$rows['skills'].'</p>
     <p style ="color: black;"><b>'.$rows['CTC'].'</p>
     <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
    Apply Now
  </button>
     </div>
     </div>';
       }}
       else{
         echo"";
       }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
 </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>