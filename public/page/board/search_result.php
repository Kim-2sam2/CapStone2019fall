
<?php
include ($_SERVER['DOCUMENT_ROOT']."/connect.php");

// 어느 항목으로 책을 검색하는지
$type = $_GET['catgo'];

    if($type== "name"){
        $sql = "CALL usp_books_search_Author('".$_GET['search']."')"; // 저자
    }else if($type=="content"){
        $sql = "CALL usp_books_search_IssueState('".$_GET['search']."')"; // 출판사
    }else if($type=="number"){
        $sql = "CALL usp_books_search_ISBN('".$_GET['search']."')"; // ISBN
    }else if($type=="title"){
        $sql = "CALL usp_books_search_Title('".$_GET['search']."')"; // 제목
    }

$result = mysqli_query($connect,$sql);

$i = 0;
while($data = mysqli_fetch_array($result)){
    echo $data['BookTitle']."<Br>";
    if($data['BookImage'])
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['BookImage'] ).'"/><br>';
    $i++;
}
if($i ==0)
{
    echo "검색결과 없음";
}
?>                

