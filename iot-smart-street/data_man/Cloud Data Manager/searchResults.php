    <?php
$servername = "localhost";
$username = "madhusql";
$password = "Night@908";
$dbname = "DB272";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$home = $_POST['homephone'];
$cell = $_POST['cellphone'];


$sql = "SELECT * FROM 'table1' WHERE Fname='$fname' OR Lname='$lname' OR Email='$email' OR HomeAddress='$address' OR HomePhone='$home' OR CellPhone='$cell';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>Name: " . $row["Fname"]. " " . $row["Lname"]. "<br>";
        echo "Email: ".$row["Email"]."<br>";
        echo "Home Address: ".$row["HomeAddress"]."<br>";
          echo "Home Phone: ".$row["HomePhone"]."<br>";
            echo "Mobile Number: ".$row["CellPhone"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

