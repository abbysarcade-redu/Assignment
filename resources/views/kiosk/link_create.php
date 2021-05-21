<?php include ("../../tools/db.php"); ?>
<?php $kiosk_link_add_preparedStatement->execute(array(
    $_POST['website'],
    $_POST['webpage'],
    $_POST['author'],
    $_POST['lang'],
    $_POST['tags'],
    $_POST['url']
));

$_GET['id'] = $pdo->lastInsertId();

include("view_links.php"); ?>
