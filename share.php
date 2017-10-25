<?php
   //  $score = $_GET['score'];   //read the score from the url
  	//$points = "200";   //read the score from the url
     $picture = &_GET['picture'];   //read the score from the url
?>
<!DOCTYPE html>
<head>
    <!-- This url should be the same as the href you passed in to showDialog -->
     <meta property="og:url" content="" /> 
	
<!-- Here I customized the title, but you can customize any property you want -->
     <meta property="og:title" content= "titulo nuevo" />
     <meta property="og:image" content= <?= $picture ?> />
	
     <meta property="og:description" content="This is literally the best game on Earth! Download it now!" /> 
     <meta property="og:type" content="website"/>
     <meta property="fb:app_id" content="1572992396057297"/>
     <!-- Manually redirect to the page you want the user to land on. This is optional -->
     <meta http-equiv="refresh" content="0;url=http://www.attmotion.com">
     <script type="text/javascript">
    window.location.href = "http://www.attmotion.com"
     </script>
</head>
