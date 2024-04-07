<html>  
<body>  
<table border ="1">
<?php    
$i = 1;
$size = $_POST['size'];
echo "<tr>";
echo "<th></th>";

    while($i <= $size) {
        echo "<th> $i </th>";
        $i++;
    }
echo "</tr>";
$i = 1;

while($i <= $size) {  
    echo "<tr>";
    echo "<td> $i </td>";
    $j = 1;

    while($j <= $size) {
        echo "<td>" .$i*$j. "</td>";
        $j++;
    }
    
    echo "</tr>";  
  $i++;  
}   
?>    
</table>  
</body>  
</html>  