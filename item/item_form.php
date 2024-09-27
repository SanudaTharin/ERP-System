<?php
require_once('../includes/db_connect.php'); // Include database connection

$errors = [];
$item_code = '';
$item_name = '';
$quantity = '';
$unit_price = '';

// Fetch categories and subcategories
$categories = $conn->query("SELECT id, category FROM item_category");
$subcategories = $conn->query("SELECT id, sub_category FROM item_subcategory");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Item</title>

   
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Register Item</h2>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <form id="itemForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="mb-3">
                <label for="itemCode" class="form-label">Item Code</label>
                <input type="text" class="form-control" id="itemCode" name="item_code" value="<?php echo htmlspecialchars($item_code); ?>" required>
            </div>
            <div class="mb-3">
                <label for="itemName" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="itemName" name="item_name" value="<?php echo htmlspecialchars($item_name); ?>" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Item Category</label>
                <select class="form-select" id="category" name="category_id" required>
                    <option value="">Select Category</option>
                    <?php while ($row = $categories->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['category']); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="subcategory" class="form-label">Item Subcategory</label>
                <select class="form-select" id="subcategory" name="subcategory_id" required>
                    <option value="">Select Subcategory</option>
                    <?php while ($row = $subcategories->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['sub_category']); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>" required>
            </div>
            <div class="mb-3">
                <label for="unitPrice" class="form-label">Unit Price</label>
                <input type="number" class="form-control" id="unitPrice" name="unit_price" value="<?php echo htmlspecialchars($unit_price); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Register Item</button>
        </form>
    </div>

    <?php $conn->close(); // Close the database connection ?>

    <?php require_once('../includes/footer.php'); // Include footer file ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
