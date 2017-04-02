<html>
<head>
<title>T1KUS90T Online Tools</title>
<meta name="description" content="T1KUS90T Online Tools">
<style>
@import url("https://fonts.googleapis.com/css?family=Gloria+Hallelujah");
body {
	font-family: calibri;
	color: white;
}

table {
	border: 1px solid black;
	width: 50%;
}

th {
	background: black;
}

td {
	color: black;
}

input[type=text], select {
	width: 60%;
	height: 25px;
	border: 1px solid black;
}

input[type=submit] {
	height: 25px;
	border: 1px solid black

}

input[type=file] {
	height: 25px;
}

textarea {
	height: 50px;
	border: 1px solid black;
}

</style>
</head>
<center>
<font color="black" size="5" face="Gloria Hallelujah"><h2>T1KUS90T Online Tools</h2></font>
<table>
<tr>
<th><br><a href="?act=about" style="text-decoration:none"><font color="white" size="5">[ About ]&nbsp;</font></a>
<a href="?act=encode" style="text-decoration:none"><font color="white" size="5">[ Encode ]&nbsp;</font></a>
<a href="?act=decode" style="text-decoration:none"><font color="white" size="5">[ Decode ]&nbsp;</font></a>
<a href="?act=csrf" style="text-decoration:none"><font color="white" size="5">[ CSRF Online ]</font></a><br><br></th>
</tr>
<td> 

<?php 
// coded by Yrid06 a.k.a T9_1n73ct0r [ T1KUS90T ]
// facebook.com/UndeathRommy - facebook.com/T1KUS90T

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if ($_GET['act']=='about') {
	echo "<center><br><h3>Tentang T1KUS90T</h3>";
	echo "<p>T1KUS90T resmi terbentuk pada 1 Oktober 2016,<br>Pada saat itu anggota T1KUS90T hanya terdiri dari beberapa anak-anak sekolah dan tidak semuanya aktif di dalam kegiatan dunia maya. Seiring berjalannya waktu T1KUS90T mendapatkan member-member baru, dan tidak sedikit dari mereka yang meninggalkan T1KUS90T dengan alasan tertentu.<br><br>Sampai sekarang T1KUS90T masih terus berkembang dan mempunyai beberapa member official dengan Nickname : Yrid06, ./Mr.Robot, bagaz, Mr.Boy, AleXa, Serizawa404, boc4hkecil, R10T1C404, ./cOLI, Panjul DOT ID, Chaiju, ./L3M0T, Y4G4M1, AZZATSSINS, kod0kk, Triple A, C1M0T, ./zeeb, LdxMpuzz6, GR0V, xDecode, Vibersays, Saus Cabai.<br></p>";
}

elseif ($_GET['act']=='encode') {
	echo "<center><br><h3>Encode tools by T1KUS90T</h3>";
	echo "<b>*Encoding text to base64, uuencode, hex, and url*</b>";
	echo "<form method=post><br><input type=text name=txt placeholder=&nbsp;Text&nbsp;to&nbsp;encode>";
	echo "<br><br><input type=submit value=Encode!></form>";

	$enc = $_POST['txt'];
	$test = bin2hex($enc);
	$test = chunk_split($test,2,'%');
	$test = "%".substr($test, 0, strlen($test) - 1);	

	echo "<textarea placeholder=&nbsp;base64>";
	echo  base64_encode($enc);
	echo "</textarea>"; 
	echo "&nbsp;<textarea placeholder=&nbsp;uuencode>";
	echo convert_uuencode($enc);
	echo "</textarea><br>";
	echo "<textarea placeholder=&nbsp;hex>";
	echo bin2hex($enc);
	echo "</textarea>";
	echo "&nbsp;<textarea placeholder=&nbsp;url>";
	if ($_POST==true){
	echo "$test";
	}
	echo "</textarea><br>";

}

elseif ($_GET['act']=='decode') {
	echo "<center><br><h3>Decode tools by T1KUS90T</h3>";
	echo "<b>*Deocding text to base64, uuencode, hex, and url*</b>";
	echo "<form method=post><br><input type=text name=deco placeholder=&nbsp;Text&nbsp;to&nbsp;decode>";
	echo "<br><br><select name=pilih><option>base64</option><option>uuencode</option><option>hex</option><option>url</option></select>";
	echo "<br><br><input type=submit value=Decode!></form>";

	$decode = $_POST['deco'];
	$test = $_POST['pilih'];
	echo "<textarea placeholder=&nbsp;result>";
	if ($test==base64){
		echo base64_decode($decode);
	} elseif ($test==uuencode) {
		echo convert_uudecode($decode);
	} elseif ($test==hex) {
		echo hex2bin($decode);
	} elseif ($test==url) {
		$satu = str_replace('%','',$decode);
		echo hex2bin($satu);
	}
	echo "</textarea><br>";

}

elseif ($_GET['act']=='csrf') {
	echo "<center><br><h3>CSRF Online by T1KUS90T</h3>";
	echo "<form method=post><input type=text name=one placeholder=&nbsp;http://site.com/[path]/exploit><br><br>";
	echo "<input type=text name=two placeholder=&nbsp;file,filename,files,file[],Filedata,qqfile><br><br><input type=submit value=Lock!></form>";

	$post = $_POST['one'];
	$text = $_POST['two'];

if ($_POST==true){
	echo "<form method=post enctype=multipart/form-data action=".$post.">";
	echo "<input type=file name=".$text.">";
	echo "<input type=submit value=Upload!>";
}
}
?>
<br>
</td>
<tr>
<th> <br> &copy; 2016 - 2017 T1KUS90T <br><br></th>
</tr>
</table>
</center>
</html>
