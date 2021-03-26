<?php
$array = json_decode(file_get_contents('php://input'));
$firstName = $array->firstName;
// echo $firstName;

file_put_contents("name.json", $run);
