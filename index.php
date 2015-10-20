<!doctype html>
<html>
<head>
<link href="_style/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {margin: auto;background-image:url(_images/beatles.jpg);     background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: top; }
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
    <select name="title">
 	 <option value="">Select One</option>
 	 <option value="Ms.">Ms.</option>
 	 <option value="Mrs.">Mrs.</option>
 	 <option value="Mr.">Mr.</option>
 	 <option value="none">None</option>
	</select>
    <p>First Name</p>
    <input type="text" name ="first_name" placeholder= "Enter first name" />
	<p>Last Name</p>
    <input type="text" name ="last_name" placeholder= "Enter last name" />
	<p>Email</p>
    <input type="text" name ="email" placeholder= "Enter email" />
    <p>Password</p>
    <input type="text" name ="password" placeholder= "Enter password" />
    <p>Favorite Beatle</p>
    <select name="favBeatle">
 	 <option value="">Select One</option>
 	 <option value="George">George</option>
 	 <option value="Ringo">Ringo</option>
 	 <option value="Paul">Paul</option>
 	 <option value="John">John</option>
	</select>
    <p>&nbsp;</p>
    <input type="submit" name="submit" value= "Submit"/>
</form>

</div>
</body>
</html>


