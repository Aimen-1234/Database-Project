<?php
include ("connection.php");
error_reporting(0);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information Form</title>
    <style>

    .row-container {
        display: flex;
        flex-direction: column;
        margin-bottom:  60px;
        margin-left: 30px;

        /*background-color:#160205 ;*/
    }

    .row {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 3px;
        margin-bottom: 20px;
    }

    .column {
        width: 100%;
    }

    .column img {
        width: 240px;
        height: 320px;
        transition: transform 0.3s ease;
        border-radius: 30px;
    }

    .column img:hover {
        transform: scale(1.1);
    }


html {
	background: #000000;
	padding: 0;
	margin: 0;
	padding-bottom: 6rem;
	font-family: "Montserrat", sans-serif;
	width: 100%;
}
        body {
          background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
            /*font-family: Arial, sans-serif;*/
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            background-image: url(img.jpg);
            color: white;
            font-size: 20px;

        }
        form {
            /*background-color: #fff;*/
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
            border: 5px solid black;
        }


        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #AED6F1;
              border: 2px solid black;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
      header  h1{
          font-size: 50px;
font-weight: 100;
color: #6F0818;
text-align: center;
font-family: cursive;
margin-bottom: 0px;
background-color: black;
        }

        header  h2{
            font-size: 30px;
  font-weight: 100;
  color: #6F0818;
  text-align: center;
  font-family: cursive;
  margin-top: 0px;
  background-color: black;
          }


    </style>
</head>
<body>
  <header>
  <h1>welcome to online movie Booking website</h1>
  <h2>available trending movies<h2>
  </header>
  <div class="row-container">
  <div class="row">
      <div class="column">
          <img src="em1.jpg">
      </div>
      <div class="column">
          <img src="em2.jpg">
      </div>
      <div class="column">
          <img src="em3.jpg">
      </div>
      <div class="column">
          <img src="em4.jpg">
      </div>
      <div class="column">
          <img src="em9.jpg">
      </div>
  </div>
  <div class="row">
      <div class="column">
          <img src="em5.jpg">
      </div>
      <div class="column">
          <img src="em6.jpg">
      </div>
      <div class="column">
          <img src="em7.jpg">
      </div>
      <div class="column">
          <img src="em8.jpg">
      </div>
      <div class="column">
          <img src="em10.jpg">
      </div>
  </div>
</div>


    <form action="#" method="post">

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="street">Street Address:</label>
        <input type="text" id="street" name="street" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required>

        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" name="contact" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fn = $_POST['firstname'];
    $sn = $_POST['lastname'];
    $age = $_POST['age'];
    $st = $_POST['street'];
    $ct = $_POST['city'];
    $state = $_POST['state'];
    $cont = $_POST['contact'];
    $gen = $_POST['gender'];

    $query = "INSERT INTO customer(gender, age, first_name, last_name, street_no, city, state, contact)
              VALUES ('$gen', '$age','$fn', '$sn', '$st', '$ct','$state','$cont')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted";
    } else {
        echo "Data not inserted";
    }
}


 ?>
