<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Login</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/login-banner.png" class="hero">
    </div>
        <form action="login_validator.php" name="login_form" method="post">
            <div class="central-buffer">
                <div class="central-login-form">
                    <div class="col-md-6">
                        <input class="form-style" placeholder="Email Address*" name="email" type="email" required>
                    </div>
                    <div class="col-md-6">
                        <input class="form-style" placeholder="Password*" name="password" type="password" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="button-pink">
                            Login
                        </button>
                    </div>
                    <div class="col-md-6">
                        <a class="white-btn" href="create%20account.php">
                            Create an Account
                        </a>
                    </div>

                </div>
            </div>
        </form>

    <div class="buffer-space"></div>
    <div class="buffer-space"></div>
    <div class="buffer-space"></div>
</div>


<?php include ("layout/footer.php"); ?>

</body>
</html>
