<?php
session_start();
if(!isset($_SESSION['cid']))
{
 header('Location:index.php');
}

?>