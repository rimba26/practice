<?php

include "connection.php";

$delete=$db->exec("delete from anime where id_anime=".$_GET['id_anime']);

if($delete)
{
    header("Location:index.php");
}