<?php
session_start();
session_unset();
session_destroy();
    header("Location: http://localhost/ClassicModels/index.php?msg=loggedout");
    exit;
?>
