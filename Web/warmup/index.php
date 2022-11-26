<!DOCTYPE html>
<html>
  <head>
    <title> warmup </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <div class="title  w3-monospace w3-display-topmiddle">
      <h1 class="w3-monospace">WarmUP!</h1>
    </div>
    <div class="form w3-container w3-display-middle">
      <div class="w3-panel w3-card w3-light-grey">
      <h4>Source Code!</h4>

      <div class="w3-code cssHigh notranslate">
        <img style="height:50%;width:100%" src="img/code.jpg">
      </div>
    </div>
  </div>
  </body>


</html


<?php
include "flag.php";
$flags = "well done: " . FLAG;

if (isset($_GET['first'])){
    $first = $_GET['first'];
    if ($first == md5($first)){
        echo '<div class="w3-animate-top  w3-panel w3-green w3-round-xxlarge"><h2 style="padding-left:390px; padding:center; padding-top:100px;">' .FLAG. '</h2></div>';
        echo "<script type='text/javascript'>alert( '$flags');</script>";
      }else{
        echo "<div class='w3-container ' > <h3 class='w3-monospace' style='padding-top: 114px;  padding-left: 350px; color:yellow; bg-color:gray; font-weight: 390px;'> i can't still give you the flag :( </h3> </div>";
        die();
  }
}else{
  die();
}


?>
  
