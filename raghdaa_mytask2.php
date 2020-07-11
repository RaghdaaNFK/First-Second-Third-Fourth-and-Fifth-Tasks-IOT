<?php

    require_once "raghdaa2 \ database.php";
?>

<!DOCTYPE html>
<html>
<br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/>

<head>
<b> <h1 style="text-align:center"> Robot Control Panel <h1/> <b/>
<title> RAGHDAA KASAR</title>
<style>
h1 { color: white; }
.Raghdaa{
text-align:center;
width: 200px;
height:100px;
size:100px;}
body {
background-image: url(https://image.freepik.com/free-photo/diy-electronic-maker-tools-components-black-background_39944-9.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}


</style>
</head>
<body>
     <form action="" method="post"> 
<h2> <hr> <center>  
<button class="raghdaakasar"  name="B" style="background:LightGray;"><b> BACKWARD</b></button>
<button class="raghdaakasar"   name="F" style="background:LightGray;"><b> FORWARD </b></button>
<br/>
<button class="raghdaakasar"   name="L" style="background:LightGray;"><b> LEFT </b></button>
<button class="raghdaakasar"   name="R" style="background:LightGray;"><b> RIGHT</b></button>
<br/>
<button class="raghdaakasar"   name="S" style="background:powderblue;"><b> STOP</b></button>
<h2/></center></form>

<body/>
<html/>


<?php
$result='';
if(isset($_POST['R'])){
$result = 'R';
$sql = "INSERT INTO`the control panel buttons`('LEFT','RIGHT','FORWARDS','BACKWARDS','STOP') VALUES('','$result','','','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

$result='';
if(isset($_POST['L'])){
$result = 'L';
$sql = "INSERT INTO`the control panel buttons`('LEFT','RIGHT','FORWARDS','BACKWARDS','STOP') VALUES('$result','','','','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}


$result='';
if(isset($_POST['F'])){
$result = 'F';
$sql = "INSERT INTO`the control panel buttons`('LEFT','RIGHT','FORWARDS','BACKWARDS','STOP') VALUES('','','$result','','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

$result='';
if(isset($_POST['B'])){
$result = 'B';
$sql = "INSERT INTO`the control panel buttons`('LEFT','RIGHT','FORWARDS','BACKWARDS','STOP') VALUES('','','',$result','')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

$result='';
if(isset($_POST['S'])){
$result = 'S';
$sql = "INSERT INTO`the control panel buttons`('LEFT','RIGHT','FORWARDS','BACKWARDS','STOP') VALUES('','','','',$result')";
if(mysqli_query($mysqli, $sql)){
echo "Records inserted successfully";

}else{
echo "ERROR:Could not able to execute $sql. " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}

?>



