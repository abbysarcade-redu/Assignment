<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="nav-buffer"></div>
<div class="contact-page">

    <div class="hero-image">
        <img src="Style/images/orders-banner.png" class="hero">
    </div>
</div>

<?php include ("layout/footer.php"); ?>

</body>
</html>

//////
$date = DateTime();
$id = rand(00000000, 99999999);
$order_number = (date_timestamp_get($date) . $id);
$user_id = rand(000000000, 9999999999);
$payment_ref = rand(000000, 9999999);
$order_status = 'basket';
$payment_ref = rand(0000000000, 99999999999);
$address_id = rand(000000, 999999);

$address_preparedStatement->execute(array(
$address_id,
'33',
'Tunstall Vale',
'password',
$address_id,
'1',
));
$_SESSION['user_id'] = $user_id;

$user_preparedStatement->execute(array(
$user_id,
'Abby',
'abby1311@outlook.co.uk',
'password',
$address_id,
'1',
));
$_SESSION['user_id'] = $user_id;

$transaction_preparedStatement->execute(array(
$id,
$order_number,
$user_id,
$date,
$payment_ref,
$total,
$order_status,
$payment_ref,
));
$_SESSION['order_number'] = $order_number;
