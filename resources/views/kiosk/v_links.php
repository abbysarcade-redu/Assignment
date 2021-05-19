<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<?php $kiosk_link_preparedStatement->execute([$_GET['id']]);
$link = $kiosk_link_preparedStatement->fetch();?>
<!DOCTYPE html>
<header>
    <title> - Kiosk</title>
    <script src="../js/useful_links.js"></script>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <a href="e-links.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <a href="link_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <h1 class="kiosk_title">Link Id</h1>
        <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
        <hr>
        <h1 class="kiosk_title">Website</h1>
        <p class="kiosk_content"><?php echo($link['website']) ?></p>
        <hr>
        <h1 class="kiosk_title">Webpage</h1>
        <p class="kiosk_content"><?php echo($link['webpage']) ?></p>
        <hr>
        <h1 class="kiosk_title">Author</h1>
        <p class="kiosk_content"><?php echo($link['author']) ?></p>
        <hr>
        <h1 class="kiosk_title">Language</h1>
        <?php $lang_preparedStatement->execute([$link['lang']]);
        $link_lang = $lang_preparedStatement->fetch(); ?>
        <p class="kiosk_content"><?php echo($link_lang['language_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">Tags</h1>
        <?php $tag_preparedStatement->execute([$link['tags']]);
        $link_tag = $tag_preparedStatement->fetch();?>
        <p class="kiosk_content"><?php echo($link_tag['tag_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">URL</h1>
        <p class="kiosk_content"><?php echo($link['url']) ?></p>
    </div>
    <div class="buffer-space"></div>
</div>
