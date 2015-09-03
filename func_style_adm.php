<?php
function style_adm() { ?>
    <style type="text/css">
	html{background:none;}
        .login h1 a {
	background-image: url(img/logo_login.png);
	border-radius: 25px 0px;
	border: 1px solid white;
	box-shadow: 10px 10px 8px #000;}

	.login form{
	border-radius: 50px 10px;
	border: solid rgba(255, 108, 0, 0.42);
	box-shadow: 10px 10px 8px #000;
	background-color: #A8A8A8;}

	.login form .input, .login form input[type="checkbox"], .login input[type="text"]{
	border-radius: 20px 5px;
	font-style: italic;}

	body{
	background:url(img/overlay.png);
	font-size: 18px;
	font-style: italic;}

	.login label{
	color: white;
	font-size: 22px;
	font-style: italic;}

	.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
	border-radius: 15px 0;
	border-color: -moz-use-text-color;
	}

	.login #login_error {visibility: hidden;}

	.login .message{border-radius: 25px 0;}

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'style_adm' );
 ?>
