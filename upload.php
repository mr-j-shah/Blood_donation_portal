<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donaction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$blood = $_POST["blood"];
$sql = "SELECT bottle FROM blood_bottle WHERE blood='$blood'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
  $bottle=$row['bottle'];
  echo $bottle;
}
$value = $_POST["value"];
$update = $value+$bottle;
$sql2 = "UPDATE blood_bottle SET bottle=$update WHERE blood='$blood'";
if ($conn->query($sql2) === TRUE) {
    header("Location: /Blood_donaction/");
} else {
  echo "Error updating record: " . $conn->error;
}

?>
