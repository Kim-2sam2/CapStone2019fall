@extends('layouts.master')

@section('content')
<div class="login_intro">
        {{-- <img src="/images/button_background.png" width="1250" height="700"> --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="</script'>http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="</script'>http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
   <style type="text/css">
    #d1{
     width:770px;
     margin:0 auto;
    }

   </style>
   <!-- accordion 접히는 Script 선언 -->
  <script>
  $(function() {
    $( "#accordion" ).accordion();
    $('#accordion input[type="checkbox"]').click(function(e) {
        e.stopPropagation();
    });
  });
  </script>
</head>


<body>
<form action="writepage.html" method="get" id="form1">
<div id="d1">

 <h2 align="center">회원가입을 환영합니다.</h2><br/><br/>
  <tr>
   <td align="left"><font size="2">이용약관, 개인정보 수집 및 이용, 위치정보 이용약관(선택), 프로모션 안내 메일 수신(선택)에 모두 동의합니다.</font></td>

   <td><input type="checkbox" name="all" id="all"></td><hr/>
  </tr>
 <div>

   <h3><a href="#"><font size="2">대회유의사항 이용약관 동의(필수)</font><input type="checkbox" name="c1" id="c1"/></a></h3>
   <td><textarea readonly="readonly" rows="5" cols="66">
❍ 당선작(입선 포함)에 대한 일체의 권리(저작권 및 의장등록을 받을 수 있는 권리)는 한남대학교 국어문화원에 귀속되며, 실제 활용 및 제품제작에 활용할 수 있음
❍ 저작권에는 2차적 저작물 및 편집저작물 작성권리가 포함되어 있음
❍ 출품작이 순수 창작물이 아닐 경우(표절, 이전 수상작품 등) 수상이 취소될 수 있으며, 이와 관련된 법적 책임은 응모자에게 있음
❍ 출품작 접수는 한 번만 가능하며 수정/삭제가 불가함
❍ 공동 출품일 경우 상금은 대표자에게 지급됨
❍ 상금 및 부상에 대한 제세공과금은 수상자 부담
❍ 1차 서류 심사에 통과된 인원은 2차 본선 대회에 참석해야하며, 2차 본선대회에서의 발표는 영상으로 대회 공식 홈페이지에 등록되어 3차 온라인 대중 투표에서 활용됨
❍ 팀으로 신청할 경우 개인정보 수집 및 이용에 관한 동의서는 팀원 전체 작성 후 제출해야 함.
❍ 기타 요강에 명시되지 않은 내용은 주최사의 정책에 따름
   </textarea>
   <h3><a href="#"><font size="2">개인정보 수집 대한 안내(필수)</font><input type="checkbox" name="c2" id="c2"/></a></h3>
   <div>
     <textarea readonly="readonly" rows="5" cols="66">

□ 수집·이용목적 : 한남대학교 국어문화원에서는 한글날 기념 ‘우리말과 문화 활성화를 위한 기획안 및 창업 아이템 모의 투자대회 (크라우드펀딩 대회)’ 의 운영을 위해 아래와 같은 개인정보를 수집·관리하고 있습니다.
□ 수집항목: 성명, 생년월일, 이메일, 주소, 휴대전화번호 등
□ 이용범위 : 행정목적 달성에 필요한 최소한의 범위로 합니다.
□ 보유 및 이용기간 : 수집한 개인정보는 1년간 보관합니다.
    ※ 본 개인정보 수집동의를 거부하실 수 있으며 다만, 이 경우 ‘우리말과 문화 활성화를 위한 기획안 및 창업 아이템 모의 투자대회 (크라우드펀딩 대회)’ 신청 등이 제한됩니다.

   </textarea>
   </div>
   <h3><a href="#"><font size="2">개인정보 이용에 대한 안내(필수)</font><input type="checkbox" name="c3" id="c3"/></a></h3>
   <div>
     <textarea readonly="readonly" rows="5" cols="66">
□ 개인정보 제3자 제공 : 대회 관련 사항에 대한 의견수렴(정책 수립, 집행, 결과 확인, 만족도 조사 등)이 필요한 경우에 한하여 한남대학교 국어문화원 외 다른 부서 또는 유관기관, 업체 등에게 개인정보를 제공하여 활용할 수 있습니다.
 </textarea>
   </div>
 </div>
  <tr>
   <td align="left"><font size="2">이벤트 등 프로모션 알림 메일 수신(선택)</font></td>
   <td><input type="checkbox" name="c4" id="c4"></td><hr/>
  </tr>

 <div align="center">
  <br/>
  <input type="submit" value="동의"><input type="reset" value="비동의">
  <br/>
 </div>
</div>
</form>
<!-- check Box 이벤트처리를 위한 Script -->
<script>
var doc = document;
  var form1 = doc.getElementById('form1');
  var inputs = form1.getElementsByTagName('INPUT');
  var form1_data = {
   "c1": false,  //전체 선택
   "c2": false,  //필수 선택 1
   "c3": false   //필수 선택 2
  };

  var c1 = doc.getElementById('c1');
  var c2 = doc.getElementById('c2');
  var c3 = doc.getElementById('c3');

  function checkboxListener() {
   form1_data[this.name] = this.checked; //각각 자신의 checkBox를 Checked 상태로 바꿈
  }


   c1.onclick = c2.onclick = c3.onclick = checkboxListener;   //c1, C2, C3를 checkBoxListenner를 호출하여
                                                                   //Checked로 바꿈
   var all = doc.getElementById('all');  //전체 체크를 위한 체크박스 선언

   all.onclick = function() {  //전체 체크를 누를 시
    if (this.checked) {
     setCheckbox(form1_data, true);   //form1_data(c1,c2,c3)의 값을 모두 Checked로 바꿈
    } else {
     setCheckbox(form1_data, false);  ////form1_data(c1,c2,c3)의 값을 모두 no checked로 바꿈
    }
   };


   function setCheckbox(obj, state) { //checkbox상태 변경하는 함수
    for (var x in obj) {
     obj[x] = state;

     for(var i = 0; i < inputs.length; i++) {
      if(inputs[i].type == "checkbox") {
       inputs[i].checked = state;
      }
     }

    }
   }

  form1.onsubmit = function(e) {
   e.preventDefault();

   if ( !form1_data['c1'] ) {
    alert('대회유의사항 이용약관에 동의하지 않았습니다.');
    return false;
   }

   if ( !form1_data['c2'] ) {
    alert('개인정보 수집 및 이용에 대한 안내를 동의하지 않았습니다.');
    return false;
   }

   if ( !form1_data['c3'] ) {
    alert('개인정보 수집 및 이용에 대한 안내를 동의하지 않았습니다.');
    return false;
   }

   this.submit();
  };
</script>
</body>
</html>
</div>
@endsection
