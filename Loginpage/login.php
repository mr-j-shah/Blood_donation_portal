<?php 

session_start(); 

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "blood_donaction";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}
else{
if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }
    else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }
    else{

        $sql = "SELECT * FROM user_table WHERE email='$email' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['emailid'] = $row['email'];

                

                header("Location: /Blood_donaction/");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
}
?>