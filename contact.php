<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "dipesh"; // Your MySQL password
$database = "tulusahitya";

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $field1 = mysqli_real_escape_string($conn, $_POST['field1']);
        $field2 = mysqli_real_escape_string($conn, $_POST['field2']);
        $field3 = mysqli_real_escape_string($conn, $_POST['field3']);

        // Use prepared statements for database query
        $sql = "INSERT INTO contactus (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $field1, $field2, $field3); // Assuming 'field2' corresponds to email and 'field3' to message

        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close prepared statement
        $stmt->close();
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close database connection
    $conn->close();
}
?>
