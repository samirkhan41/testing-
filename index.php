<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    

//connection ki maa ki chut

    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // password and connection not be same 
    $dbname = "samir";

   // connect karna hai databse se 

    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

    // connection check karna hai (optional)

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // table inser karna hai 
    $sql = "INSERT INTO student (name, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo " Record inserted successfully!";
    } else {
        echo " Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!-- from  here my html is start  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Test</title>
</head>
<body>
<form action="#" method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    Phone: <input type="text" name="phone"><br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>