<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Useful Links</title>
    <script src="../js/link_search.js"></script>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/useful-links-banner.png" class="hero">
    </div>
    <div class="table-wrapper">
            <div class="row">
                <div class="search_container">
                        <div class="dropdown">
                            <button onclick="langFunction()" class="dropbtn">Language</button>
                            <div id="langDropdown" class="dropdown-content">
                                <input type="text" placeholder="Search.." id="langInput" onkeyup="langFilterFunction()">
                                <?php $row = $all_lang_preparedStatement->fetchAll();
                                foreach($row as $lang):?>
                                <a onclick="filterSelection('<?php echo ($lang['language_name']) ?>"><?php echo ($lang['language_name']) ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button onclick="tagFunction()" class="dropbtn">Tag</button>
                            <div id="myDropdown" class="dropdown-content">
                                <input type="text" placeholder="Search.." id="tagInput" onkeyup="tagFilterFunction()">
                                <?php $row = $all_tags_preparedStatement->fetchAll();
                                foreach ($row as $tag): ?>
                                    <a href="#about"><?php echo($tag['tag_name']) ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                </div>
            </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Website</th>
                <th>Webpage</th>
                <th>Author</th>
                <th>Language</th>
                <th>Tags</th>
                <th>Visit</th>
            </tr>
            </thead>
            <tbody id="link_table">
            <?php $row = $useful_links_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'useful_link');
            foreach ($row as $useful_link):
                $lang_preparedStatement->execute([$useful_link->lang]);
                $db_lang = $lang_preparedStatement->fetch();
                $tag_preparedStatement->execute([$useful_link->tags]);
                $db_tag = $tag_preparedStatement->fetch(); ?>
                <tr class="table filterTr" lang="Javascript">
                    <td><?php echo($useful_link->website) ?></td>
                    <td><?php echo($useful_link->webpage) ?></td>
                    <td><?php echo($useful_link->author) ?></td>
                    <td><?php echo($db_lang['language_name']) ?></td>
                    <td><?php echo($db_tag['tag_name']) ?></td>
                    <td><a href="<?php echo($useful_link->url) ?>" target="_blank" class="btn btn-sm manage">Click Me</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<script src="../js/ProductSearch.js"    ></script>
<div class="buffer-space">

</div>

</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>
