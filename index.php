<?php
$title = ['Ms.','Mrs.','Mr.','None' => NULL];
$favBeatle = ['George','Ringo','Paul','John'];

class selectMenu {
    private $items;  // array of items
    private $options; // hold all html options
    private $selectMenu; // final select menu

    function __construct($itemArray='') {
        $this->items = $itemArray;
    }

    private function buildOptions() {
        $this->options = "<option value=''>Select One</option>";
        forEach($this->items as $item) {
            $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
        }
    }

    private function buildSelect() {
        $this->selectMenu = "<select>".$this->options."</select>";
    }

    public function setOptions($array) {
        $this->items = $array;
    }

    public function makeMenu() {
        $this->buildOptions();
        $this->buildSelect();
        return $this->selectMenu;
    }
}

$titleMenu = new selectMenu;
$titleMenu->setOptions($title);

$beatlesMenu = new selectMenu;
$beatlesMenu->setOptions($favBeatle);
?>

<!doctype html>
<html>
<head>
<link href="_style/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {margin: auto;background-image:url(_images/beatles.jpg); background-repeat: no-repeat;
background-attachment: fixed;  background-position: top; }
#beatlesform {opacity: 0.9; filter: alpha(opacity=90); /* For IE8 and earlier */ margin: auto;width:60%;background-color:#fff;padding:20px;border-left:solid 1px #000;border-right:solid 1px #000; border-bottom:solid 1px #000;}
.form {opacity: 1; filter: alpha(opacity=100);}
</style>
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


