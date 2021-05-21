<?php
//include the database file so we can access the queries.
include("../../tools/db.php");

//execute the query from db.php using the id passed by the URL
$delete_link_preparedStatement->execute([$_GET['id']]);


//display the links page
include("links.php"); ?>
