<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message-container">
        <h3 id="msghead">Messages</h3>
        <table class="msgtable" style="width: 50%">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Mail Address</th>
                    <th scope="col">Order No.</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <?php
                session_start();
                error_reporting(0);
                $name = $_GET['name'];
                $phone = $_GET['phone'];
                $mail = $_GET['mailAddr'];
                $order = $_GET['orderNo'];
                $msg = $_GET['msg'];
              
                $link = mysqli_connect("localhost","root","","mydb");
                if($link === false)
                {
                  die("ERROR: Could not connect. " . mysqli_connect_error());
                }
              
                  $sql = "SELECT * FROM messagelist";
                  $result = mysqli_query($link, $sql)
                    or die("Failed to query database" . mysqli_error());
                    
                  $total = mysqli_num_rows($result);
              
                  if($total!=0)
                  {
                    while($display = mysqli_fetch_assoc($result))
                    {
                      echo "
                      <tr>
                        <td>".$display['name']."</td>
                        <td>".$display['phone']."</td>
                        <td>".$display['mailAddr']."</td>
                        <td>".$display['orderNo']."</td>
                        <td>".$display['msg']."</td>
                      </tr>
                      ";
                    }
                  }
                  
            ?>
        </table>



    </div>
</body>
</html>

  







































<!-- <!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
<meta charset=UTF-8>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body id=adminpanel>
  <div class="adminpanel">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-md-4">
      </div>
      <div class="col-sm-6 col-md-4">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="AdminLogin.html">Log out</a></li>
          </ul>
          <table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mail Address</th>
      <th scope="col">Message</th>
    </tr>
  </thead> -->

  
<?php
/*
  session_start();
  error_reporting(0);
  $name = $_GET['name'];
  $email = $_GET['mailAddr'];
  $msg = $_GET['msg'];

  $link = mysqli_connect("localhost","root","","admin_login");
  if($link === false)
  {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

    $sql = "SELECT * FROM adminpanel";
    $result = mysqli_query($link, $sql)
      or die("Failed to query database" . mysqli_error());
      // $row = mysqli_fetch_array($result);
    $total = mysqli_num_rows($result);

    if($total!=0)
    {
      while($display = mysqli_fetch_assoc($result))
      {
        echo "
        <tr>
          <td>".$display['name']."</td>
          <td>".$display['mailAddr']."</td>
          <td>".$display['msg']."</td>
        </tr>
        ";
      }
    }
    session_unset();
    session_destroy();
    */
?>

        <!-- </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html> -->













