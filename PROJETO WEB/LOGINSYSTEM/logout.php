<?php
session_start();
session_destroy();
header('Location: ../PGMS/home.php');
exit();