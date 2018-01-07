<?php
session_start();
if(session_destroy()) // καταστρεφει ολα τα σεσιον
{
header("Location: login.php"); // και με παει στο λογκιν
}
?>
