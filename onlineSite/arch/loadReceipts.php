<?php
$conn = mysqli_connect("localhost", "root", "", "test");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT id FROM accounts";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr>";
     echo "<td>".$row['email']."</td>";
     echo "</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
