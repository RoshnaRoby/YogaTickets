<!DOCTYPE html>
<html> <!--php file to read the changing ticket numbers in real time-->
<head>
<title>Yoga Expo</title>
<style> 
.section {
  position: relative;
  text-align: center;
  color: white;
}
.section2 {
  position: relative;
  text-align: center;
  color: white;
}
.row {
  display: flex;
}
a{color: blue;}

.column {
  flex: 33.33%;
  padding: 5px;
  position: relative;
  text-align: left;
  color: white;
}

.center {
  position: absolute;
  color: white;
  top: 30%;
  left: 25%;
  bottom: 50%;
}

a:hover{text-decoration:underline;}
.center2 {
  position: absolute;
  font-size: 30px;
  color: white;
  top: 30%;
  left: 30%;
  bottom: 50%;
}
.center3{
    position: absolute;
  font-size: 25px;
  color: white;
  bottom: 8px;
  left: 16px;
}
.center4 {
  position: absolute;
  color: white;
  top: 10%;
  left: 30%;
  bottom: 50%;
}

span{
        text-decoration: underline;
    }
form {text-align: center;
        font-size: 30px;}
input{margin-bottom:35px;}     


</style>
</head>
<body>
    <?php
    $vipdata=fopen("vip.txt", "r") or die("Unable to open file!");
    $lines = 20-count(file("vip.txt"));

    $regdata=fopen("reg.txt", "r") or die("Unable to open file!");
    $lines2 = 30-count(file("reg.txt"));
    $ondata=fopen("online.txt", "r") or die("Unable to open file!");
    $lines3 = 50-count(file("online.txt"));
    ?>
    <div class="section">
        <img src="images3/girl.jpg" alt="girl" style="position: relative;height: 900px;width:100%;"> 
        <div class="center">
            <h1 style="font-size:60px">Yoga Expo 2022</h1>
            <p style="font-size:20px"> Brought to you by Phoenix Health And Wellness</p>
            <p style="font-size:40px">5 Days....100 Participants....20 Yoga Experts</p>
            <p style="font-size:20px;">2nd May-7th May 2022 at Stanhope Campground</p>

        </div>
    </div>
    <div>
    <div class="row">
      <div class="column">
        <img src="images3/vip.jpg" alt="vip" style="width:100%;height:600px">
        <div class="center2">
        <p>VIP TICKETS</p>
        <p>100 CAD</p>
        <p><a href="#book">Book now</a></p></div>
        <div class="center3">
            <p>**Hurry!! Only <span style="font-size:25px;"><?php echo $lines ?> VIP</span> tickets left</p>
        </div>

      </div>
        
      <div class="column">
        <img src="images3/rg.jpg" alt="reg" style="width:100%;height:600px">
        <div class="center2">
        <p>Regular TICKETS</p>
        <p>30 CAD</p>
        <p><a href="#book">Book now</a></p></div>
        <div class="center3">
            <p>**Hurry!! Only <span style="font-size:25px;"><?php echo $lines2 ?> Regular</span> tickets left</p>
        </div>
      </div>
      <div class="column">
        <img src="images3/on.jpg" alt="on" style="width:100%; height:600px">
        <div class="center2">
        <p>Online TICKETS</p>
        <p>10 CAD</p>
        <p><a href="#book">Book now</a></p></div>
        <div class="center3">
            <p style="font-size:20px; position: relative; margin-left: 5px;">(Follow at the comfort of your own home)</p>
            <p>**Hurry!! Only <span style="font-size:25px;"><?php echo $lines3 ?> Online</span> tickets left</p>
        </div>
      </div>
    </div> 
    </div>
<div class="section2">
    <img src="images3/dark.jpg" alt="stone" style="position: relative;height: 900px;width:100%;"> 
        <div class="center4">
    <form id="book" action="ticketstore.php" method="post">
    <div>
        <label>First Name:</label>
        <input type="text" name="first">
    </div>
    <div>
        <label>Last Name:</label>
        <input type="text" name="last">
    </div>

    <div>
        <label>Email address:</label>
        <input type="email" name="email">
    </div>
  
    <div>
        <label>Telephone:</label>
        <input type="text" name="tel">
    </div>

    <div>
        <strong>Choose your ticket type:</strong><br>

        <label>VIP-$100
            <input name = "ticket" type = "radio" value = "vip"></label>
        <label>Regular-$30
            <input name = "ticket" type = "radio" value = "reg"></label> 
        <label>Online-10$
            <input name = "ticket" type = "radio" value = "online"></label>
  
    </div>
 
    <input style="font-size:30px; margin-right: 30px;" type = "submit" value = "Book">
    <input style="font-size:30px;"type = "reset" value = "Reset">
</form>
<div>
    <p style="font-size:20px;">For questions and more info please<a href = "mailto:roshnarebaca2002@gmail.com"> Email Us</a>.</p></div>

</div>
</div>
</body>
</html>
