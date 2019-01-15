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
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$email = $_POST['email'];
$address = $_POST['address'];
$home = $_POST['homephone'];
$cell = $_POST['cellphone'];

$sql = "INSERT INTO 'table1' VALUES ('$firstname', '$lastname', '$email', '$address', '$home', '$cell')";

if(!mysqli_query($conn, $sql))
{
    echo "Not Inserted";
}
else
{
    echo "Values Inserted";
}


>?



//VV Important

<?php

$servername = '127.0.0.1';
$username = 'madhusql';
$password = 'Night@908';
$dbname = 'DB272';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn)
{
    echo 'Not connected to server';
} 
if(!mysqli_select_db($conn, $dbname))
{
    echo 'Database not selected';
}

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$email = $_POST['email'];
$address = $_POST['address'];
$home = $_POST['homephone'];
$cell = $_POST['cellphone'];

$sql = "INSERT INTO 'table1' (firstname, lastname, email, address, home, cell) VALUES('$firstname', '$lastname', '$email', '$address', '$home', '$cell')";

if(!mysqli_query($conn, $sql))
{
    echo "Not Inserted";
}
else
{
    echo "Values Inserted";
}

<httpErrors_errorMode="Detailed"/>


>?


//To view list
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

$sql = "SELECT Fname, Lname, Email, HomeAddress, HomePhone, CellPhone FROM table1";
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



