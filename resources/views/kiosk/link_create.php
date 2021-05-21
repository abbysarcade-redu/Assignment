<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!-- execute the query from db.php using the data entered on add_links -->
<?php $kiosk_link_add_preparedStatement->execute(array(
    $_POST['website'],
    $_POST['webpage'],
    $_POST['author'],
    $_POST['lang'],
    $_POST['tags'],
    $_POST['url']
));

// get the id number of the entry for the view page
$_GET['id'] = $pdo->lastInsertId();

// include the view links page, using the get set above it will display the new link
include("view_links.php"); ?>
