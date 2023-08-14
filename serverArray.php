<html>
<head>
<title>Looping through the $_SERVER array</title>
</head>
<body>
<div>
<?php
foreach ( $_SERVER as $key=>$value ) {
   print "\$_SERVER[\"$key\"] == $value<br/>";
}
?>
</div>
</body>
</html>