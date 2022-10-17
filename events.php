<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Blood Donation</title>
    <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid #7b2525;
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #e1dbdb;
}
</style>
</head>

<body>

    <div class="header">
        <h1>Blood Donation</h1>
        <p>Be the reason for someone's heartbeat.</p>
    </div>
    <div class="nav">
  <ul style="list-style: none;">
    <a href="/Blood_donaction/">
      <li class="navitem">Home</li>
  </a>
  <a href="events.php">
      <li class="navitem">Events</li>
  </a>
  <a href="bloodbank.php">
      <li class="navitem">Blood Bank</li>
  </a><?php 
    session_start();
    if (isset($_SESSION['emailid'])) {
      echo"<a href='addevent.php'>
      <li class='navitem'>Add Event</li>
      </a>
      <a href='donorform.php'>
      <li class='navitem'>Fill Donor Forms</li>
      </a>
      <a href='updateblood.php'>
      <li class='navitem'>Update Blood Bank</li>
      </a>
      <a href='logout.php'>
      <li class='navitem'>Log Out</li>
      </a>";
    } 
    else {
      echo "<a href='Loginpage/'>
      <li class='navitem'>Log In</li>
      </a>";
    }
  ?>
  </ul>
  
</div>
<div><div
        style="background-color:#AB0003;font-size:35px;height:50px;padding-left:10px;font-weight:900 ;width:300px;color:white;border-radius:10px">
        Events:</div></div>
    <div style="padding: 5%;">
      <br>
      <br>
    <table>
  <tr>
    <th width="20%">Name</th>
    <th width="10%">Date</th>
    <th width="10%">Time</th>
    <th width="32%">Address</th>
    <th width="18%">Phone</th>
  </tr>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blood_donaction";


    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name,date,time,address,phone FROM event";
    $result = $conn->query($sql);
    $today = date("Y/m/d");
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["name"]."</td>
            <td>".$row["date"]."</td>
            <td>".$row["time"]."</td>
            <td>".$row["address"]."</td>
            <td>".$row["phone"]."</td>
          </tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
  
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>