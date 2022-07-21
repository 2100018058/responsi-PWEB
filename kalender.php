<?php
//mengambil tanggal sistem saat ini (1 - 31)
	$hari = date("d") ;
//mengambil bulan sistem saat ini (1 - 12)
	$bulan = date ("m") ;
//mengambil tahun sistem saat ini
	$tahun = date("Y");
//mencari jumlah hari bulan dan tahun ini
	$jumlahhari=date("t", mktime(0, 0, 0, $bulan, $hari, $tahun) );
?>

<?php
	switch ($bulan){
		case 1 : $nmbulan = "Jan"; break;
		case 2 : $nmbulan = "Feb"; break;
		case 3 : $nmbulan = "Mar"; break;
		case 4 : $nmbulan = "Apr"; break;
		case 5 : $nmbulan = "Mei"; break;
		case 6 : $nmbulan = "Jun"; break;
		case 7 : $nmbulan = "Jul"; break;
		case 8 : $nmbulan = "Agu"; break;
		case 9 : $nmbulan = "Sep"; break;
		case 10 : $nmbulan = "OKT"; break;
		case 11 : $nmbulan = "Nop"; break;
		case 12 : $nmbulan = "Des"; break;
	}
	echo "<center><h1>$hari $nmbulan $tahun </h1></center>";
?>

<br>
<table style="border :2px solid grey;" align="center" cellpadding="15" bgcolor="black">
<tr bgcolor="grey">
<td align=center><font color="#FF0000">Min</font></td>
<td align=center><font color="white">Sen</font></td>
<td align=center><font color="white">Sel</font></td>
<td align=center><font color="white">Rab</font></td>
<td align=center><font color="white">Kam</font></td>
<td align=center><font color="white">Jum</font></td>
<td align=center><font color="white">Sab</font></td>
</tr>

<?php
	$s=date ("w", mktime (0, 0, 0, $bulan, 1, $tahun));
	for ($ds=1;$ds<=$s; $ds++) {
		echo "<td></td>";
	}
	for ($d=1;$d<=$jumlahhari; $d++) {
		//jika minggu ke 0, maka buat baris baru
		if (date("w", mktime (0, 0, 0, $bulan, $d, $tahun)) == 0) {
			echo "<tr>";
		}
		$warna="white"; // warna default
		//jika hari Minggu beri warna merah
		if (date("1", mktime (0, 0, 0, $bulan, $d, $tahun)) == "Sunday") {
			$warna="#FF0000";
		}
		//Beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";
		//jika hari ke enam, akhiri baris
		if (date("w", mktime (0, 0, 0, $bulan, $d, $tahun) ) == 6) {
			echo "</tr>";
		}
	}
	echo '</table>' ;
?>
<div align="center"><strong><a href="index.html">::Home::
		</a></strong></div>

