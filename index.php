<?php
  $servername = "mysql-app-developer-ocp.apps-crc.testing";
  $username = "user";
  $password = "mypa55";
  $dbname = "items";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  # connect to the database
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  # execute a query and output its results
  $sql = "SELECT * FROM item";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "TASK: " . $row["id"]. ", " . $row["description"]. ", " . $row["done"]. "\n";
      }
  } else {
      echo "0 results";
  }

  $conn->close();
 
?>