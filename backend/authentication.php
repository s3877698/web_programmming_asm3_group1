<?php 
    // Include the "get-data.php" file to use the get_data_from_csv function
    include_once('get-data.php');

    // Include the "registration.php" file to use validation functions
    include_once('registration.php');

    $registration_file = 'registration.csv';
    $fp = fopen($registration_file, "a"); // Open the registration.csv file
    flock($fp, LOCK_SH); // Set the file in shared mode (reader)

    // Check if users submit the form
    if (isset($_POST['button-submit']) && $_POST['button-submit'] !== "") {
        // Use the get_data_from_csv function to get information about previous records in registration.csv
        $previous_record = get_data_from_csv_with_double_quotes($registration_file);

        // Store the email or phone submitted in a variable
        $account = $_POST['email/phone'];

        // Store the password submitted in a variable
        $password = $_POST['password'];

        // A variable to check if the email or phone number is in registration.csv
        $valid_user = false;

        // A variable to check if the password is in registration.csv
        $valid_password = false;

        // A variable to store the error message
        $error_message = "";

        // A variable to store the hashed password that matches the submitted password
        $hashed_password = "";

        // An array to store the matched information if the account submitted is matched
        $matched_account = [];

        // Check if users submit an email
        if (validate_email('email/phone')) {
            // Iterating through the registration.csv to find the matched email
            $record_len = count($previous_record);
            for ($index = 0; $index < $record_len; $index++) {
                if ($previous_record[$index][0] === $account) {
                    $hashed_password = $previous_record[$index][2];
                    $matched_account = base64_encode(serialize($previous_record[$index]));
                    $valid_user = true;
                    break;
                } 
            }
        } else if (validate_phone('email/phone')) { // Check if users submit a phone number 
            // Remove special characters in phone number
            $account = preg_replace('/[ .-]/', '', $account); 

            // Iterating through the registration.csv to find the matched phone number
            $record_len = count($previous_record);
            for ($index = 0; $index < $record_len; $index++) {
                if ($previous_record[$index][1] === $account) {
                    $hashed_password = $previous_record[$index][2];
                    $matched_account = base64_encode(serialize($previous_record[$index]));
                    $valid_user = true;
                    break;
                } 
            }
        }

        // Verify the password submitted
        if (password_verify($password, $hashed_password)) {
            $valid_password = true;
        } else {
            $valid_password = false;
        }

        // Check if the account is valid with the right email or phone number and password
        if ($valid_user && $valid_password) {
            // If valid, redirect to user-information.php page
            header("Location: ../user-information.php?matched_account=$matched_account");
        } else {
            // If invalid, send an error message and redirect back to login-box.php page
            $error_message = base64_encode("Incorrect username or password. Try again");
            header("Location: ../login-box.php?error_message=$error_message");        
        }
    }

    // Release the lock of the registration.csv
    flock($fp, LOCK_UN);

    // Close the registartion.csv file
    fclose($fp);
?>