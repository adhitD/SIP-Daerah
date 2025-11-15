<?php

// session_start();

$conn = new mysqli("localhost", "root", "", "pariwisata");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
