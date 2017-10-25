<?php
     $score = $_GET['score'];   //read the score from the url
?>
<!DOCTYPE html>
<head>
    <!-- This url should be the same as the href you passed in to showDialog -->
     <meta property="og:url" content="https://dadre5.github.io" /> 
	
<!-- Here I customized the title, but you can customize any property you want -->
     <meta property="og:title" content="I scored <?= $score ?> points!"/>
     <meta property="og:description" content="This is literally the best game on Earth! Download it now!" /> 
     <meta property="og:image" content="https://dadre5.github.io/Ballooooon.png" />


     <!-- Manually redirect to the page you want the user to land on. This is optional -->
    // <meta http-equiv="refresh" content="0;url=http://www.attmotion.com">
     //<script type="text/javascript">
	//    window.location.href = "http://www.attmotion.com"
     //</script>
</head>
