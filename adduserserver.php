<?php

$server='localhost';
$username='root';
$password='';
$database='blood_donaction';

$conn= mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
else{
    echo "Connection was Successful";
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $add=$_POST['address'];
    $dob=$_POST['date'];
    $age=$_POST['age'];
    $bg=$_POST['bloodgroup'];
    $time=$_POST['time'];
    $number=$_POST['phone_no'];
    $email=$_POST['email'];
    

    $sql ="INSERT INTO `donor`(`name`, `address`, `dob`, `age`, `blood_group`, `donation_time`, `email`, `phone`) VALUES ('$name','$add','$dob','$age','$bg','$time','$email','$number')";
}

if (mysqli_query($conn, $sql)) {
    header("Location: /Blood_donaction/");
} else {
    echo "Error: " .
    mysqli_error($conn);
}


// mysqli_close($conn);
?>