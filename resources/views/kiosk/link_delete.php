<?php
include("../../tools/db.php");
$delete_link_preparedStatement->execute([$_GET['id']]);

include("links.php"); ?>
