<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!-- execute the query from db.php using the id passed to the the page from the URL -->
<?php $kiosk_link_preparedStatement->execute([$_GET['id']]);
// fetch the data returned by the query
$link = $kiosk_link_preparedStatement->fetch();?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Link View - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <!-- using the id passed to the the page from the URL, pass the id to view_links -->
            <a href="edit_links.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <!-- using the id passed to the the page from the URL, pass the id to link_delete -->
            <a href="link_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <h1 class="kiosk_title">Link Id</h1>
        <!-- Display the link id which was passed from the URL -->
        <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
        <hr>
        <h1 class="kiosk_title">Website</h1>
        <!-- Display the website returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($link['website']) ?></p>
        <hr>
        <h1 class="kiosk_title">Webpage</h1>
        <!-- Display the webpage returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($link['webpage']) ?></p>
        <hr>
        <h1 class="kiosk_title">Author</h1>
        <!-- Display the Author returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($link['author']) ?></p>
        <hr>
        <h1 class="kiosk_title">Language</h1>
        <!-- execute the query from db.php using the language id returned from the query on line 8 -->
        <?php $lang_preparedStatement->execute([$link['lang']]);
        // fetch the data returned by the query
        $link_lang = $lang_preparedStatement->fetch(); ?>
        <!-- Display the language name returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($link_lang['language_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">Tags</h1>
        <!-- execute the query from db.php using the tag id returned from the query on line 8 -->
        <?php $tag_preparedStatement->execute([$link['tags']]);
        // fetch the data returned by the query
        $link_tag = $tag_preparedStatement->fetch();?>
        <!-- Display the tag name returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($link_tag['tag_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">URL</h1>
        <!-- Display the url returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($link['url']) ?></p>
    </div>
    <div class="buffer-space"></div>
</div>
<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
