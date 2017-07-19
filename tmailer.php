<html>
<head>
<title>TikusMailer</title>
<style type="text/css">
	th {
		background-color: purple;
		height: 50px;
		color: white;
	}
	
	td {
		background-color: cyan;
		width: 360px;
		height: 50px;
	}

	textarea {
		width: 570px;
		height: 250px;
	}

	input[type=submit],input[type=reset] {
		width: 362px;
		height: 35px;
	}
</style>
</head>
<font face="calibri" size="4"><b>TikusMailer // <a style="text-decoration:none" href="http://fb.com/T1KUS90T" target="_blank">Facebook</a></b></font>
<form method="post" enctype="multipart/form-data">
<table>

<tr>
<th colspan="2"><font face="calibri">SENDER INFO</font></th>
</tr>

<tr>
<td><font face="calibri" style="padding-left: 8px">Sender Name: </font><input type="text" name="sender" required></td>
<td><font face="calibri" style="padding-left: 8px">Sender Email: </font><input type="text" name="emailu" required></td>
</tr>

<tr>
<th colspan="2"><font face="calibri">MESSAGE INFO</font></th>
</tr>

<tr>
<td><font face="calibri" style="padding-left: 8px">Subject: </font><input type="text" name="subject" required></td>
<td><font face="calibri" style="padding-left: 8px">Letter: </font><input type="file" name="letter" required></td>
</tr>
<tr>
<th colspan="2"><font face="calibri">MAILIST</font></th>
</tr>

<tr>
<td colspan="2"><center><textarea style="margin-bottom: 25px; margin-top: 20px" name="mailist" required></textarea></center></td>
</tr>
</table>
<input type="submit" name="yosh" value="SEND!">
<input type="reset" name="" value="CANCEL!">
</form>
<?php

#######################
//fb.com/UndeathRommy
//github.com/rommymaul
//tikusgot.net
#######################

if(isset($_POST['yosh'])) {
$letter = $_FILES['letter']['name'];
@copy($_FILES['letter']['tmp_name'], $letter);

$subject = $_POST['subject'];
$emailz = $_POST['mailist'];
$letterz = file_get_contents($letter);
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";
$headers .= "From:".$_POST['sender']." <".$_POST['emailu'].">";

foreach(explode("\r\n", $emailz) as $list) {
	if(mail($list, $subject, $letterz, $headers)) {
		echo "Email:<b> $list </b>... <font color='green'>MAIL SENT!</font><br>";
	} else {
		echo "Email:<b> $list </b>... <font color='red'>SENT FAIL!</font><br>";
	}
}
}
?>