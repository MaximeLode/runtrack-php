<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table align = "left" border = "1" cellpadding = "3" cellspacing = "2">  
<tr>  
<td> type </td>  
<td> nom </td>  
<td> valeur </td>  
</tr> 
    <?php
    $str = "Hello";
    $int = 60;
    $float = 12.5;
    $boolean = TRUE;
    echo "<tr>";  
    echo "<td> string </td>";  
    echo "<td> str </td>";
    echo "<td> $str </td>";
      echo "</tr>"; 
    echo "<tr>";  
    echo "<td> entier </td>";  
    echo "<td> int </td>";
    echo "<td> $int </td>";
      echo "</tr>"; 
    echo "<tr>";  
    echo "<td> float </td>";  
    echo "<td> float </td>";
    echo "<td> $float </td>";
      echo "</tr>"; 
    echo "<tr>";  
    echo "<td> boolean </td>";  
    echo "<td> bool </td>";
    echo "<td> $boolean </td>";
      echo "</tr>"; 

    ?>
</body>
</html>