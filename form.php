<?php
	include("ContactUs.html");
  $name = $_GET['name'];
  $email = $_GET['mailAddr'];
  $msg = $_GET['msg'];

  $link = mysqli_connect("localhost","root","","admin_login");
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
    $msgsql = "INSERT INTO adminpanel(name, mailAddr, msg) VALUES ('$name','$email','$msg')";

    if (mysqli_query($link, $msgsql)) 
    {
      echo 
      "<script>
          alert('Message Recorded Successfully');
          
          document.getElementById('contact').reset();
          window.history.back();
          
          
        </script>";


    } 
    else 
    {
      echo "Error: " . $msgsql . mysqli_error($link);
    }
?>









	

