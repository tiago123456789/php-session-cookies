<?php

session_start();

$_SESSION['user'] = [
  "name" => "Tiago R. da costa",
  "age" => "19",
  "active" => true
];

echo("Has add in session");


