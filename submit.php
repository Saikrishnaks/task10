<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "krishna";
    $password = "Ilovekrishna@123";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $phone_number = $_POST["phoneNumber"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirmPassword"];

    // Insert data into table
    $sql = "INSERT INTO users (first_name, last_name, email, phone_no, password) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration Successful. Hello $first_name $last_name, your account has been created. Details have been sent to your email id $email. You can login from here: <a href='login.html'>Login here</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
