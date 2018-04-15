<?php
  $conn = new mysqli('mydatabase.demo.abc', 'root', 'mymysqlpass', 'mysql');
  $sql = 'SELECT * FROM test';
  $result =$conn->query($sql);
  while($row =$result->fetch_assoc()) { echo 'the value is: ' . $row['firstname'].$row['lastname'] ;}
  $conn->close();
  ?>
