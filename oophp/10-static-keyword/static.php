<?php
// static keyword ini terikat dengan class bukan dengan object
	
// class ContohStatic {
// 	public static $angka = 1;

// 	public static function halo(){
// 		return "Hallo.." . self::$angka++ . " kali.";
// 	}
// }

// // echo ContohStatic::$angka;
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


// nilai static akan selalu tetap meskipun objectnya di instansiasi berulang kali
class Contoh {
	public static $angka = 1;

	public function halo(){
		return "Halo.." . self::$angka++ . "kali . <br>";
	}
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
