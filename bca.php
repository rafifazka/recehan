<?php
function bacaHTML($url){
 $data = curl_init();
 curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($data, CURLOPT_URL, $url);
 $hasil = curl_exec($data);
 curl_close($data);
 return $hasil;
}
echo "<center>";
$kodeHTML =bacaHTML('http://www.klikbca.com');
$pecah = explode('<table width="139" border="0" cellspacing="0" cellpadding="0">',
$kodeHTML);
$pecahLagi = explode('</table>',$pecah[2]);
echo "<table border='0'>";
echo "<tr><td bgcolor='#238E23'>KURS</td><td bgcolor='#238E23'>&nbsp;&nbsp;&nbsp;JUAL</td><td bgcolor='#238E23'>&nbsp;&nbsp;&nbsp;BELI</td></tr>";
echo $pecahLagi[0];
echo "</table>";
echo "</center>";
?>
