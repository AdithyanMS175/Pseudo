<?php
session_start();
if(!(isset($_SESSION['cid']) && !empty($_SESSION['cid']))) {
    header("location:../index.php");
}
?>