<div id="topmenu">
    <div class="logo"><a href="{{ url('/') }}"><img src="/images/logo.png" height="60px" width="auto"></a></div>
    <ul class="menu-list">
        <li class="menu">
            <div class="dropbtn">대회소개</div>
            <ul class="submenu">
                <li><a href="{{ url('/guideline') }}">공모요강</a></li>
                <li><a href="{{ url('/greet') }}">인사말</a></li>
            </ul>
        </li>
        <li class="menu">
            <div class="dropbtn">접수하기</div>
            <ul class="submenu">
                <li><a href="{{ url('/guideline') }}">접수하기</a></li>
                <li><a href="{{ url('/guideline') }}">접수확인</a></li>
            </ul>
        </li>
        <li class="menu">
            <div class="dropbtn">공지사항</div>
            <ul class="submenu">
                <li><a href="{{ url('/notice') }}">공지사항</a></li>
                <li><a href="{{ url('/faq') }}">질의응답</a></li>
                <li><a href="{{ url('/reference') }}">자료실</a></li>
            </ul>
        </li>
        <li class="menu">
            <div class="dropbtn">모의투자</div>
        </li>
        @auth
        <li class="menu">
            <div class="dropbtn">
                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            </div>
            <ul class="submenu">
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>
            </ul>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        @else
            <li class="menu"><div class="dropbtn"><a href="{{ route('login') }}">로그인</a></div></li>
            @if (Route::has('register'))
            <li class="menu"><div class="dropbtn"><a href="{{ route('register') }}">회원가입</a></div></li>
            @endif
        @endauth
    </ul>
</div>
