<?php 
require_once  '../include/db.php';
$Name_id = $_GET['id'];
//echo $Number_zcht_id;

$Name = mysqli_query($link,"SELECT * FROM `professor` WHERE Name = '$Name_id';");
$Name = mysqli_fetch_assoc($Name);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/Update.css">
     <title></title>
 </head>
 <body>
    <form action="UpdateProf1.php" method="post">
            <div id="dark"> <!--����������� ���� create-->
                <div id="okno">
                    ��������� ������<br>
                    <input type="hidden" name="id" value="<?=$Name['Name']; ?>">
                    <a>  ��� ����������</a><br>
                    <input type="text" name="fio" value="<?=$Name['Name']; ?>"><br>
                    <a>  ����� ����������</a><br>
                    <input type="text" name="adress" value="<?=$Name['Adress']; ?>"><br><br>
                    <a>  ����� ��������</a><br>
                    <input type="text" name="phone" value="<?=$Name['Phone']; ?>"><br><br>
                    <a>  ������</a><br>
                    <input name="salary" value="<?=$Name['Salary']; ?>"><br>
                    <button type="sumbit">��������</button>
                </div>
            </div>
        </form>
 </body>
 </html>