<!DOCTYPE html>
<html>
<head>
	<title>Contoh function 1</title>
</head>
<body>
	<?php
		function info_tanggal() {
			$hari = array ('Minggu', 'Senin', 'Selasa','Rabu',
							'Kamis', 'Jumat'
					);
			$bulan = array ('Januari', 'Februari', 'Maret',
							'April', 'Mei', 'Juni', 'Juli',
							'Agustus', 'September', 'Oktober',
							'November', 'Desember'
					);
			$tgl = getDate();
			echo $hari[$tgl['wday']] . ', ' . $tgl['mday'] . '-' . 
				$bulan[$tgl['mon']] . '-' . $tgl['year'];
		}

		function pangkat($x, $n) {
			return pow($x, $n);
		}
	?>

	Sekarang : <?php info_tanggal(); ?><br />
	5<sup>3</sup> = <?php echo pangkat(5, 3); ?>
</body>
</html>