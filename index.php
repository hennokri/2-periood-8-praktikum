<?php
$name = "test";
$value = 78;
$expire = time() + (60*60*24*7*2);
  //setcookie($name, $value, $expire);
  //setcookie("teine", "tere", time()+30);
  //setcookie($name, null);
  setcookie($name, $value, time() -3600);
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>harjutus-8-Cookies</title>
  <meta charset="UTF-8">
  </head>
<body>
<pre>
<?php
print_r($_COOKIE);
/*
if (isset ($_COOKIE["test"])){
	$test = $_COOKIE["test"];
	}else }test="";}echo $test;
*/	
	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
      echo $test;
?>
</pre>
</body>
</html>