<?php
//error reporting //////////////////////////////////////////////////////////////////////////////
//matikan
error_reporting(0);

//tampilkan
//error_reporting(E_ALL & ~E_NOTICE);
//error reporting //////////////////////////////////////////////////////////////////////////////





//nama rumah sakit //////////////////////////////
$nama_rs = "rs 1234";
//nama rumah sakit //////////////////////////////






//ALAMAT SITUS //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sumber = "http://localhost/booking-pasien/";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//KONEKSI DATABASE //////////////////////////////////////////////////////////////////////////////////////////////////////////////
$xhostname = "localhost";
$xdatabase = "booking-pasien"; //sesuaikan dengan nama database yang dibikin
$xusername = "biasawae"; //sesuaikan dengan username mysql-server yang ada
$xpassword = "biasawae"; //sesuaikan dengan password user mysql-server yang ada
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//JUMLAH DATA per HALAMAN ///////////////////////////////////////////////////////////////////////////////////////////////////////
$limit = "30";  //jumlah data dalam satu halaman
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






//KONFIGURASI WARNA TABEL - DATA ////////////////////////////////////////////////////////////////////////////////////////////////
$warna01 = "#F8F8F8";
$warna02 = "#E3E1F9";
$warnaover = "#C7CBFA";
$warnaheader = "#C0C5EF";
$warnatext = "black";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//Lama-nya session //////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sesidt = 3600; //detik
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
