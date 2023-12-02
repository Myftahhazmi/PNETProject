
<?php
//  Check Login user
session_start();
if(!isset($session ["username"])) {
    header("Location:index.php");
    exit();
}

?>

<?php
// Replace 'YOUR_USERNAME' and 'YOUR_PASSWORD' with your actual credentials
$username = "tempaccess";
$password = "temporarydatatesting";

// Replace 'YOUR_API_URL' with the actual API endpoint URL
$apiUrl = "https://weather.akirakan.com/petronas_data/latest_warning/latest_warning_Petronas.csv";

// Create the authentication header
$authHeader = base64_encode($username . ':' . $password);

// Create the stream context with the authentication header
$context = stream_context_create([
    'http' => [
        'header' => "Authorization: Basic $authHeader"
    ]
]);

// Make the request to the API using file_get_contents
$response = file_get_contents($apiUrl, false, $context);

// Check if the request was successful
if ($response === false) {
    // Get additional error details
    $error = error_get_last();
    $errorMessage = isset($error['message']) ? $error['message'] : 'Unknown error';

    // Provide a user-friendly error message
    die('Error fetching data from the API. Please try again later. Error details: ' . $errorMessage);
} else {

    // Convert CSV data string into an array
    $csvArray = array_map('str_getcsv', explode("\n", $response));

    // Remove any spaces
    $csvArray = array_filter($csvArray);

    // Store extracted data into an array
    $extractedData = [];
    
    foreach($csvArray as $index => $row){
        if ($index === 0) {
            continue;
        }

        // Select which data to be taken from the csv
        if (count($row) >= 8) {
            $location = $row[0];
            $warningType = $row[3];
            $validFrom = $row[4];
            $warning = str_replace(["\n", "\r"], '', $row[6]);
            $latitude = $row[1];
            $longitude = $row[2];

            // Create an associative array with the extracted data
            $extractedData[] = [
                'location' => $location,
                'warning_type' => $warningType,
                'valid_from' => $validFrom,
                'warning' => $warning,
                'latitude' => $latitude,
            ];
        }
    }
        // If $extractedData is empty, return a JSON response with the message
        if (empty($extractedData)) {
            $message = ["message" => "There is no data available."];
            header('Content-Type: application/json');
            echo json_encode($message);

        } else {
            // Output the extracted data in JSON format
            header('Content-Type: application/json');
            echo json_encode($extractedData);
        }
}

// Set headers to force download
// header('Content-Type: application/json');
// header('Content-Disposition: attachment; filename="weather_data.json"');

// echo $extractedData;
// echo json_encode($response);
?>
