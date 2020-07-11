<?php

$result="SELECT'LEFT','RIGHT','FORWARDS','BACKWARDS','STOP' FROM 'the control panel buttons'
    ORDER BY id DESC
    LIMIT 1";
$query = mysqli_query($mysqli,$result ) or die(mysql_error());
while($row = mysqli_fetch_assoc($query)){
    foreach($row as $row){
        print "$row/t";
    }
}
?>