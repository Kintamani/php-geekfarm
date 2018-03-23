<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- NO 1 -->	
	<form action="#" method="get">
		<h1>1. luas persegi</h1>
		<input type="text" name="sisi" placeholder="masukan sisi">
		<input type="submit">
		<?php
		//no1 
			if (isset($_GET['sisi']))
			{
			$s = $_GET['sisi'];
			$jawaban = $s*$s;
			echo "<br>".'luas persegi adalah '.$jawaban."<br>";
			}
		?>
	</form>
<!-- NO 2 -->	
	<form action="#" method="get">
		<h1>2. mencacah 3 karakter</h1>
		<input type="text" name="nama" placeholder="masukan sisi">
		<input type="submit">
		<?php
		//no1 
			if (isset($_GET['nama']))
			{
			$nama = $_GET['nama'];
			echo wordwrap( $nama, 3 , '_' , true );
			}
		?>
	</form>
<!-- NO 3 -->
	<form action="#" method="get">
		<h1>3.Menampilkan angka tengah</h1>
		<input type="text" name="angka" placeholder="masukan angka">
		<input type="submit">
		<?php
		//no3 
		if (isset($_GET['angka']))
			{
			$a = $_GET['angka'];
			$angkaBaru = $a;
				if($angkaBaru % 2 == 0) 
				{
					$posisi =  strlen($angkaBaru)/2;
					$jumlah = substr($posisi,$posisi+ 2);
					echo $jumlah;
				}
				else 
				{
					echo 'ganjil';
				}
			}
		?>
	</form>
<!-- NO 4 -->
	<form action="#" method="get">
		<h1>4. Jumlah huruf vocal</h1>
		<input type="text" name="vokal" placeholder="masukan angka">
		<input type="submit">
		<?php
		//no4 
		if (isset($_GET['vokal']))
			{
			$v = $_GET['vokal'];
			$vokal = preg_match_all('/[aeiou]/i',$v,$matches);
			echo $vokal;
			}
		?>
	</form>
<!-- NO 5 -->
	<form action="#" method="get">
		<h1>5. menghitung jumlah string</h1>
		<input type="text" name="string" placeholder="masukan angka">
		<input type="submit">
		<?php
		//no5 
		if (isset($_GET['string']))
			{
			$v = $_GET['string'];
			$vokal = strlen($v);
			echo $vokal;
			}
		?>
	</form>

<!-- NO 7 -->
	<form action="#" method="get">
		<h1>7. 20 karakter per line</h1>
		<input type="text" name="duaPuluh" placeholder="masukan angka">
		<input type="submit">
		<?php
		//no5 
		if (isset($_GET['duaPuluh']))
			{
			$duaPuluh = $_GET['duaPuluh'];
			echo wordwrap( $duaPuluh, 20 , "<br>" , true );
			}
		?>
	</form>

</body>
</html>