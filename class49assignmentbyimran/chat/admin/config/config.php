<?php

  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'chat');

  // Crate connection
  $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // echo 'Connected successfully';
?>