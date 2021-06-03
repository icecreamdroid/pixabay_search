<?php

$curl=curl_init();
$key="18442893-89fcc56b5bdcb56e13d791375";
$q= rawurlencode("skateboard");
$url= "https://pixabay.com/api/?key=$key&q=$q";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);
$query = json_decode($result);




$fim= $query->hits;

foreach ($fim as $im) {
	echo "<div style='float:left; margin:10 0 0 0; ' > ";
echo "<img src='$im->webformatURL' > <br />";
echo "</div>";

}


curl_close($curl);

?>
