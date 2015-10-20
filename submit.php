<!doctype html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="_style/style.css">

<style type="text/css">
body {margin: auto;background-image:url(_images/beatles.jpg);background-repeat: no-repeat;background-attachment: fixed; background-position: top; }

#beatlesform {opacity: 0.9; filter: alpha(opacity=90); /* For IE8 and earlier */ margin: auto;		width:60%;background-color:#fff;padding:20px;border-left:solid 1px #000;border-right:solid 1px #000; border-bottom:solid 1px #000;}

.form {opacity: 1; filter: alpha(opacity=100);}
</style>
<meta charset="UTF-8">
<title>Beatles Reunion</title>
</head>
<body>
<div id="beatlesform">
<h1>Sign Up for Beatles Updates</h1>
<p>Will they get back together across time and dimension? We have the answers!</p>
<p> Welcome <?php echo $_POST["title"]. " " .$_POST["first_name"]." ".$_POST["last_name"]; ?>!</p>
<p>Your email address is <?php echo $_POST["email"]; ?>.</p>
<p>Your favorite Beatle is <?php echo $_POST["favBeatle"] ?>. (Really??)</p>
<p>Your new username is .</p>
<p>Your password is <?php echo $_POST ["password"]; ?>.</p>



</div>
</body>
</html>





<?php
class beatles_submission {
    public function get_posted_data($name = '')
    {
        if (!empty($name)) {
            if (isset($this->posted_data[$name])) {
                return $this->posted_data[$name];
            } else {
                return null;
            }
        }

        return $this->posted_data;
    }
}
?>

