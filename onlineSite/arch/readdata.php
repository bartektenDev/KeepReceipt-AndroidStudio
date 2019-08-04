<?php
    $connection = $mysqli_connect("localhost", "root", "password", "test");
    $select = "SELECT * FROM accounts";
    $result = mysqli_query($connection, $select);
    $row = mysqli_fetch_assoc($result);

    echo $row['username']."<br>";
?>
