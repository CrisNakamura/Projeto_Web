<?php
if($_SESSION['admin'] != 1){
    header('Location: login.php');
    exit();
}