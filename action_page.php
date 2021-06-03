<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="main_css.css">

</head>
<body>
<?php

class pixabay 
{
	public $q;
	

	public function __toString() {
       return $this->q;
    }
	function img_search($q)
	{
		$curl=curl_init();
		$key="18442893-89fcc56b5bdcb56e13d791375";
		$this->q = $q;
		$url= "https://pixabay.com/api/?key=$key&q=$q";

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$query = json_decode(curl_exec($curl));
		$fim= $query->hits;
	
   
		foreach ($fim as $im) {
			echo "<div style='float:left; width:25%; height:25%;'  > ";
			echo "<img src='$im->webformatURL' style=' width:100%; height:100%;'  > <br />";
			echo "</div>";

		}
		

		curl_close($curl);
	}
	
	function vid_search($q)
	{
		$curl=curl_init();
		$key="18442893-89fcc56b5bdcb56e13d791375";
		$this->q = $q;
		$url= "https://pixabay.com/api/videos/?key=$key&q=$q";

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$query = json_decode(curl_exec($curl));
		$fim= $query->hits;

		

		foreach ($fim as $im){
			$vidurl=strval($im->videos->large->url);
			echo "<div style='float:left; width:25%; height:25%;'>" ;
			echo "<video controls width='320'; height='300';> ";
			echo "<source src=$vidurl  >";
			echo "</video> ";
			echo "</div>";
			
		}

		curl_close($curl);
	}
}
$q=$_POST["search"];
$rad_val=$_POST['content_type'];
if($rad_val=="img")
{
	$pixabay= new pixabay();
	$pixabay->img_search($q);
}

elseif($rad_val=="vid"){
	$pixabay= new pixabay();
	$pixabay->vid_search($q);
}




?>




</body>
</html>