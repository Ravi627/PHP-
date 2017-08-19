<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
<pre>
Hello <? echo $_POST["FirstName"] ?>, your details have been added.
Thank you


<b><u>Your detials are</u></b>

     Name:<? echo $_POST["FirstName"]?> <? echo $_POST["LastName"] ?>
<br>      Age: <? echo $_POST["Age"]?>
<br>   Gender:<?echo $_POST["gender"] ?>

  DOB: <?echo $_POST["BirthMonth"]  ?> <? echo $_POST["BirthDay"]?>  <? echo $_POST["BirthYear"]?>
<br>MobileNo.:<?echo $_POST["MobileNo"] ?>
<br>  Email:<?echo $_POST["Email"] ?>
password :<?echo $_POST["Password"]?>
</pre>

</body>
</html>