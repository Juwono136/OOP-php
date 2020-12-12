<?php 
// // menggunakan define :
// // define tidak bisa dipakai di dalam class dan ditaruhnya di global/diluar
// define('NAMA', 'Juwono');
// echo NAMA;

// echo "<br>";


// // menggunakan const :
// // const bisa dimasukkan kedalam kelas
// const UMUR= 24;
// echo UMUR;


// class Coba {
// 	const NAMA = "Juwono";
// }
// echo Coba::NAMA;







// Magic Constant

// echo __LINE__; //untuk jumlah sintak bari
// echo __FILE__; //untuk melihat letak file php-nya

// function coba(){
// 	return __FUNCTION__; //untuk melihat lagi ada di function mana
// }
// echo coba();


class Coba{
	public $kelas = __CLASS__; //untuk melihat lagi ada di class mana
}

$obj = new Coba;
echo $obj->kelas;