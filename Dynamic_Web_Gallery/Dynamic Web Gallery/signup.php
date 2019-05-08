<?php
session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="INSERT INTO user1 (first, last, uid, pwd)
 values ('$first', '$last', '$uid', '$pwd')";
 $result = $connn->query($sql);
 header("Location:index.php?account created");

?>