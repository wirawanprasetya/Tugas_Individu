<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX TimeStamp/ EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date ("l", time()+60*60*24*100);

// mktime
// membuat sendiri detik yang kita inginkan
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime (0,0,0,8,25,1985));
?>