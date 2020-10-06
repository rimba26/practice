<?php

include "connection.php";



$input=$db->exec("update anime set Judul='".$_POST['Judul']."',Creator='".$_POST['Creator']."'where id_anime=".$_POST['id_anime']);

if($input)
{
    header("Location:index.php");
}
// $update=$db->exec("update siswa set nama='".$_POST['nama']."',pekerjaan='".$_POST['pekerjaan']."'where id_siswa=".$_POST['id_siswa']);