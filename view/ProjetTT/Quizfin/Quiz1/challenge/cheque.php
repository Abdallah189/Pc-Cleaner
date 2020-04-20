<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Elsie+Swash+Caps" rel="stylesheet">
<style> 
#name{
  margin-left:23%;
  font-size:450%;
  color:#00446B;
  font-family: 'Elsie Swash Caps', cursive;
}
body {
    background-image: url("cheque.jpg");  
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
    background-position: center top; 
    
}

</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<span id="name"><?php echo $_SESSION["nom"] ?></span>
</body>
</html>