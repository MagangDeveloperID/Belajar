<?php

class buku
{
	var $nama;
	var $warna;
	var $merk;
	var $harga;

	public function setNama($nama)
	{
		$this->nama= $nama;
	}	

	public function setWarna( $warna)
	{
		$this->warna = $warna;
	}
	public function setMerk( $merk)
	{
		$this->merk = $merk;
	}
	public function setHarga($harga)
	{
		$this->harga = $harga;
	}
	function __construct ($warna,$merk)
	{
		$this->nama = $nama;
		$this->warna = $warna;
		$this->merk = $merk;
		$this->harga = $harga;

	}
}

?>