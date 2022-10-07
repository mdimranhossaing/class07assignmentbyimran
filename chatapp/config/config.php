<?php 

  // define database informations
  define('__HOST__', 'localhost');
  define('__USERNAME__', 'root');
  define('__PASSWORD__', '');
  define('__DATABASE__', 'chatapp');

  // create connection
  $conn = new mysqli(__HOST__,__USERNAME__,__PASSWORD__,__DATABASE__);

  // check connection
  if ( $conn->connect_error ) {
    die('Connection failed: ' . $conn->connect_error);
  }

?>