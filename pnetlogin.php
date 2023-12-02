
<?php
//  Check Login user
session_start();
if(!isset($session ["username"])) {
    header("Location:index.php");
    exit();
}

?>

<?php
// Database credentials
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pnetdb";

// Create a connection to the database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the password is set
    if (isset($_POST["password"])) {
        $password = $_POST["password"];

        if (empty($password)) {
            // echo "Please enter a password.";
            echo "Please enter a password.";
            
        } else {
            // Sanitize user input to prevent SQL injection
            $password = mysqli_real_escape_string($conn, $password);

            // Query the database to check if the password is correct
            $sql = "SELECT * FROM user_information WHERE password='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // Authentication successful, retrieve the username
                $row = $result->fetch_assoc();
                $username = $row["username"];

                // Store the username in the session
                $_SESSION["username"] = $username;

                // Redirect to mainpage.php
                header("Location: main-page.php");
                exit();
            } else {
                // Authentication failed, display an error message
                echo "Please enter your password";
            }
        }
    }
    // Close the database connection
    $conn->close();
}
?>

