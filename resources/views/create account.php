<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Create Account</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/Create%20account.png" class="hero">
    </div>
    <form action="account_validator.php" name="account_form" method="post">
        <div class="central-buffer">
            <div class="form-row central-form">
                <div class="form-group">
                    <label class="games-txt">Full Name*</label>
                    <input class="form-style" name='name' placeholder="John Smith" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="games-txt">Email Address*</label>
                    <input class="form-style" name="email" type="email" placeholder="account@game-on.co.uk" required>
                </div>
                <div class="form-group">
                    <label class="games-txt">Contact Number</label>
                    <input class="form-style" name="contact_number" maxlength="11" minlength="11" placeholder="07123456789">
                </div>
                <div class="form-group col-md-6">
                    <label class="games-txt">Password*</label>
                    <input class="form-style" type="password" name="password" id="psw" pattern="(?=.*[1-9]).(?=.*[a-z]).(?=.*[A-Z]).(?=^.*{8}$)" placeholder="Password1!" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="games-txt">Confirm Password*</label>
                    <input class="form-style" type="password" name="conf_password" id="conf-psw" placeholder="Password1!" required>
                </div>
                <button type="submit" class="yellow-btn">
                    Create Account
                </button>
            </div>
        </div>
    </form>
    <div id="message">
        <h3>Password must contain the following;</h3>
        <ul>
            <p id="letter" class="invalid"> A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid"> A <b>capital</b> letter</p>
            <p id="number" class="invalid"> A <b>number</b></p>
            <p id="length" class="invalid"> Minimum <b>8 characters</b></p>
        </ul>

    </div>
    <script src="../js/accountValidator.js"></script>
</div>
<div class="buffer-space">

</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>
