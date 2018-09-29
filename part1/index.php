<?php
error_reporting(0);
$link = mysqli_connect('localhost', 'root', '', 'dbabz');
if(mysqli_connect_errno())
{
    echo 'Ошибка в подключению к БД';
}
else{

    echo 'Список персонала';}
?>



<?php require ('header.php');?>



<?php

$resdb = mysqli_query($link,"SELECT *
 FROM class5, class4, class3, class2, class1 
  where class2.department = class3.department 
  and  class3.department = class4.department 
  and class4.department = class5.department
  and class5.department = class1.department");

while($row = mysqli_fetch_array($resdb))
{
    $name5=$row['name5'];
    $class5=$row['class5'];
    $name4=$row['name4'];
    $class4=$row['class4'];
    $name3=$row['name3'];
    $class3=$row['class3'];
    $name2=$row['name2'];
    $class2=$row['class2'];
    $name1=$row['name1'];
    $class1=$row['class1'];


    $result5 = "$class5: $name5";
    $result4 = "$class4: $name4";
    $result3 = "$class3: $name3";
    $result2 = "$class2: $name2";
    $result1 = "$class1: $name1";
?>

<p>
    <ul>
        <li><?php echo $result1 ?>
            <ul>
                <li><?php echo $result2 ?>
                    <ul>
                        <li><?php echo $result3 ?>
                            <ul>
                                <li><?php echo $result4 ?>
                                    <ul>
                                        <li><?php echo $result5 ?>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>
            </ul>
        </li>
</ul>
    </p>






<?php
    echo $result;
}


mysqli_close();

?>