<?php

include "connection.php";

$input=$db->exec("insert into anime(Judul,Creator) values('".$_POST['Judul']."','".$_POST['Creator']."')");

if($input)
{
    header("Location:index.php");
}