<?php
include "koneksi.php";

//query id desa
$querydesa = "select * from desa";
$resultdesa = mysqli_query($koneksi,$querydesa);
$jsArraydesa = "var desa = new Array();\n";

 ?>
