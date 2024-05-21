<?php
// Stability.ai API endpoint
$apiEndpoint = 'https://api.stability.ai/v1/generation/stable-diffusion-xl-1024-v1-0/text-to-image';

// Your stability.ai API key
$apiKey = 'sk-UU3h6OHDHBOPJztfhKsJsuEfNu8Qpeai7LK8NbHthHnWskGz';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get text prompt from form submission
    $textPrompt = isset($_POST['text_prompt']) ? $_POST['text_prompt'] : '';

    // Check if text prompt is provided
    if (!empty($textPrompt)) {
        // Request parameters
        $params = [
            'steps' => 30,
            'width' => 1024,
            'height' => 1024,
            'seed' => 0,
            'cfg_scale' => 5,
            'samples' => 1,
            'text_prompts' => [
                ['text' => $textPrompt, 'weight' => 1],
            ]
        ];

        // Headers
        $headers = [
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json',
        ];

        // Initialize cURL session
        $ch = curl_init($apiEndpoint);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL session
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
            exit;
        }

        // Close cURL session
        curl_close($ch);

        // Decode JSON response
        $responseData = json_decode($response, true);

        // Check if response contains artifacts
        if (isset($responseData['artifacts'])) {
            // Loop through artifacts and save images
            foreach ($responseData['artifacts'] as $index => $artifact) {
                $filename = 'APIs/updatePicture/img_' . $artifact['seed'] . '.png';
                file_put_contents($filename, base64_decode($artifact['base64']));
                // echo "Image saved: $filename\n";
            }
        } else {
            // Handle error
            echo "Error: No artifacts found in response\n";
        }
    } else {
        // Text prompt is empty
        echo "Error: Text prompt is required\n";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text to Image Generator</title>
    <style>
/* CSS to set the size of the displayed image */
.generated-image {
    width: 480px;
    height: 480px;
}
</style>
</head>

<body>
    <h2 style="background-color: black; color:aliceblue; text-align:center; height:70px;">Text to Image Generator</h2>
    <form style="margin-left:250px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="container-fluid">
        <input style="height: 50px; width:60%; border-radius:20px;" type="text" id="text_prompt" name="text_prompt" required placeholder="Enter your prompt here..."><br><br>
        <input style="margin-left: 300px;" class="btn btn-primary" type="submit" value="Generate Image">
    </form>
    <!-- Display the generated image here -->
    <?php if (isset($filename)) { ?>
        <h4>Generated Image: <?php echo $textPrompt ?> </h4>
        <?php //echo $filename; ?>
        <img style="border-radius: 30px; margin-left:450px; margin-bottom:20px;" src='<?php echo $filename; ?>' alt="Generated Image" class="generated-image"><br>

    <?php } ?>
</body>

</html>