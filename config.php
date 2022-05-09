<? php

 $server = 'localhost';
 $username='root';
 $passsword='';
 $database='job_portal_two';

 $conn = mysqli_connect($server,$username,$passowrd,$database);

 if($conn->connect_error){
     die("connection failed:".$conn->connect_error);

 }
 echo"";
 
 session_start();


if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM user WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job= "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC)";
    if(mysqli_query($conn,$jobs);
}

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name', '$apply', '$qual', '$year')";
    mysqli_query($conn, $sql);
}
 mysqli_close($conn);
 ?>