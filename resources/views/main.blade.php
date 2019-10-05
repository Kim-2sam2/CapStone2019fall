@extends('layouts.master')

@section('content')
<div class="main_title" align="center">
        <br><br>
    <h1>도서 관리 프로그램 </h1>
    <h5>'Capstone Project - Cre8'</h5>
        <br><br>

    {{-- <img src="/images/main_logo.png" width="500" height="500"> --}}
        <br>
    <table width ="600"align="center">

    </table>

<br><br>
<hr width="700">
<br>
<table width ="600"align="center">
        <thead>
            <tr>
                <td > <h1><u>응모자격</u></h1></td>
                <td style="padding-left: 120px;">우리말과 문화를 사랑하는 누구나</td>
            </tr>
            <tr>
                    <td rowspan="4"> <h1><u>응모일정</u></h1></td>
                    <td style="padding-left: 120px;">응모 기간 : 2019. 9. 9.(월)~2019. 10. 25.(금)</td>

                </tr>
            <tr>

                    <td style="padding-left: 120px;">서류 평가 : 2019. 10. 26.(토)~2019. 11. 3.(일)</td>
            </tr>
            <tr>

                    <td style="padding-left: 120px;">발표 평가 : 2019. 11. 8.(금)</td>
            </tr>
            <tr>

                    <td style="padding-left: 120px;">대중 투표 : 2019. 11. 8.(금)~2019. 11. 15.(금)</td>
            </tr>
        </thead>
</table>
<br><br>
<hr width="700">
<br>


<div id="search_box2">
    <form action="/page/board/search_result.php" method="get">
    <select name="catgo">
      <option value="title">제목</option>
      <option value="name">글쓴이</option>
      <option value="content">내용</option>
    </select>
    <input type="text" name="search" size="40" required="required"/> <button>검색</button>
  </form>
</div>



<br><br><br><br><br><br><br>
</div>

@endsection
