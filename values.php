<?php
  $conn = new mysqli('mydatabase.demo.abc', 'root', 'sqlpass123', 'mysql');
  $sql = 'SELECT * FROM test';
  $result =$conn->query($sql);
  while($row =$result->fetch_assoc()) { echo 'test table contains these is: ' . $row['firstname'].$row['lastname'] ;}
  $conn->close();
  ?>
