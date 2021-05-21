<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Useful Links - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <a class="button-pink-b" href="add_links.php">Add Link</a>
    <div class="table-wrapper">
        <!-- create the table -->
        <table class="table table-hover">
            <thead class="table_header">
            <!-- table headers -->
            <tr class="table_header">
                <th>Website</th>
                <th>Webpage</th>
                <th>Author</th>
                <th>Language</th>
                <th>Tags</th>
                <th></th>
            </tr>
            </thead>
            <!-- table entries -->
            <tbody id="link_table">
            <!-- fetch the return from the query from db.php query. Using fetchAll to access all of the items returned, using a class to call items. -->
            <?php $row = $useful_links_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'useful_link');
            //to iterate through the array returned from the query above.
            foreach ($row as $useful_link):
                //Execute the statement from db.php. This statement is used to returnthe elements stored in the lang table of the database
                $lang_preparedStatement->execute([$useful_link->lang]);
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $db_lang = $lang_preparedStatement->fetch();
                //Execute the statement from db.php. This statement is used to return the elements stored in the tags table of the database
                $tag_preparedStatement->execute([$useful_link->tags]);
                //fetch the return from this query. Using fetchAll to access all of the items returned.
                $db_tag = $tag_preparedStatement->fetch();?>
                <!-- create a table row with a class that associates it to the language and the tag-->
                <tr class="table filterTr <?php echo($db_lang['language_name'])?> <?php echo($db_tag['tag_slug'])?>" >
                    <!-- Display the webpage returned from the query on line 34 -->
                    <td><?php echo($useful_link->website) ?></td>
                    <!-- Display the website returned from the query on line 34 -->
                    <td><?php echo($useful_link->webpage) ?></td>
                    <!-- Display the author returned from the query on line 34 -->
                    <td><?php echo($useful_link->author) ?></td>
                    <!-- Display the language name returned from the query on line 40 -->
                    <td><?php echo($db_lang['language_name']) ?></td>
                    <!-- Display the tag name returned from the query on line 44 -->
                    <td><?php echo($db_tag['tag_name']) ?></td>
                    <td>
                        <!-- using the id returned from the query on line 34, pass the id to view_links -->
                        <a href="view_links.php?id=<?php echo($useful_link->link_id) ?>">
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <!-- using the id returned from the query on line 34, pass the id to edit_links -->
                        <a href="edit_links.php?id=<?php echo($useful_link->link_id) ?>">
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <!-- using the id returned from the query on line 34, pass the id to link_delete -->
                        <a href="link_delete.php?id=<?php echo($useful_link->link_id) ?>">
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
