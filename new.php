<?php
/*
* membuat kelas mawar
*/
class mawar
	{
			/*
			* mendeklarsikan warna
			* mendeklarasikan daun
			*/
		public $warna = 'merah';
		public $daun = 'hijau';
	}
	
	/*
	*output dari perintah
	*/
$mawar = new mawar;
echo 'Mawar warnaynya..' . $mawar->warna . '<br>' . 'Daunnya..' . $mawar->daun;

?>
