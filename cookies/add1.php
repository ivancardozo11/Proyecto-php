<?php

$value = $_COOKIE['count'];
$value++;



setcookie('count',$value);

echo '<p>Adding </p>';
