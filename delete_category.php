<?php
require_once('database.php');

// Get IDs
$categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($categoryID != false) {
    $query = 'DELETE FROM categories_guitar1
              WHERE categoryID = :name';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $categoryID);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');
