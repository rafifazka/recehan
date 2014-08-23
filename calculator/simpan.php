<html>
	<head>
		<title>Laporan</title>
		<link rel="shortcut icon" href="favicon.png" />
		<style type="text/css">
html,body {
	height : auto;
}
table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 700px;  
    height : auto;
	margin : auto;
}
.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;
	align : midle;
}
 
.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset; 
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;       
}
 
.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee);
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}
 
.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0; 
}
 
.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}
 
.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}
 
.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1; 
}
 
.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}
 
.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}
 
.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}
</style>
	</head>
<?php
//inisiasi
$hash = $_POST['hash'];
$payout = $_POST['payout'];
$dificulty = $_POST['Dificulty'];

//100%-dificulty
$percentage = (100 - $dificulty) / 100;

$x = 0;
$result = 0;
?>
<body>
<table class="zebra">
<thead>
	<tr>
		<td colspan="3" align="center"><h1>Mining Payout Schedule</h1><input type="button" value="Back" onClick="self.history.back()"></td>
	</tr>
</thead>
<tr>
	<th><center>Waktu</center></th>
	<th><center>Nilai</center></th>
</tr>
<?php
for ($i = 1; $i <= 60 ; $i++)
{
if ( $i % 2 === 1 && $i > 2)
$x++;

$result = pow($percentage, $x) * ($hash * $payout * 7) + $result;
?>
<tr>
	<td><center><?php echo "Minggu ke $i"; ?></center></td>
	<td><center><?php echo number_format($result,8) ?></center></td>
<?php

}
echo "<tr>";
?>
</table>
</table>
</html>
