<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="main_css.css">
</head>
<body>
	<a class="active" href="pixabay_home.php">
	<h1 class="main-heading">PIXABAY SEARCH</h1>
	</a>
<div class="topnav">
  
  <form method="post", action="action_page.php">
  <div class="search-container">
  	 <div>
  	<input type="text"  placeholder="Search.." name="search">
     	
	 
      <button type="submit">Submit</button>
      </div>
       <div>
      
      <input type="radio" class="" id="img" name="content_type" value="img">
	  <label for="img">Images</label><br>
	  <input type="radio" id="vid" name="content_type" value="vid">
	  <label for="vid">Videos</label><br>
	  </div>
    </form>
  </div>
</div>



</body>
</html>




