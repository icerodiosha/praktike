<?php
include "include/db.php";

	$result = mysqli_query($link, "SELECT * FROM `student`");
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Student</title>
		<link rel="stylesheet" type="text/css" href="../css/Window.css">

		<link rel="stylesheet" type="text/css" href="../css/Test.css">
	</head>
	<body>
		<form> 
			<div class="alif">
				<a href="Test.php" class="alif">Student</a>
				<a href="Course_std.php" class="alif">Course_student</a>
				<a href="course.php" class="alif" >Course</a>
				<a href="Course_professor.php" class="alif">Course_professor</a>
				<a href="Professor.php" class="alif">Professor</a>
			</div>
		</form>	
		<hr>
		<div class="table">
			<table>
				<tr>
					<td>������� ��� ��������</td>	
					<td>����� ����������</td>
					<td> ����� �������� </td>
					<td> ����� ������� </td>	
					<td> ������� ������������ </td>	
					<td></td>	
					<td></td>
				</tr>
				<?php while ($goods =  mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td> <?php echo $goods['Name']; ?> </td>	 
						<td> <?php echo $goods['Adress']; ?> </td>	
						<td> <?php echo $goods['Phone']; ?> </td>	
						<td> <?php echo $goods['Number_zcht']; ?> </td>
						<td> <?php echo $goods['Academic_perfomance']; ?> </td>	
						<td> <a href="function/UpdateStd.php?id=<?= $goods['Number_zcht']; ?>" >��������</a></td>
						<td> <a style="color: black;" href="function/delete.php?id=<?= $goods['Number_zcht']; ?>" >�������</a></td>
					</tr>
					<?php
				} ?>
			</table>
		</div>
		<div> 
			<form action="function/createSTD.php" method="post">
				<div id="dark"> 
					<div id="okno">
						�������� ������<br>
						<a> ������� ��� ��������</a>
						<input type="text" name="fio" ><br>
						<a> ������� ����� ����������</a><br>
						<input type="text" name="adress"><br>
						<a> ������� ����� ��������</a><br>
						<input type="text" name="phone"><br>
						<a> ������� ����� �������</a><br>
						<input type="nomber" name="nomber_zcht"><br>
						<a> ������� ������������ </a><br>
						<input name="perfomance"><br>
						<a href="#" class="close">������� ����</a>
						<button type="sumbit">��������</button>
					</div>
				</div>
			</form>
			<a href="#dark" class="alif" >Create</a>
			<a class="alif" href="1.xlsx"> Download table</a>
		</div>
		
	</div>
</body>
</html>