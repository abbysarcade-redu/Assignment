<?php
include("../../tools/db.php");
$delete_user_preparedStatement->execute([$_GET['id']]);

include("users.php"); ?>
