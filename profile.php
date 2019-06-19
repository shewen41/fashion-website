<?php

include "db.php";
session_start();


print "Welcome " . $_SESSION["name"];

print "<br />";

print " <a href='logout.php'>Click here to logout</a>";

?>