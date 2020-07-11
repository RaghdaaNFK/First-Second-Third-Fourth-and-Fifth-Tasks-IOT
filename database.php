<?
$connection = [
'host' =>'localhost',
'user' =>'root',
'database' => 'raghdaa_task2'
];

$mysqli = mysqli_connect($connection['host'],
$connection['user'],
"",
$connection['database']);


if($mysqli->connect_error){
   die($mysqli->connect_error);
}






