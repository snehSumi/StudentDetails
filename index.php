<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "placement"; 

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = isset($_POST['full-name']) ? $_POST['full-name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $university = isset($_POST['university']) ? $_POST['university'] : '';
    $degree = isset($_POST['degree']) ? $_POST['degree'] : '';
    $major = isset($_POST['major']) ? $_POST['major'] : '';
    $graduation_year = isset($_POST['graduation-year']) ? $_POST['graduation-year'] : '';
    $skills = isset($_POST['skills']) ? $_POST['skills'] : '';

    echo "Received form data: <br>";
    echo "Full Name: " . $full_name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "University: " . $university . "<br>";
    echo "Degree: " . $degree . "<br>";
    echo "Major: " . $major . "<br>";
    echo "Graduation Year: " . $graduation_year . "<br>";
    echo "Skills: " . $skills . "<br>";

    $sql = "INSERT INTO students (full_name, email, phone, university, degree, major, graduation_year, skills) VALUES ('$full_name', '$email', '$phone', '$university', '$degree', '$major', '$graduation_year', '$skills')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="success-message">Form submitted successfully!</div>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (mysqli_query($conn, $sql)) {
    echo '<div class="success-message">All the best for your Future!</div>';
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

mysqli_close($conn);
?>
