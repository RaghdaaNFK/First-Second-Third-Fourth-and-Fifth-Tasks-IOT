<?php

   require_once "raghdaa2\database.php";
?>

<!DOCTYPE html>
<html>
<head> <link rel="stylesheet"> </head>

<body>
<div class="controller pl-5 pr-5">
<br><br>
<div class="buttons text-center"style="text-align:center" role="group">

<form action="">
                     
<label for="right">RIGHT:</label><br>
<input type="number" id="right1" name="fname" value=""><br>
  
<label for="forwards">FORWARDS:</label><br>
<input type="number" id="forwards2" name="fname" value=""><br>
  
<label for="left">LEFT:</label><br>
<input type="number" id="left3" name="lname" value=""><br><br>   

<input type="button" value="SAVE">
<input type="button" value="START">
<input type="button" value="DELETE">

</form> 

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    $RIGHT = (int) $_POST['RIGHT'];
    $FORWARDS = (int) $_POST['FORWARDS'];
    $BACKWASRDS = (int) $_POST['BACKWARDS'];

    //TO SAVE THE DATA
    
if(isset($_POST['SAVE'])){
$result = 'R';
$sql = "INSERT INTO`MOVE_INFO`('LEFT','RIGHT','FORWARDS','BACKWARDS','STOP') VALUES('$LEFT','$RIGHT','$FORWARDS','$BACKWARDS','$STOP')";
if(mysqli_query($mysqli, $sql)){
echo "";
}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
$result = "SELECT'RIGHT','FORWARDS','BACKWARDS' FROM 'MOVE_INFO'";
echo "<center><h2> Tracking The Robot</h2>";
echo "<center> <table border ='1'>
<tr>
<th>RIGHT</th>  <th>FORWARDS</th> <th>BACKWARDS</th>  
</tr";
if ($result =$mysqli->query($result)){
    while($row= $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>". $row['RIGHT']."</td>";
        echo "<td>". $row['forwards']."</td>";
        echo "<td>". $row['backwards']."</td>";
        echo "</tr>";
    }
    echo"</tab;e>";
}
mysqli_close($mysqli);
}
//TO DELETE THE DATA

elseif(isset($_POST["delete"])){
    $RIGHT ='';
    $FORWARDS='';
    $BACKWARDS='';
   
}


//START AND DRAW THE LINE

elseif(isset($_POST["start"])){
 echo'<center><svg height="200" width"200" style="background-color:red">
     <path d="M 50,50 L 50,' .$FORWARDS.'h'.$RIGHT.',0 z stroke-width:8" />
     </svg>';
}
}

?>