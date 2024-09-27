<?php
require_once('../includes/db_connect.php'); // Include DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];

    $query = "SELECT invoice.invoice_no, invoice.date, customer.first_name, customer.district, 
                     invoice.item_count, invoice.amount 
              FROM invoice 
              JOIN customer ON invoice.customer = customer.id 
              WHERE invoice.date BETWEEN '$from_date' AND '$to_date'";
    $result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Report</title>

    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Invoice Report</h1>
        <form method="POST" action="invoice_report.php">
            <div class="form-group">
                <label>From Date:</label>
                <input type="date" name="from_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>To Date:</label>
                <input type="date" name="to_date" class="form-control" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php if (isset($result)) { ?>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>District</th>
                        <th>Item Count</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['invoice_no']); ?></td>
                            <td><?php echo htmlspecialchars($row['date']); ?></td>
                            <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['district']); ?></td>
                            <td><?php echo htmlspecialchars($row['item_count']); ?></td>
                            <td><?php echo htmlspecialchars($row['amount']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>

    <?php $conn->close(); // Close the database connection ?>

    <?php require_once('../includes/footer.php'); // Include footer file ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
