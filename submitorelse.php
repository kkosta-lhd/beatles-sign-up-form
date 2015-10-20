<?php

class beatles_form  {

	private $signup_form;
	// private $status = 'init';
	private $title = array();
	private $fav_beatle = array();
	private $skip_mail = false;
	private $response = '';
	// private $invalid_fields = array();	
	?>
	
<p>Will they get back together across time and dimension? We have the answers!</p>
<p> Welcome <?php echo $_POST["title"]. " " .$_POST["first_name"]." ".$_POST["last_name"]; ?>!</p>
<p>Your email address is <?php echo $_POST["email"]; ?>.</p>
<p>Your favorite Beatle is <?php echo $_POST["favBeatle"] ?>. (Really??)</p>
<p>Your new username is .</p>
<p>Your password is <?php echo $_POST ["password"]; ?>.</p>
