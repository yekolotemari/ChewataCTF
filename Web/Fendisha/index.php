<?php
  require_once('./auth.php');

  if(isset($_GET['action']) && htmlspecialchars($_GET['action']) === 'logout') {
    setcookie('auth', '');
    header('Location: index.php');
    exit(0);
  }

  if(isset($_POST['username'])) {
    # Do pagey stuff
    // if the user is guest or ad...
    if(is_valid($_POST['username'], $_POST['password'])) {
      # Create the cookie
      $cookie = 'username=' . $_POST['username'] . '&';
      $cookie .= 'date=' . date(DATE_ISO8601) . '&';

      setcookie('auth', $cookie);
      print "<h1>Login successful!</h1>\n";
      print "<p>Cook'in.... :)\n";
    } else {
      print "<h1>Username or password was incorrect!</h1>\n";
    }
    print "<p>Click <a href='index.php'>here</a> to continue!</p>\n";
    exit(0);
  }

  // if auth param is empty
  if(!isset($_COOKIE['auth'])) {
    require_once('./login_form.php');
    exit(0);
  }

  $cookie = $_COOKIE['auth'];
  $pairs = explode('&', $cookie);
  // echo $cookie;
  $args = array();


  foreach($pairs as $pair) {
    if(!strpos($pair, '='))
      continue;
    list($name, $value) = explode('=', $pair, 2);

    $args[$name] = $value;
  }
  $username = $args['username'];
  $username = htmlspecialchars($username, ENT_QUOTES);

?>

<html>
<head>
<title>Under Construction!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('imagebg.png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}

</style>
</head>
<body>

  

  
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class='w3-display-container w3-padding w3-display-topleft' style="margin-top:35px;">
    <h1 class='w3-text-white w3-monospace' style="color:white;">Welcome Back,</span>&nbsp;<span style="color:red; "><?php echo "$username"; ?> </h1>
    <?php 
    print "";
  $flag = FLAG;
  
  if($username == 'administrator') {
    echo '<h3 class="w3-animate-fading w3-text-white w3-monospace" style="color:white;">Congratulations, you\'re the administrator! <br> Here\'s your reward:</span>&nbsp;<span style="color:yellow; "> "' . FLAG . '"</br></h3></span>';
    
  } else {
    print "<h3>It's cool that you logged in, but unfortunately we can only give the flag to... Administrator</h3>\n";
  }
  print "<a  class='w3-displaw3-display-topright w3-button' href='index.php?action=logout'>Log out</a>\n";


  ?>
  </div>


    <div class="w3-display-middle" style="margin-top:100px;">
    <h1 class="w3-jumbo w3-animate-top" >COMING SOON</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">35 days left</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.yekolotemari.com" target="_blank">ChewataCTF</a>
  </div>
</div>

</body>
</html>

  
  
