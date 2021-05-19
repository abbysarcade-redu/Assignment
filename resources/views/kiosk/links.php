



<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <title>Useful Links - Kiosk</title>
    <script src="../js/useful_links.js"></script>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>

<div class="content-page">
    <a class="button-pink-b" href="a_links.php">Add Link</a>
    <div class="table-wrapper">
        <table class="table table-hover">
            <thead class="table_header">
            <tr class="table_header">
                <th>Website</th>
                <th>Webpage</th>
                <th>Author</th>
                <th>Language</th>
                <th>Tags</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="link_table">
            <?php $row = $useful_links_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'useful_link');
            foreach ($row as $useful_link):
                $lang_preparedStatement->execute([$useful_link->lang]);
                $db_lang = $lang_preparedStatement->fetch();
                $tag_preparedStatement->execute([$useful_link->tags]);
                $db_tag = $tag_preparedStatement->fetch();?>
                <tr class="table filterTr <?php echo($db_lang['language_name'])?> <?php echo($db_tag['tag_slug'])?>" >
                    <td><?php echo($useful_link->website) ?></td>
                    <td><?php echo($useful_link->webpage) ?></td>
                    <td><?php echo($useful_link->author) ?></td>
                    <td><?php echo($db_lang['language_name']) ?></td>
                    <td><?php echo($db_tag['tag_name']) ?></td>
                    <td>
                        <a href="v_links.php?id=<?php echo($useful_link->link_id) ?>">
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <a href="e-links.php?id=<?php echo($useful_link->link_id) ?>">
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <a>
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

