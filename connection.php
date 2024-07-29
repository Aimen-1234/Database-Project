<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $database_name = "movie";

        $conn = mysqli_connect($servername, $username,
        $password, $database_name);

        /*if($conn){
           echo "Connection successful";
        } else {
            echo "Connection failed";
        }*/
    ?>


</html>
