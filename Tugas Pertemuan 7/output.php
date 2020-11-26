<html>

<head>
		<title>Hasil Akhir</title>
</head>

<body>
		<center><h1>Program Mengitung Nilai Akhir Mahasiswa</h1></center>
		<table width="300" border="1" align="center" bordercolor="yellow" bgcolor="grey">
		  <tr>
		    <td><?php
			$a=$_POST['nim'];
			$b=$_POST['nama'];
			$c=$_POST['jurusan'];
			$e=$_POST['tugas'];
			$f=$_POST['uts'];
			$g=$_POST['uas'];
			$h=($e+$f+$g)/3;
			if ($h>=80)
			$j=("A") and $i=("ANDA LULUS");
			else
			if ($h>=70)
			$j=("B+") and $i=("ANDA LULUS");
			else
			if ($h>=65)
			$j=("B") and $i=("ANDA LULUS");
			else
			if ($h>=60)
			$j=("C+") and $i=("ANDA LULUS");
			else
			if ($h>=55)
			$j=("C") and $i=("ANDA LULUS");
			else
			if ($h>=50)
			$j=("D+") and $i=("ANDA TIDAK LULUS");
			else
			if ($h>=45)
			$j=("D") and $i=("ANDA TIDAK LULUS");
			else
			if ($h>100)
			$j=("") and $i=("NILAI SALAH");
			else
			$j=("E") and $i=("ANDA TIDAK LULUS");

			echo"NIM : $a";
			echo"<br>Nama Mahasiswa : $b";
			echo"<br>Jurusan : $c";
			echo"<br>Nilai Akhir : ".round($h,1);
			echo"<br>Grade : $j";
			echo"<br>Keterangan : $i";
			?></td>
		  </tr>
		</table>
</body>

</html>