<?php

include "db.php";

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

header("Location:index.php");

?>