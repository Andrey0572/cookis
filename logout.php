<?php
require_once 'functions.php';

if (isset($_COOKIE['ban'])) {
    location('ban.php');
}
if (!isAuthorized() && !isQuest()) {
    location('admin.php');
}
logout();
?>
