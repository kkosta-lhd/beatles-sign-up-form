<?php
require_once '_includes/data.php';
require_once '_includes/selectmenu.php';
require_once '_includes/userinfo.php';

//instantiates classes
$titleMenu = new selectMenu;
$titleMenu->setOptions($title);

$beatlesMenu = new selectMenu;
$beatlesMenu->setOptions($favBeatle);

?>

<!doctype html>
<html>
<head>
<link href="_style/style.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">
<title>Beatles Reunion</title>
</head>
<body>
<div id="beatlesform">
<h1>Sign Up for Beatles Updates</h1>
<p>Will they get back together across time and dimension? We have the answers!</p>
<form class="form" method="post" action="submit.php">
	<p>Title</p>
    <?php echo $titleMenu->makeMenu(); ?>
    <p>First Name</p>
    <input type="text" name ="first_name" placeholder= "Enter first name" />
	<p>Last Name</p>
    <input type="text" name ="last_name" placeholder= "Enter last name" />
	<p>Email</p>
    <input type="text" name ="email" placeholder= "Enter email" />
    <p>Password</p>
    <input type="text" name ="password" placeholder= "Enter password" />
    <p>Favorite Beatle</p>
    <?php echo $beatlesMenu->makeMenu(); ?>
    <p>&nbsp;</p>
    <input type="submit" name="submit" value= "Submit"/>
</form>

</div>
</body>
</html>


