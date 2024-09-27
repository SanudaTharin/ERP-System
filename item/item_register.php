<?php
require_once('../includes/db_connect.php'); // Include database connection


// Initialize variables
$item_code = $item_name = $category_id = $subcategory_id = $quantity = $unit_price = "";
$errors = [];

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    if (empty($_POST["item_code"])) {
        $errors[] = "Item code is required.";
    } else {
        $item_code = htmlspecialchars(trim($_POST["item_code"]));
    }

    if (empty($_POST["item_name"])) {
        $errors[] = "Item name is required.";
    } else {
        $item_name = htmlspecialchars(trim($_POST["item_name"]));
    }

    if (empty($_POST["category_id"])) {
        $errors[] = "Item category is required.";
    } else {
        $category_id = htmlspecialchars(trim($_POST["category_id"]));
    }

    if (empty($_POST["subcategory_id"])) {
        $errors[] = "Item subcategory is required.";
    } else {
        $subcategory_id = htmlspecialchars(trim($_POST["subcategory_id"]));
    }

    if (empty($_POST["quantity"])) {
        $errors[] = "Quantity is required.";
    } else {
        $quantity = htmlspecialchars(trim($_POST["quantity"]));
    }

    if (empty($_POST["unit_price"])) {
        $errors[] = "Unit price is required.";
    } else {
        $unit_price = htmlspecialchars(trim($_POST["unit_price"]));
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO item (item_code, item_name, item_category, item_subcategory, quantity, unit_price) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssis", $item_code, $item_name, $category_id, $subcategory_id, $quantity, $unit_price);
        $stmt->execute();
        $stmt->close();

        // Redirect to item list page
        header("Location: item_list.php");
        exit();
    }
}

// Fetch categories and subcategories for dropdowns
$categories = $conn->query("SELECT * FROM item_category");
$subcategories = $conn->query("SELECT * FROM item_subcategory");

// Include the form
include('item_form.php');

require_once('../includes/footer.php'); // Include footer
