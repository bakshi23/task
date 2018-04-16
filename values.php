<?php
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 1);
  error_reporting(-1);
  $conn = new mysqli('mydatabase.demo.abc', 'root', 'sqlpass123', 'mysql');
  $sql = 'SELECT * FROM test';
  $result =$conn->query($sql);
  while($row =$result->fetch_assoc()) { echo 'test table contains these is: ' . $row['firstname'].$row['lastname'] ;}
  $conn->close();
  ?>
