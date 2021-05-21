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
    <title>Edit Link - Kiosk</title>
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
            <a href="view_links.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <!-- using the id passed to the the page from the URL, pass the id to link_delete -->
            <a href="link_delete.php?id=<?php echo($_GET['id']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <!-- To create a form. The inputs are used in sections where we would like the user to type in a response, all of these are required fields. I also have included a dropdown select which only provides responses that are predefined in the database. Given more time, I would have liked to have added the functionality to add another option.
        The action on here is to send to the link_edit file which takes the inputs and adds to the database using the post method.
        The id is also passed to the new page.-->
        <form action="link_edit.php?id=<?php echo($_GET['id']) ?>" method="post">
            <hr>
            <h1 class="kiosk_title">Link Id</h1>
            <!-- Display the link id which was passed from the URL -->
            <p class="kiosk_content"><?php echo($_GET['id']) ?></p>
            <hr>
            <h1 class="kiosk_title">Website</h1>
            <!-- Display the website returned from the query on line 8 -->
            <input name="website" class="kiosk_input" value="<?php echo($link['website']) ?>" required/>
            <hr>
            <h1 class="kiosk_title">Webpage</h1>
            <!-- Display the webpage returned from the query on line 8 -->
            <input name="webpage" class="kiosk_input" value="<?php echo($link['webpage']) ?>" required/>
            <hr>
            <h1 class="kiosk_title">Author</h1>
            <!-- Display the Author returned from the query on line 8 -->
            <input name="author" class="kiosk_input" value="<?php echo($link['author']) ?>" required/>
            <hr>
            <h1 class="kiosk_title">Language</h1>
            <!-- execute the query from db.php using the language id returned from the query on line 8 -->
            <?php $lang_preparedStatement->execute([$link['lang']]);
            // fetch the data returned by the query
            $link_lang = $lang_preparedStatement->fetch(); ?>
            <select class="kiosk_drop" name="lang">
                <!-- Execute the statement from db.php. This statement is used to return a list of all the elements stored in the language table of the database -->
                <?php $get_lang_preparedStatement->execute();
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $row = $get_lang_preparedStatement->fetchAll();
                //to iterate through the array returned from the query above.
                foreach ($row as $lang=>$name):
                    // to check if this is the language that is stored against this item in the database
                    if ($link_lang['language_name'] == $name['language_name']):?>
                        <!-- if yes then this will be the selected value on the drop down when the page loads. The id is used for the value to allow for this to easily updated in the database without having to run extra queries-->
                        <option value="<?php print_r($name['language_id']) ?>" selected>
                            <!-- To display the actual name of the entry for easier use -->
                            <?php print_r($name['language_name']) ?>
                        </option>
                    <?php else: ?>
                        <!-- if no then this will not be the selected value on the drop down when the page loads. The id is used for the value to allow for this to easily updated in the database without having to run extra queries-->
                        <option value="<?php print_r($name['language_id']) ?>">
                            <!-- To display the actual name of the entry for easier use -->
                            <?php print_r($name['language_name']) ?>
                        </option>
                    <?php endif;?>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">Tags</h1>
            <!-- execute the query from db.php using the tags id returned from the query on line 8 -->
            <?php $tag_preparedStatement->execute([$link['tags']]);
            // fetch the data returned by the query
            $link_tag = $tag_preparedStatement->fetch();?>
            <select class="kiosk_drop" name="tags">
                <!-- Execute the statement from db.php. This statement is used to return a list of all the elements stored in the tags table of the database -->
                <?php $get_tag_preparedStatement->execute();
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $row = $get_tag_preparedStatement->fetchAll();
                //to iterate through the array returned from the query above.
                foreach ($row as $tag=>$name):
                    // to check if this is the language that is stored against this item in the database
                    if ($link_tag['tag_name'] == $name['tag_name']):?>
                        <!-- if yes then this will be the selected value on the drop down when the page loads. The id is used for the value to allow for this to easily updated in the database without having to run extra queries-->
                        <option value="<?php print_r($name['tag_id']) ?>" selected>
                            <!-- To display the actual name of the entry for easier use -->
                            <?php print_r($name['tag_name']) ?>
                        </option>
                    <?php else: ?>
                        <!-- if no then this will not be the selected value on the drop down when the page loads. The id is used for the value to allow for this to easily updated in the database without having to run extra queries-->
                        <option value="<?php print_r($name['tag_id']) ?>">
                            <!-- To display the actual name of the entry for easier use -->
                            <?php print_r($name['tag_name']) ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">URL</h1>
            <!-- Display the URL returned from the query on line 8 -->
            <input name="url" class="kiosk_input" value="<?php echo($link['url']) ?>" required/>
            <hr>
            <!-- this button is set to be a submit which means it will direct to the page in the action of the form. -->
            <button type="submit">Save</button>
        </form>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
