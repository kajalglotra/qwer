<html>
<head>
<title>asgn2</title>
</head>
<body>
	<form method='GET' action="#">
	 <table>
	  <tr><td>Enter first date</td><td><input type="date" name="date1" required="true"/></td></tr>
	  <tr><td>Enter second date</td><td><input type="date" name="date2" required="true"/></td></tr>
	  <tr><td style="text-align: center"><input type="submit" name="submit" value="calculate"/></td></tr>
	 </table>
	</form>
</body>
</html>
<?php
if(isset($_GET["submit"])) {
    $d1 = $_GET['date1'];
    $d2 = $_GET['date2'];
    $start = strtotime($d1);
    $end = strtotime($d2);
    $days_between = ceil(abs($end - $start) / 86400)-1;

    echo 'the number of days between are: '.$days_between.'days';
   
}
?>
