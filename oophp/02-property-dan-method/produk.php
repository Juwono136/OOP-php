<?php 

// Jualan produk, produknya itu komik dan game
class Produk {
	public $judul = "judul",
			$penulis = "penulis", 
			$penerbit = "penerbit",
			$harga = 0;

	// public function sayHello(){
	// 	return "Hello World!";
	// }

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1 -> judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "Minecraft"; 
// $produk2 -> tambahProperty = "Tambah satu";
// // var_dump($produk2->judul);
// var_dump($produk2);


$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masashi Kishimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 30000;
// var_dump($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();
// echo "<hr>";

$produk4 = new Produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "Neil Druckman";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 250000;

echo "Komik : ". $produk3 -> getLabel();
echo "<br>";
echo "Game : ". $produk4 -> getLabel();