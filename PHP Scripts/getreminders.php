<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username'])) {
    if ($db->dbConnect()) {
        $res = $db->getReminders(addslashes($_POST['username']));  //$_POST['username']
        if ($res != null) {
            echo "Success " . $res;
        } else echo "Error getting reminders";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>