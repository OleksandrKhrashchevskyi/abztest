<?php
error_reporting(0);
$link = mysqli_connect('localhost', 'root', '',
    'army');
if(mysqli_connect_errno())
{
    echo 'Ошибка в подключению к БД';
}
else{

    echo 'Список персонала';}




$resdb = mysqli_query($link,"SELECT *
 FROM army");





mysqli_close();




?>

<!doctype html>
<html lang="en">
<head>
<title></title>
	
	<style type="text/css">@import "assets/css/default.css";</style>
	
	<script type="text/javascript" src="../jquery-latest.js"></script>
	<script type="text/javascript" src="../jquery.metadata.js"></script>
	<script type="text/javascript" src="../jquery.tablesorter.js"></script>
	<script type="text/javascript">



	$(function() {
		$("table").tablesorter();
	});

		</script>
</head>

<body>



<form name="search" method="post" action="search.php">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button>
</form>




<table id="large" cellspacing="0">
	
	<thead>



<tr>
    <th>id</th>
    <th>Name</th>
    <th>Sex</th>
    <th>Skin</th>
    <th class="{sorter:'metadata'}">Money</th>
    <th>Class</th>
    <th>Department</th>

</tr>
    </thead>


    <tbody>

    <?php foreach ($resdb as $item) { ?>

    <tr>
        <td><?php echo $item['id'] ?></td>
        <td><?php echo $item['name'] ?></td>
        <td><?php echo $item['sex'] ?></td>
        <td><?php echo $item['skin'] ?></td>
        <td><?php echo $item['money'] ?></td>
        <td><?php echo $item['class'] ?></td>
        <td><?php echo $item['department'] ?></td>
    </tr>


    <?php

    }
?>



	</tbody>



</table>




	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2189649-1";
urchinTracker();
</script>
	</body>
</html>