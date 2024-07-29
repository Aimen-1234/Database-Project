
<html>
<head>
  <title>Records of  Visitors</title>
</head>
<body>
<table border="2" cellspacing = "8">
  <tr>
    <th>LoginID</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Password</th>
    <th>Confirm</th>
    <th>Gender</th>
  </tr>
  <?php
  error_reporting(0);
  include("connection.php");
  $query = "SELECT * FROM login";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);
  //echo $result['LoginID']."   ".$result['FirstName']."   ".$result['LastName']."   ".$result['Email']."   " .$result['Passsword']."   ".$result['Confirm']."   ".$result['Gender'];
  //echo $total;
  if($total != 0){
    //$result = mysqli_fetch_assoc($data);
    while($result = mysqli_fetch_assoc($data)){
      echo "
      <tr>
      <td>".$result['LoginID']."</td>
      <td>".$result['FirstName']."</td>
      <td>".$result['LastName']."</td>
      <td>".$result['Email']."</td>
      <td>".$result['Password']."</td>
      <td>".$result['Confirm']."</td>
      <td>".$result['Gender']."</td>
      </tr>
      ";
    }
  }
  else{
    //echo "not records found";
  }


  ?>
