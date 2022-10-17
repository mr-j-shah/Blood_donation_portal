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
    $name=$_POST['add_event'];
    $add=$_POST['address'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $number=$_POST['phone_no'];
    

    $sql ="INSERT INTO `event`(`name`, `address`, `date`, `time`,`phone`) VALUES ('$name','$add','$date','$time','$number')";
}

if (mysqli_query($conn, $sql)) {
    header("Location: /Blood_donaction/");
} else {
    echo "Error: " .
    mysqli_error($conn);
}


// mysqli_close($conn);
?>