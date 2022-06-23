<?php
  require_once 'cas.php';
  getCAS();
?>
<?php header("Content-type: text/html; charset=iso-8859-1"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Net-ID Test</title>
</head>
<body>
  <h1>Net-ID Test</h1>
  <p>Hello World!</p>
<? echo "Netid: ".$casNetid."<br>";
   echo "UIN:   ".$casUIN."<br>";
?>
</body>
</html>


