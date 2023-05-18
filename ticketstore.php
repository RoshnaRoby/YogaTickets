<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Ticket Confirmation</title>
      <style>
      html { 
    background: url(images3/sea.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
    p{ font-weight: 1000;
        text-align: center;
        font-size: 25px;
        color: maroon;}
    </style>
      
   </head>
   <body>
      <?php
        $fname=$_POST["first"];
        $lname=$_POST["last"];
        $email=$_POST["email"];
        $phone=$_POST["tel"];
        $tic=$_POST["ticket"];

        if (!preg_match( "/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", 
        $phone))
     {
        print( "<p class = 'error'>Please put valid phone number: (222) 222-2222</p></body></html>" );
        die();
     }
        if ($tic=="vip"){

            $vipdata=fopen("vip.txt", "a") or die("Unable to open file!");
            $lines = count(file("vip.txt"));
            $ticnumvip=$lines+1;
            if ($lines<=20){
            $writer=$fname.":".$lname.":".$email.":".$phone.":"."VIP-$100".":\n";
            fwrite($vipdata,$writer);
            print("<p> Thank you for booking with us! Print a copy of this Ticket please!</p><p>Ticket Number: VIP-V00".$ticnumvip."</p><p>First Name: ".$fname."</p><p>Last Name: ".$lname."</p><p>Email: ".$email."</p><p>Phone: ".$phone."</p>");
        }
        else{print("<p>We apologise our VIP tickets are sold out! Please try regular or online</p>");
        }
        }
        else if ($tic=="reg"){

            $regdata=fopen("reg.txt", "a") or die("Unable to open file!");
            $lines2 = count(file("reg.txt"));
            $ticnumre=$lines2+1;
            if ($lines2<=30){
            $writer2=$fname.":".$lname.":".$email.":".$phone.":"."Regular-$30".":\n";
            fwrite($regdata,$writer2);
            print("<p> Thank you for booking with us! Print a copy of this Ticket please!</p><p>Ticket Number: Regular-R00".$ticnumre."</p><p>First Name: ".$fname."</p><p>Last Name: ".$lname."</p><p>Email: ".$email."</p><p>Phone: ".$phone."</p>");
        }
        else{print("<p>We apologise our regular tickets are sold out! Please try Vip or online</p>");
        }
        }
        else{
            $ondata=fopen("online.txt", "a") or die("Unable to open file!");
            $lines3 = count(file("online.txt"));
            $ticnumon=$lines3+1;
            if ($lines3<=50){
            $writer3=$fname.":".$lname.":".$email.":".$phone.":"."Online-$10".":\n";
            fwrite($ondata,$writer3);
            print("<p> Thank you for booking with us! Print a copy of this Ticket please!</p><p>Ticket Number: Online-N00".$ticnumon."</p><p>First Name: ".$fname."</p><p>Last Name: ".$lname."</p><p>Email: ".$email."</p><p>Phone: ".$phone."</p>");
        }
        else{print("<p>We apologise our VIP tickets are sold out! Please try regular or VIP</p>");
        }
        }
  ?>

   </body>
</html>