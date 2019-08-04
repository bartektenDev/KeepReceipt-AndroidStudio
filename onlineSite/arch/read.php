<html>
<body>
  Reading...
  <?php
     $mysqli = NEW MySQLi('localhost', 'root', 'password', 'test');
     $retval = $mysqli->query("SELECT id FROM accounts WHERE username = '$username' AND password = '$password'");

     if(! $retval ) {
        die('Could not get data: ' . mysql_error());
     }

     while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        echo "EMP ID :{$row['id']}  <br> ".
           "EMP NAME : {$row['email']} <br> ".
           "EMP SALARY : {$row['createdate']} <br> ".
           "--------------------------------<br>";
     }

     echo "Fetched data successfully\n";
  ?>
  <h1>No other data...</h1>
</body>
</html>
