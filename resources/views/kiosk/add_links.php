<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>

<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Add Link - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <!-- To create a form. The inputs are used in sections where we would like the user to time in a response, all of these are required fields. We also have included a dropdown select which only provides responses that are predefined in the database. Given more time, I would have liked to have added the functionality to add another option.
        The action on here is to send to the link_create file which takes the inputs and adds to the database using the post method. -->
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
                <!-- Execute the statement from db.php. This statement is used to return a list of all the elements stored in the language table of the database -->
                <?php $get_lang_preparedStatement->execute();
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $row = $get_lang_preparedStatement->fetchAll();
                //to iterate through the array returned from the query above.
                foreach ($row as $lang=>$name):?>
                <!-- using the foreach, it now prints the below line for each item returned in $row, using php to return the specific elements required at each time. -->
                    <option value="<?php print_r($name['language_id']) ?>"><?php print_r($name['language_name']) ?></option>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">Tags</h1>
            <select class="kiosk_drop" name="tags">
                <!-- Execute the statement from db.php. This statement is used to return a list of all the elements stored in the tags table of the database -->
                <?php $get_tag_preparedStatement->execute();
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $row = $get_tag_preparedStatement->fetchAll();
                //to iterate through the array returned from the query above.
                foreach ($row as $tag=>$name):?>
                    <!-- using the foreach, it now prints the below line for each item returned in $row, using php to return the specific elements required at each time. -->
                    <option value="<?php print_r($name['tag_id']) ?>"><?php print_r($name['tag_name']) ?></option>
                <?php endforeach; ?>
            </select>
            <hr>
            <h1 class="kiosk_title">URL</h1>
            <input name="url" type="url" class="kiosk_input" placeholder="www.game-on.co.uk"/>
            <hr>
            <!-- this button is set to be a submit which means it will direct to the page in the action of the form. -->
            <button type="submit">Save</button>
        </form>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
