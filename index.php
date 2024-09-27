<?php
require_once('includes/db_connect.php'); // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to the ERP System</h1>
            <p class="lead">Manage customers, items, and generate insightful reports with ease.</p>
            <hr class="my-4">
        </div>

        <!-- Management sections -->
        <div class="row">
            <!-- Customer Management Section -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Customer Management</h2>
                        <p class="card-text">Register and manage your customers here.</p>
                        <a href="customer/customer_form.php" class="btn btn-primary mb-2">Register New Customer</a>
                        <a href="customer/customer_list.php" class="btn btn-primary mb-2">View Customer List</a>
                    </div>
                </div>
            </div>

            <!-- Item Management Section -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Item Management</h2>
                        <p class="card-text">Register new items and manage your inventory.</p>
                        <a href="item/item_register.php" class="btn btn-primary mb-2">Register New Item</a>
                        <a href="item/item_list.php" class="btn btn-primary mb-2">View Item List</a>
                    </div>
                </div>
            </div>

            <!-- Reports Section -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Reports</h2>
                        <p class="card-text">Generate detailed reports for invoices and items.</p>
                        <a href="reports/invoice_report.php" class="btn btn-primary mb-2">Generate Invoice Report</a>
                        <a href="reports/invoice_item_report.php" class="btn btn-primary mb-2">Generate Invoice Item Report</a>
                        <a href="reports/item_report.php" class="btn btn-primary mb-2">Generate Item Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('includes/footer.php'); // Include footer file ?>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
