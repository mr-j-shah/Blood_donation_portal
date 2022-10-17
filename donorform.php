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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body{
            /* background-image: url('Images/1.jpg'); */
            background-size: cover;
        }
        form{
            background-color:#fff;
            margin-top: 3em;
            margin-left: 20em;
            margin-right: 20em;
            padding: 40px;
            box-shadow: 10px 10px 8px 10px #888888;
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
<div
        style="background-color:#AB0003;font-size:35px;height:50px;padding-left:10px;font-weight:900 ;width:300px;color:white;border-radius:10px">
        Donor Form:</div>
        <div class="container">
    <form method="POST" action="adduserserver.php">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name:</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
    </div>
    <div class="mb-3">
    <label for="exampleInputAddress" class="form-label">Address:</label>
    <textarea  rows="3" cols="7" class="form-control" id="address" name="address">    </textarea> 
  </div>
  <div class="mb-3">
    <label for="exampleInputDate" class="form-label">Date of Birth:</label>
    <input type="date" class="form-control" id="exampleInputDate" name="dob">
    </div>
    <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Age:</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="age">
    </div>    
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Blood Group:</label>
    <input type="text" class="form-control" id="exampleInputName" name="bloodgroup">
    </div>
    <div class="mb-3">
        <label for="exampleInputTIme">Blood Donation time:</label>
        <input type="time" class="form-control" id="exampleInputTime" name="time">
    </div>
    <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputNumber" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Phone Number:</label>
        <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
    </div>
  
  <button type="submit" class="btn btn-primary" name="submit" onclick="">Submit</button>
  <br>
  <!-- Already Registered? <a href="login.php">Login</a> -->
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>