<?php
include('../src/preload.php');

    if ($_GET['delete'] == true) {
        echo 'deleting user' . $_GET['userid'];
        $mysql->query("delete from user where id = " . $_GET['userid']);
    }
