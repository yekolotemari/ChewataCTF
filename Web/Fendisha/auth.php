<?php
  define('FLAG', 'flag{!_l0^3_C00k!3$_EV3RY_T!M3}');

  $accts = array(
    'administrator' => 'bmL$hVHjius',
    'guest' => 'guest',
  );

  function is_valid($username, $password)
  {
    global $accts;
    // if the username exists and the the pass == dict pass the return the flag or if the user is only ad... return the flag
    return array_key_exists($username, $accts) && $accts[$username] === $password;
  }
?>
