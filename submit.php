<?php
require_once '_includes/data.php';

class beatles_submission
{
    public $beatleName='';
    public function get_posted_data($name = '')
    {
        if (!empty($name)) {
            if (isset($this->posted_data[$name])) {
                return $this->posted_data[$name];
            } else {
                return null;
            }
        }
    }


    function getBeatle()
    {

        $beatleName = $favBeatle [$this->beatle];//userInfo->Beatle (key)
    }
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
<p> Welcome <?php echo $_POST["titleMenu"]." ".$_POST["first_name"]." ".$_POST["last_name"]; ?>!</p>
<p>Your email address is <?php echo $_POST["email"]; ?>.</p>
<p>Your favorite Beatle is 
<?php echo $beatleName; ?> . "(Really??)"</p>
<p>Your new username is <?php echo $userInfo->username(); ?>.</p>
<p>Your password is <?php echo $_POST ["password"]; ?>.</p>

</div>
</body>
</html>