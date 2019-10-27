
<?php



$connect = mysqli_connect('127.0.0.1', 'root', '', 'cre8library', '3306');
$sql = "";
// 2. 글 데이터 불러오기
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
echo $sql;
echo $connect;
$result = mysqli_query($connect,$sql);

$i = 0;
while($data = mysqli_fetch_array($result)){
    echo $data['BookTitle'];
    $i++;
}
if($i ==0)
{
    echo "검색결과 없음";
}
?>                

