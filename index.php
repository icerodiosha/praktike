<?php
include "include/db.php";

	$result = mysqli_query($link, "SELECT * FROM `student`");
	//$goods =  mysqli_fetch_assoc($result);
	//print_r($goods); //������� ������ ������ �� �������

	//����� � ����� ���� ������� �� ������� 
	while ($goods =  mysqli_fetch_assoc($result)) 
	{

		echo "|".$goods['Name'];
		echo "|".$goods['Adress'];
		echo "|".$goods['Phone'];
		echo "|".$goods['Number_zcht'];
		echo "|".$goods['Academic_perfomance']."|";
		echo "<br>";	// code...
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>�������</title>
</head>
<body>
	<h1> ����� <?php echo "$login"; ?> </h1>
	<h2> �� ������������ � �� - <?php echo "$name_db" ; ?></h2>
</body>
</html>