<?php
    $error = ''; // Initialize error variable
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $location = $_POST['location'];

        // Check if any field is empty
        if(empty($first_name) || empty($last_name) || empty($email) || empty($location)) {
            $error = "Please fill in all fields";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
    <div class="w3-card w3-margin w3-padding">
        <h2>User Profile</h2>
        <?php
            // If there's an error, display it
            if($error != '') {
                echo '<p style="color:red;">' . $error . '</p>';
            } else {
                // If no error, display the profile
                if(isset($first_name) && isset($last_name) && isset($email) && isset($location)) {
                    echo '<h3>' . $first_name . ' ' . $last_name . '</h3>';
                    echo '<ul>';
                    echo '<li>Email: ' . $email . '</li>';
                    echo '<li>Location: ' . $location . '</li>';
                    echo '</ul>';
                }
            }
        ?>
    </div>
</body>
</html>
