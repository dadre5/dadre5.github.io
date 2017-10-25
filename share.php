<?php
     $score = $_GET['score'];   //read the score from the url
     $level = $_GET['level'];   //read the level from the url
?>

<!DOCTYPE html>
<head>
     <!-- This url should be the same as the href you passed in to showDialog -->
     <meta property="og:url" content="<?= "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" /> 

     <!-- Here I customized the title, but you can customize any property you want -->
     <meta property="og:title" content="I scored <?= $score ?> points on Level <?= $level ?>!"/>
     <meta property="og:description" content="This is literally the best game on Earth! Download it now!" /> 
     <meta property="og:image" content="http://yoursite.com/appimage.png" />
	
     <!-- Manually redirect to the page you want the user to land on. This is optional -->
     <meta http-equiv="refresh" content="0;url=http://yoursite.com">
     <script type="text/javascript">
	    window.location.href = "http://yoursite.com"
     </script>
</head>
