
<?php include ("../../tools/class_controller.php"); ?>
// include the database file so we can access the queries
<?php include ("../../tools/db.php"); ?>

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
        <form action="link_create.php" method="post">
            <hr>
            <h1 class="kiosk_title">Website</h1>
            <input name="website" class="kiosk_input" placeholder="Name of site"/>
            <hr>
            <h1 class="kiosk_title">Webpage</h1>
            <input name="webpage" class="kiosk_input" placeholder="Name of page"/>
            <hr>
            <h1 class="kiosk_title">Author</h1>
            <input name="author" class="kiosk_input" placeholder="Page Author"/>
            <hr>
            <h1 class="kiosk_title">Language</h1>
            <select class="kiosk_drop" name="lang">
                <?php $get_lang_preparedStatement->execute();
                $row = $get_lang_preparedStatement->fetchAll();
                print_r($row);
                foreach ($row as $lang=>$name):?>
                    <option value="<?php print_r($name['language_id']) ?>"><?php print_r($name['language_name']) ?></option>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">Tags</h1>
            <select class="kiosk_drop" name="tags">
                <?php $get_tag_preparedStatement->execute();
                $row = $get_tag_preparedStatement->fetchAll();
                foreach ($row as $tag=>$name):?>
                    <option value="<?php print_r($name['tag_id']) ?>"><?php print_r($name['tag_name']) ?></option>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">URL</h1>
            <input name="url" type="url" class="kiosk_input" placeholder="www.game-on.co.uk"/>
            <hr>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
