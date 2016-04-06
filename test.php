<?php
/**
 * Created by PhpStorm.
 * User: Xinnan
 * Date: 3/21/2016
 * Time: 2:59 PM
 */
require_once 'PHP\include.php';
//$sql = "select * from programs WHERE Channel='KMTV'";
$sql = "select Pid, DueTime  from programs WHERE Channel = 'KMTV'";
$result = mysqli_query($link,$sql);
$myarray = array();
while($row =mysqli_fetch_assoc($result))
{
    $myarray[] = $row;
}
echo json_encode($myarray);

