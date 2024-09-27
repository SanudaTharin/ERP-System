<?php
require_once('../includes/db_connect.php'); // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>

    <!-- Link to style.css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Customer Registration</h1>
        <form id="customerForm" action="customer_register.php" method="POST">
            <div class="mb-3">
                <label for="customerTitle" class="form-label">Title</label>
                <select class="form-select" id="customerTitle" name="title" required>
                    <option value="">Select Title</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="customerFirstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="customerFirstName" name="first_name" required>
            </div>

            <div class="mb-3">
                <label for="customerMiddleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="customerMiddleName" name="middle_name" required>
            </div>

            <div class="mb-3">
                <label for="customerLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="customerLastName" name="last_name" required>
            </div>

            <div class="mb-3">
                <label for="customerPhone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="customerPhone" name="contact_no" required pattern="[0-9]+" title="Only numbers are allowed">
            </div>

            <div class="mb-3">
                <label for="customerDistrict" class="form-label">District</label>
                <select class="form-select" id="customerDistrict" name="district_id" required>
                    <option value="">Select a District</option>
                    <option value="1">Ampara</option>
                    <option value="2">Anuradhapura</option>
                    <option value="3">Badulla</option>
                    <option value="4">Batticaloa</option>
                    <option value="5">Colombo</option>
                    <option value="6">Galle</option>
                    <option value="7">Gampaha</option>
                    <option value="8">Hambantota</option>
                    <option value="9">Jaffna</option>
                    <option value="10">Kalutara</option>
                    <option value="12">Kandy</option>
                    <option value="13">Kegalle</option>
                    <option value="14">Kilinochchi</option>
                    <option value="15">Kurunegala</option>
                    <option value="16">Mannar</option>
                    <option value="17">Matale</option>
                    <option value="18">Matara</option>
                    <option value="19">Moneragala</option>
                    <option value="20">Mullaitivu</option>
                    <option value="21">Nuwara Eliya</option>
                    <option value="22">Polonnaruwa</option>
                    <option value="23">Puttalam</option>
                    <option value="24">Rathnapura</option>
                    <option value="25">Vavuniya</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Register Customer</button>
        </form>
    </div>

    <?php require_once('../includes/footer.php'); // Include footer file ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
