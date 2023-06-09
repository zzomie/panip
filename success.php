<?php
// uspesan update - kod njega je ovo prikaz.php
require_once 'DAO.php';
//error_reporting(0);
if(!isset($_SESSION)) session_start(); 


if ($_SESSION["fudbaleri"]!=""){
	$dao=new DAO();
	$fudbaleri=$dao->getFubalerID($_SESSION['fudbaleri']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
Id:<?= $fudbaleri["id"]?><br>
Ime:<?= $fudbaleri["ime"]?><br>
Prezime:<?= $fudbaleri["prezime"]?><br>
Broj golova:<?= $fudbaleri["brgolova"]?><br>
<a href="controllerFudbaler.php?action=logout">LOGOUT</a>

</body>
</html>

<?php 
}else{
	header("Location:index.php");
}
?>
