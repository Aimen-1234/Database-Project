<?php
include("connection.php");

if(isset($_GET['button'])) {
    $fn = $_GET['fname'];
    $sn = $_GET['sname'];
    $em = $_GET['email'];
    $ps = $_GET['password'];
    $cps = $_GET['cpassword'];
    $gen = $_GET['r1'];
    $logi = $_GET['log'];


    $check_query = "SELECT * FROM login WHERE `LoginID`='$logi'";
    $result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($result) > 0) {
        echo "Error: Login ID '$logi' already exists. Please choose a different one.";
    } else {

        $query = "INSERT INTO login VALUES ('$logi','$fn', '$sn', '$em', '$ps', '$cps','$gen')";
        $data = mysqli_query($conn, $query);
        if($data) {
            header("Location: customer.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Signup Form</title>
    <style>


h2 {
    text-align: center;
    color:white;
    font-size: 25px;
    font-family: cursive;
}

    table {
      margin: 40 auto;
      border: 5px solid black;
      align-items: center;
      color: white;
      /*background-color: #00203FFF;*/
      border-radius: 25px;
      height: 400px;
      position: center;
      font-size: 20px


    }

    #btn{
      background-color: #ADEFD1FF;
      color: black;
      height: 25px;
      width: 350px;
      border-radius: 10px;

    }
    body{
      background-image: url('img.jpg');
      background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
   margin: 50px;
   padding: 0;
   background-color: #900;


    }
    input{
      border-radius: 5px;
      height: 30px;
      background-color: #AED6F1;
    }

    </style>
</head>
<body>

    <table align="center" cellspacing="15">
        <form method="GET" action="">

          <h2>Sign Up</h2>
            <tr>
                <td>Login ID<td> <input type="text" placeholder="ID" name="log" required></td>
            </tr>
            <tr>
                <td>First name<td> <input type="text" placeholder="First name" name="fname" required></td>
            </tr>
            <tr>
                <td>Last name<td> <input type="text" placeholder="Second name" name="sname" required></td>
            </tr>
            <tr>
                <td>Email Address <td><input type="text" placeholder="Email Address" name="email" required></td>
            </tr>
            <tr>
                <td>Password <td><input type="text" placeholder="Password" name="password" required></td>
            </tr>
            <tr>
                <td>Confirm Password <td><input type="text" placeholder="Confirm Password"name="cpassword" required></td>
            </tr>
            <tr>
                <td>Gender <td> Male  <input type="radio" name="r1" value="Male" required> Female<input type="radio" name="r1" value="Female">  </td>
            </tr>
                <tr>
                <td align="centre" colspan="2"><input type="submit" id="btn" name="button" value="Submit"></td> <!-- Action attribute removed from button -->
            </tr>
        </form>
    </table>
</body>
</html>
