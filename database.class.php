<?php
class Dao{
    private $con;
    function __construct($user,$pass,$db)
    {
        $host=$_SERVER[ 'SERVER_NAME' ];
        $this->con=mysql_connect($host,$user,$pass,$db);

    }
    public function query($sql){
        mysqli_query($this->con,"set names 'utf8'");
        $rs=mysqli_query($this->con,$sql);
        return $rs;
    }
    function table($sql,$header){
        $rs=$this->query($sql);
        $fielinfo=mysqli_fetch_fiels($rs);
        $str="<table><tr>";
        foreach ($fielinfo as $Val){
            $name=$Val->name;
            $str.="<td>".$r[name]."</td">;
        }
        $str.="</tr>";
    }
    $str.="</table>";
    echo "<h3>{header}</h3>";
    echo $str;
}
}
?>