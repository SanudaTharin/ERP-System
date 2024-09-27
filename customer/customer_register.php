<?php
require_once('../includes/db_connect.php'); // Connect to the database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name']; 
    $last_name = $_POST['last_name'];
    $contact_no = $_POST['contact_no'];
    $district_id = $_POST['district_id'];

    // Validate inputs 
    if (!empty($title) && !empty($first_name) && !empty($middle_name) && !empty($last_name) && !empty($contact_no) && !empty($district_id)) {
        // Validate contact number to ensure it contains only digits
        if (preg_match('/^\d+$/', $contact_no)) {
            // Prepare an SQL query to insert the customer data
            $sql = "INSERT INTO customer (title, first_name, middle_name, last_name, contact_no, district) VALUES (?, ?, ?, ?, ?, ?)";

            // Prepare statement
            if ($stmt = $conn->prepare($sql)) {
                // Bind parameters (s = string, i = integer for district_id)
                $stmt->bind_param("sssssi", $title, $first_name, $middle_name, $last_name, $contact_no, $district_id);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "Customer registered successfully!";
                    // Redirect to customer list or another page after success
                    header('Location: customer_list.php');
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "Error preparing the statement: " . $conn->error;
            }
        } else {
            echo "Contact number must contain only digits!";
        }
    } else {
        echo "Please fill all required fields!";
    }
}

require_once('../includes/footer.php'); // Include footer file ?

// Close the database connection
$conn->close();
?>


