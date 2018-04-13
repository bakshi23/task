<?php
  $conn = new mysqli('172.28.3.201', 'admin', 'admin123', 'test');
  $sql = 'SELECT * FROM test';
  $result =$conn->query($sql);
  while($row =$result->fetch_assoc()) { echo 'the value is: ' . $row['firstname'].$row['lastname'] ;}
  $conn->close();
  ?>