<?php
require_once('../includes/db_connect.php'); // Include DB connection

$query = "SELECT item.item_name, item_category.category, item_subcategory.sub_category, 
                 item.quantity 
          FROM item
          JOIN item_category ON item.item_category = item_category.id
          JOIN item_subcategory ON item.item_subcategory = item_subcategory.id
          GROUP BY item.item_name";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Report</title>

    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Item Report</h1>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['item_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['category']); ?></td>
                        <td><?php echo htmlspecialchars($row['sub_category']); ?></td>
                        <td><?php echo htmlspecialchars($row['quantity']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php $conn->close(); // Close the database connection ?>

    <?php require_once('../includes/footer.php'); // Include footer file ?>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
