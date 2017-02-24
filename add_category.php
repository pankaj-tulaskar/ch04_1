<?php
// Get the category data
$name = filter_input(INPUT_POST, 'name');

// Validate inputs
if ($name == null) {
    $error = "Invalid input";
    include('error.php');
} else {
    require_once('database.php');

    // Add the category to the database  
    $query = 'INSERT INTO categories_guitar1
                 (categoryName)
              VALUES
                 (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>