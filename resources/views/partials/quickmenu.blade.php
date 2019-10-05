<div id="quickmenu">
    @if (\Request::is('/'))
    <div class="squarebutton paper on"><a href ={{ url('/') }}>HOME</a></div>
    @else
    <div class="squarebutton paper"><a href ={{ url('/') }}>HOME</a></div>
    @endif

    @if (\Request::is('guideline'))
    <div class="squarebutton paper on"><a href ={{ url('/guideline') }}>소개</a></div>
    @else
    <div class="squarebutton paper"><a href ={{ url('/guideline') }}>소개</a></div>
    @endif

    @if (\Request::is('receipt'))
    <div class="squarebutton paper on"><a href ={{ url('/receipt') }}>도서검색</a></div>
    @else
    <div class="squarebutton paper"><a href ={{ url('/receipt') }}>도서검색</a></div>
    @endif

    @if (\Request::is('login'))
    <div class="squarebutton paper on"><a href ={{ url('/login') }}>로그인</a></div>
    @else
    <div class="squarebutton paper"><a href ={{ url('/login') }}>로그인</a></div>
    @endif
</div>
