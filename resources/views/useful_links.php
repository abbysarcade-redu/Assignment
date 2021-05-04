<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="nav-buffer">
<div class="contact-page">
    <div class="hero-image">
        <img src="Style/images/useful-links-banner.png" class="hero">
    </div>
    <div class="table-wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <div class="btn-group" data-goggle="buttons">
                        <label class="btn btn-info active">
                            <input type="radio" name="status" value="all" checked="checked">All
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="status" value="active">Javascript
                        </label>
                        <label class="btn btn-warning">
                            <input type="radio" name="status" value="active">HTML
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="active">SQL
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="active">CSS
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="active">PHP
                        </label>
                    </div>
                </div>
            </div>
        <table class="table table-striped table-hover">
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
            <tbody>
                <tr lan="Javascript">
                    <td>Soeng Souy</td>
                    <td>Bootstrap Data Table with Filter Row Feature | CSS JAVASCRIPT </td>
                    <td>Soeng Souy</td>
                    <td>Javascript</td>
                    <td>Table, Filter</td>
                    <td><a href="https://www.soengsouy.com/2020/04/bootstrap-data-table-with-filter-row.html?m=1" target="_blank" class="btn btn-sm manage">Click Me</a></td>
                </tr>
                <tr lang="HTML">
                    <td>The Site Wizard</td>
                    <td>How to Make Links Open in a New Window or Tab</td>
                    <td>Unknown</td>
                    <td>HTML</td>
                    <td>New Tab</td>
                    <td><a href="https://www.thesitewizard.com/html-tutorial/open-links-in-new-window-or-tab.shtml" target="_blank" class="btn btn-sm manage">Click Me</a></td>
                </tr>
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
