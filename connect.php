<?php

  $username = $_POST['username'];
  $password = $_POST['password'];


  $link = mysqli_connect("localhost","root","","admin_login");
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  
    $sql = "SELECT * FROM adminlogin";
    $result = mysqli_query($link, $sql)
      or die("Failed to query database" . mysqli_error());
      $row = mysqli_fetch_array($result);
      
      if($row['username'] == $username && $row['password'] == $password)
      {
        header("Location:AdminPanel.php");
      }
      else 
      {   
        echo
        "<script>
          alert('Wrong user name or password');
          window.history.back();
        </script>"; 
      }

    

    mysqli_close($link);

  // if(isset($_POST["submit"]))
  // {
  //  $query = "SELECT * FROM admin_login WHERE   "
  // }


?>






