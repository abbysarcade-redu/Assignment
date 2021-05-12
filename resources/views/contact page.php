<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="nav-buffer"></div>

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/contact-us-banner.png" class="hero">
    </div>
    <div class="message-content-block">
        <h1>Send Us a Message!</h1>
        <p class="message-content">If you have any queries or question, please do not hesitate to send us a message using the form below and a member of our customer service team will get back in touch as soon as possible. We look forward to speaking to you. </p>
    </div>
    <div class="contact-page-layout">
        <form action="contact_send.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="Full Name*" name="customer_name" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Email Address*" name="customer_email" required>
                </div>
            </div>
            <div class="form-group">
                <input class="form-style" placeholder="Contact Number" name="customer_phone_number">
            </div>
            <div class="form-group">
                <textarea class="form-style-txt" rows="4" placeholder="Message*" name="customer_message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <div class="contact-page-layout">
        <div>
            <h1 class="is-blue"> Where to Find Us.</h1>
            <p class="is-blue">The David Coldman Informatics Centre,</p>
            <p class="is-blue">Monkwearmouth,</p>
            <p class="is-blue">Sunderland,</p>
            <p class="is-blue">SR6 0DD</p>

            <p class="is-blue">Located in <a class="is-pink">The University of Sunderland.</a></p>
        </div>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=SR6%200DD&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:auto;width:auto;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;border-radius: 20px;}</style></div></div>    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>

