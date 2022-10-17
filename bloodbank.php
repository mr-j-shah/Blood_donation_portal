
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Blood Donation</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



.header {
  /* height: 20; */
  /* margin: auto; */
  padding: 10px;
  text-align: center;
  background: #99000d;
  color: white;
}

.nav {

  justify-content: center;
  display: flex;
  padding: 10px 10px;
  background: rgb(240, 240, 240);
  color: white;
}

.body {
  background-color: white;
  
}

* {
  width: auto;
  margin: 0;
  padding: 0;
}

.logoimage {
  width: 5%;
  padding-right: 60%;
}

.navitem {

  display: inline;
  color: #99000d;
  column-gap: 20px;
  padding: 20px;

}

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

.carousel-inner img {
  width: 100%;
  height: 90vh;
}

.aboutImg {
  width: 100%;
  height: 290px !important;
}





/* .card {
    float: left;
    padding: 15px; 
    margin:25px;
   
  } */


.flip-card {

  position: relative;
  background-color: transparent;
  width: 270px;
  height: 300px;
  perspective: 1000px;
  margin: auto;


}

.flip-card-inner {

  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  /* width: 100%;
    height: 100%; */
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: rgb(183, 37, 37);
  color: black;
}

.flip-card-back {
  background-color: rgb(183, 37, 37);
  color: white;
  transform: rotateY(180deg);
  width: 270px;
  height: 300px;
}

.arrow {
  padding: 50px, 0;
}

/* .row {} */
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
    <div
        style="background-color:#AB0003;font-size:35px;height:50px;padding-left:10px;font-weight:900 ;width:300px;color:white;border-radius:10px">
        Blood Bank:</div>
    <div style="text-align: center;margin: auto;">
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

    $sql = "SELECT blood, bottle FROM blood_bottle";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div style='margin:25px;float:left;display:block'>
            <table class='a'>
                <tr>
                    <th class='b'>".$row["blood"]."</sup></th>
                </tr>
                <tr>
                    <td class='c'><img src='blood_drop.png' height='150px' position='absolute'></td>
                </tr>
                <tr>
                    <td class='d'>".$row["bottle"]."</td>
                </tr>
            </table>
            </div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

