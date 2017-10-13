<?php
/*
* membuat kelas buku
*/
class buku
{
	/*
	* mendeklarasikan variabel
	*/
	
	var $warna;
	var $merk;
	var $harga;
	
	function statusHarga()
	{
		if ($this->harga > 5000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	} 

		

	function setWarna( $warna)
	{
		$this->warna = $warna;
	}
	function setMerk( $merk)
	{
		$this->merk = $merk;
	}
	function setHarga($harga)
	{
		$this->harga = $harga;
	}
}

	/*
	* output dari perintah
	*/
	$buku1 = new buku();
	$buku1->setMerk(’Sidu’);
	$buku1->setHarga(3000);
	echo $buku1->statusHarga();
	

?>
