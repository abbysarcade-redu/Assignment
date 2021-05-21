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
            <a href="view_links.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <a href="link_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <form action="link_edit.php?id=<?php echo($_GET['id']) ?>" method="post">
            <hr>
            <h1 class="kiosk_title">Link Id</h1>
            <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
            <hr>
            <h1 class="kiosk_title">Website</h1>
            <input name="website" class="kiosk_input" value="<?php echo($link['website']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Webpage</h1>
            <input name="webpage" class="kiosk_input" value="<?php echo($link['webpage']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Author</h1>
            <input name="author" class="kiosk_input" value="<?php echo($link['author']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Language</h1>
            <?php $lang_preparedStatement->execute([$link['lang']]);
            $link_lang = $lang_preparedStatement->fetch(); ?>
            <select class="kiosk_drop" name="lang">
                <?php $get_lang_preparedStatement->execute();
                $row = $get_lang_preparedStatement->fetchAll();
                print_r($row);
                foreach ($row as $lang=>$name):
                    if ($link_lang['language_name'] == $name['language_name']):?>
                        <option value="<?php print_r($name['language_id']) ?>" selected>
                            <?php print_r($name['language_name']) ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php print_r($name['language_id']) ?>">
                            <?php print_r($name['language_name']) ?>
                        </option>
                    <?php endif;?>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">Tags</h1>
            <?php $tag_preparedStatement->execute([$link['tags']]);
            $link_tag = $tag_preparedStatement->fetch();?>
            <select class="kiosk_drop" name="tags">
                <?php $get_tag_preparedStatement->execute();
                $row = $get_tag_preparedStatement->fetchAll();
                foreach ($row as $tag=>$name):
                    if ($link_tag['tag_name'] == $name['tag_name']):?>
                        <option value="<?php print_r($name['tag_id']) ?>" selected><?php print_r($name['tag_name']) ?></option>
                    <?php else: ?>
                        <option value="<?php print_r($name['tag_id']) ?>"><?php print_r($name['tag_name']) ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">URL</h1>
            <input name="url" class="kiosk_input" value="<?php echo($link['url']) ?>"/>
            <hr>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
