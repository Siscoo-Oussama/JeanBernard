<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank you</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
        <img src="http://hbsmorocco2023.com/wp-content/uploads/2022/09/AK-Company-Morocco-Center-Grey-1.png" style="width: 280px;margin-bottom: 100px;
        ">
        <br><br>
		<h1 class="site-header__title" data-lead-id="site-header-title" style="font-size: 20px;">Thank You!</h1>
	</header>

	<div class="main-content">
		<!--<i class="fa fa-check main-content__checkmark" id="checkmark"></i>-->
		<p class="main-content__body" data-lead-id="main-content-body">We received your purchase request, Thank you for registering, we’re looking forward to seeing you there.</p>
        <br>
        <h3 style="text-align: left;" data-lead-id="main-content-body">Order Details :</h3>
        <p style="font-size: 15px;text-align: left;" data-lead-id="main-content-body">Full Name : {{ $data['fullname'] }}</p>
        <p style="font-size: 15px;text-align: left;" data-lead-id="main-content-body">Email : {{ $data['email'] }}</p>
        <p style="font-size: 15px;text-align: left;" data-lead-id="main-content-body">Address : {{ $data['adress'] }}</p>
        <p style="font-size: 15px;text-align: left;" data-lead-id="main-content-body">Amount Paid : {{ $data['price'] }} MAD</p>
        <p style="font-size: 15px;text-align: left;" data-lead-id="main-content-body">Room Type :

            <?php

                if ($data['single'] == "1" ) {
                    echo "Single";
                }elseif ($data['couple'] == "1" ) {
                    echo "Couple";
                }

            ?>

        </p>
        <p style="font-size: 15px;text-align: left;" data-lead-id="main-content-body">Room Type :

            <?php

                if ($data['deluxeroom'] == "1" ) {
                    echo "Deluxe Room";
                }elseif ($data['juniorsuite'] == "1" ){
                    echo "Junior Suite";
                }elseif ($data['prestigesuite'] == "1" ) {
                    echo "Prestige Suite";
                }elseif ($data['roh'] == "1" ) {
                    echo "Superior Room";
                }

            ?>

        </p>

    </div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Hbsmorocco2023 | Copyright ©2022 | All Rights Reserved</p>
	</footer>
</body>
</html>
