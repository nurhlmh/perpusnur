<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['index_adm.php']);
session_destroy();
header("Location: index.php");
