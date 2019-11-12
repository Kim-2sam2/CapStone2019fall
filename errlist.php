<?php 
include ($_SERVER['DOCUMENT_ROOT']."/connect.php");
$sql = "CALL usp_books_list_PlaceErr()";
            
$result = mysqli_query($connect,$sql);


$i = 0;
while($data = mysqli_fetch_array($result)){
    echo $data['BookTitle']."<Br>";
    if($data['BookImage'])
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['BookImage'] ).'"/><br>';
    echo "잘못된 위치".$data['PlaceErr']."<Br>";
    $i++;
}
if($i ==0)
{
    echo "검색결과 없음";
}
?>                

