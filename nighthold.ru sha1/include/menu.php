﻿<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM menu";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "<li class='menu__item'> <div class='menu__icon'>
			<picture> <img src=" . $row["icon"] . "></picture> </div>
			<a href='$row[link]' class='$row[class]'>$row[name]</a>";
    }
    echo "</li>";
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>