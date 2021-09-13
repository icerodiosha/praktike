<?php
include "include/db.php";

$result = mysqli_query($link, "SELECT * FROM `professor`");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Professor</title>
	<link rel="stylesheet" type="text/css" href="../css/Test.css">
	<link rel="stylesheet" type="text/css" href="../css/Window.css">
</head>
<body>
	<form> 
		<div class="alif">
			<p>
				<a href="Test.php" class="alif" >Student</a>
				<a href="Course_std.php" class="alif">Course_student</a>
				<a href="course.php" class="alif ">Course</a>
				<a href="Course_professor.php" class="alif" >Course_professor</a>
				<a href="Professor.php" class="alif">Professor</a>
			</p>
		</div>
	</form>		
	<hr>
	<div class="table">
		<table>
			<tr>	
				<td> ��� �������������  </td>
				<td> ������ </td>
				<td> ������� </td>
				<td> ������ </td>
				<td></td>
				<td></td>
			</tr>
			<?php while ($goods =  mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td> <?php echo $goods['Name']; ?> </td>	
					<td> <?php echo $goods['Adress']; ?> </td>	
					<td> <?php echo $goods['Phone']; ?> </td>
					<td> <?php echo $goods['Salary']; ?> </td>
					<td> <a href="function/UpdateProf.php?id=<?= $goods['Name']; ?>" >��������</a></td>
					<td> <a href="function/deleteProf.php?id=<?= $goods['Name']; ?>" >�������</a></td>
				</tr>
				<?php 
			}?>
		</table>
	</div>
	<div>
		<form action="function/createProf.php" method="post">
			<div id="dark"> <!--����������� ���� create-->
				<div id="okno">
					�������� ������<br>
					<a> ������� ��� ����������</a>
					<input type="text" name="fio"><br><br>
					<a> ������� ����� ����������</a><br>
					<input type="text" name="adress"><br><br>
					<a> ������� ����� ��������</a><br>
					<input type="text" name="phone"><br><br>
					<a> ������� ������</a><br>
					<input name="salary"><br>
					<a href="#" class="close">������� ����</a>
					<button type="sumbit">�������</button>
				</div>
			</div>
		</form>
		<a href="#dark" class="alif" >Create</a>
		<a class="alif" href="1.xlsx"> Download table</a>
	</div>

</body>
</html>