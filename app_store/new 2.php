<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM application WHERE App_Name = 'Instagram'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["App_ID"]. " - Name: " . $row["App_Name"]. " " . $row["App_LatestVersion"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>