<?php
  $mysqli = NEW MySQLi('localhost', 'root', 'password', 'test');

  $records = $mysqli->query("SELECT id FROM accounts");

  while($receipt=mysql_fetch_assoc($records)){
    echo "<tr>";
    echo "<td>".receipt['email']."</td>";
    echo "</tr>";
  }
?>
