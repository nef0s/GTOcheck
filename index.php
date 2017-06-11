 <html>
<head>
<title>Grand Theft Online?</title>
</head>
<body>
<p><font face="verdana" color="green">Grand Theft Online Checker</font></p>
<?php
$host = 'changeme'; //Server IP
if($socket =@ fsockopen($host, 80, $errno, $errstr, 100)) {
echo 'Server is online!';
fclose($socket);
} else {
echo 'Server is offline :( ';
}
?>


</body>
</html>
