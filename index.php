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
        .start{
            float: left;
            padding-left: 10%;
        }
        .why{
            padding-top: 70px;
    
            /* padding: 0px 0px; */
            /* font-style: normal; */
            font-size: 50px;
            /* font-weight: 500; */
            font-weight: bold;
            color: black;
            /* font-family: 'Changa One',display; */
            text-transform: inherit;
        }
        .img1{
            width: 40%;
            padding-left: 20%;
            /* padding: 20px 40px; */
            /* margin: auto; */
            max-width: 50%;
            /* vertical-align: middle; */
            display: inline-block;
            height: auto;
            border: none;
            /* box-sizing: border-box; */
            /* box-shadow: none; */
        }
        /* img{
            padding-right: 20%;
        } */
        .des{
            padding-top: 80px;
            padding-left: 50%;
            padding-right: 10%;
            /* margin-top: 80px;
            margin-left: 20%;
            margin-right: 20%; */
        }
        .icons{
            float: left;
            height: 22px;
            width: 20px;
            padding-right: 6px;
            /* padding-top: 7px; */
        }
        #icon1{
            height: 22px;
    width: 20px;
    padding-right: 12px;
    padding-left: 6px;
    padding-top: 7px;
}
        
        #icon2{
            height: 20px;
    width: 30px;
    padding-right: 6px;
    padding-left: 2px;
        }
        #icon3{
            height: 17px;
    width: 17px;
    padding-right: 14px;
    padding-top: 2px;
    padding-left: 8px;
}
        
        #icon4{
            height: 22px;
    width: 20px;
    padding-right: 12px;
    padding-top: 0px;
    padding-left: 6px;
        }
        .start{
            float: left;
            padding-left: 10%;
        }
        .tip{
            padding-top: 70px;
            text-align: center;
            /* padding: 0px 0px; */
            /* font-style: normal; */
            font-size: 40px;
            /* font-weight: 500; */
            font-weight: bold;
            color: black;
            /* font-family: 'Changa One',display; */
            text-transform: inherit;
        }
        .img1{
            width: 40%;
            padding-left: 18%;
            padding-top: 5%;
            /* padding: 20px 40px; */
            /* margin: auto; */
            max-width: 50%;
            /* vertical-align: middle; */
            display: inline-block;
            height: auto;
            border: none;
            /* box-sizing: border-box; */
            /* box-shadow: none; */
        }
       
        .des{
            padding-top: 80px;
            padding-left: 50%;
            padding-right: 10%;
            
            /* margin-top: 80px;
            margin-left: 20%;
            margin-right: 20%; */
        }
        .title{
            font-weight: bold;  
            font-size: 20px;
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

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/scroll1.jpg" alt="Greece" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Donate Blood</h3>
              <p>Save Life</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="images/scroll2.jpg" alt="Maldives" width="1100" height="500">   
          </div>
          <div class="carousel-item">
            <img src="images/scroll3" alt="Switzerland" width="1100" height="500">  
          </div>
          <div class="carousel-item">
            <img src="images/scroll4.jpg" alt="Switzerland" width="1100" height="500">
            <div class="carousel-caption">
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <section>
        <div class="start">
            <div class="tip">
                <div>TIPS TO MAKE YOUR <br> BLOOD DRIVE SUCCESSFUL</div> </div>
            <div class="img1">
                <img width="345" height="440" src="Images/tips.png" alt="Why should I Donate Blood?">
            </div>
        </div>
            <div class="des">
                <div class="title">Set a Goal</div>
            <div>
                Determine a reasonable amount of donors you hope show up to give.
            </div>
            <br>
            
                <div class="title">Plan Early</div>
            <div>
                Along with you Blood-Donor consultant, begin working on the details of your drive and handing out the provided marketing materials.
            </div>
            <br>
            
                <div class="title">Spread the Word</div>
            <div>
                Through signs, word-of-mouth, emails and more, let others near you know what is going on.
            </div>
            <br>
           
                <div class="title">Start Signing Up Donors</div>
            <div>
                Through signs, word-of-mouth, emails and more, let others near you know what is going on.
            </div>
            <br>
            
                <div class="title">Get a Group Involved</div>
            <div>
                Get people to help you set up and get others excited. Have your team help you come up with unique ways to make your drive even more fun.
            </div>
            <br>
            
                <div class="title">Show your Appreciation</div>
            <div>
                DAt your drive, make sure every donor knows how much it means to you that they show up.
            </div>
            <br>
            
                <div class="title">We’re Here to Help</div>
            <div>
                If you have any questions during the process, your Blood-Donor consultant will be ready to help guide you and give you all you need to achieve success.
            </div>
            <br>
            </div>
            
    </section>
    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Steps Required to be Follow</h2>
      </div>
      
	<div class="row">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <h1 style="color:white;">Step 1</h1>
          <img src="Images/one.png" alt="Avatar" style="width:270px;height:250px;">
        </div>
        <div class="flip-card-back">
          <h1 style="background-color:rgb(213, 201, 201); color: black;">Step 1</h1> 
          <p>Find the Event of Blood Donation and Reach over there.</p> 
          <p>Get Manual ID card from the Register Desk</p>
        </div>
      </div>
    </div>
    <div class="arrow">
      <img src="Images/arrow.png" alt="" style="width:50px;height:50px; margin-top: 130px;">
    </div>
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <h1 style="color:white;">Step 2</h1>
          <img src="Images/two.jpg" alt="Avatar" style="width:270px;height:250px;">
        </div>
        <div class="flip-card-back">
          <h1 style="background-color:rgb(213, 201, 201); color: black;">Step 2</h1> 
          <p>When you turn arrive go for the Blood Donation.</p> 
          <p>Take a rest after a donation of the Blood.</p>
        </div>
      </div>
    </div>

    <div class="arrow">
      <img src="Images/arrow.png" alt="" style="width:50px; height:50px; margin-top: 130px">
    </div>
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <h1 style="color:white;">Step 3</h1>
          <img src="Images/three.jpg" alt="Avatar" style="width:270px;height:250px;">
        </div>
        <div class="flip-card-back">
          <h1 style="background-color:rgb(213, 201, 201); color: black;">Step 3</h1> 
          <p>Go for the Data Desk to generate the Certificate and Data entry.</p> 
          <p>Get the Certificate.</p>
        </div>
      </div>
    </div>
   </div>
   <section>
        <div class="start">
        <div class="why">
            <div>Why should I <br>Donate Blood?</div> </div>
        <div class="img1">
            <img width="345" height="410" src="Images/img1.png" alt="Why should I Donate Blood?">
        </div>
    </div>
        <div class="des">
            <div>Safe blood saves lives and improves health. Blood transfusion is needed for:	</div>
        <br>
        <div>
            <img class="icons" id="icon1" src="Images/women.png" alt="Women">
            Women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth;
        </div>
        <hr>
        <div>   
            <img class="icons" id="icon2" src="Images/child-re1.png" alt="Women">
            Children with severe anaemia often resulting from malaria or malnutrition;
        </div>
        <hr>
        <div>
            <img class="icons" id="icon3" src="Images/brain.png" alt="Women">
            People with severe trauma following man-made and natural disasters;
        </div>
        <hr>
        <div>
            <img class="icons" id="icon4" src="Images/medical bag.png" alt="Women">
            Many complex medical and surgical procedures and cancer patients.
        </div> 
        <br>
        <p>
            It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia. There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.
        </p>
        <p>
            Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions  
        </p>
    </div>
    </section>
</section>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>