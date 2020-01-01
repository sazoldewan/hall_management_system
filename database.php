<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
require_once 'config.php';

$sql = "SELECT * FROM Members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Username</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Member Name"]. "</td><td>" . $row["Username"]. "</td><td>" .$row["Email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>