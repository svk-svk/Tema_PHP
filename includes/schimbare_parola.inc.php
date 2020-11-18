<?php
//session_start();
require 'conectare.php';
//trebuie id-ul utilizatorului acesta este Session ID


if (count($_POST) > 0) {
    $result = mysqli_query($conectare, "SELECT * from users WHERE ID='" . $_SESSION["ID"] . "'");
    $row = mysqli_fetch_array($result);
    if (sha1($_POST['currentPassword']) == $row["password"]) {
        mysqli_query($conectare, "UPDATE users set password='" . sha1($_POST["newPassword"]) . "' WHERE ID='" . $_SESSION["ID"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>