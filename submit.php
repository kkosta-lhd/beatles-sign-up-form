<?php
require_once '_includes/data.php';
require_once '_includes/UserInfo.php';

$selectedSalutation = 0;
if(isset($_POST["select2"])) {
    $selectedSalutation = $_POST["select2"];
}

$favBeatle = 0;
if(isset($_POST["beatles"]))
{
    $favBeatle =  $_POST["beatles"];
}


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
<p> Welcome <?php echo $options[$selectedSalutation]." ".$_POST["first_name"]." ".$_POST["last_name"]; ?>!</p>
<p>Your email address is <?php echo $_POST["email"]; ?>.</p>
<p>Your favorite Beatle is 
<?php echo $beatles[$favBeatle]; ?> . (Really??)</p>
<p>Your password is <?php echo $_POST ["password"]; ?>.</p>
    <?php
    $username =
        substr($_POST["first_name"], 0, 2) .
        substr($_POST["first_name"], strlen($_POST["last_name"]) - 2, 2) .
        $_POST["beatles"] .
        substr($beatles[$favBeatle], 0, 2) .
        substr($beatles[$favBeatle], strlen($beatles[$favBeatle]) - 1, 1);

    ?>
<p>Your new username is <?php echo $username; ?>.</p>


</div>
</body>
</html>