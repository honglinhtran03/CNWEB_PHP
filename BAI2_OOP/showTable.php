<?php
$op=$_GET["chon"];
if($op!=""){
    include("database.class.php");
    $dao=new Dao("root","","udn");
    $sql="select * from {$lop}";
    $header="DANH SÁCH {$lop}";
    $dao->table($sql,$header);

}
?>