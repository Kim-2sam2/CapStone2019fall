<?php 
include ($_SERVER['DOCUMENT_ROOT']."/connect.php");

$line = ["01F001","02F001","03F001"];

$fp = fopen("./log/update_log.txt","a");
fwrite($fp, "[".date("Y-m-d H:i:s")."]  : ");
fwrite($fp, implode(" ",$_POST));


for($i=0;$i<count($line);$i++)
{
    if(isset($_POST[$line[$i]])){
        fwrite($fp, "   ".$line[$i]."  ".implode(" ",$_POST)."\n");
        $check = $_POST[$line[$i]];
        fwrite($fp, implode(" ", $check));
        for($j=0;$j<count($check);$j++)
        {
            
            $sql = "CALL usp_books_check_place('".$line[$i]."','".$check."')";
            $result = mysqli_query($connect,$sql);
            fwrite($fp, $sql."\n");
        }
        
    }
}
fwrite($fp, "\n");
