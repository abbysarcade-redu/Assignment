<?php
//include the database file so we can access the queries.
include("../../tools/db.php");
//execute the query from db.php using the id passed by the URL
$kiosk_link_update_preparedStatement->execute(array(
    $_POST['website'],
    $_POST['webpage'],
    $_POST['author'],
    $_POST['url'],
    $_GET['id']
    ));
//display the links edit page
include("edit_links.php"); ?>
