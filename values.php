<?php
  $conn = new mysqli('mydatabase.demo.abc', 'admin', 'admin123', 'mysql');
  $sql = 'SELECT * FROM test';
  $result =$conn->query($sql);
  while($row =$result->fetch_assoc()) { echo 'the value is: ' . $row['firstname'].$row['lastname'] ;}
  $conn->close();
  ?>