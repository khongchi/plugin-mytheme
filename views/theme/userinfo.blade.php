<ul>
    <!-- [D]회원이 관리자 권한을 가지고 있을 경우 노출  -->
    @if(auth()->user()->isManager())
        <li><a href="{{ route('settings') }}"><i class="xi-cog"></i><span class="blind">관리</span></a></li>
    @endif

    <li class="hover">

        @if(!auth()->check())
            <!-- before_login -->
        <a href="#" class="login_after"><img src="http://contest.xpressengine.com/templates/basic/img/ico_default.jpg" alt="로그인/회원가입"></a>
        <div class="ly ly_login">
            <ul>
                <li><a href="{{ route('login') }}">로그인</a></li>
                <li><a href="{{ route('auth.register') }}">회원가입</a></li>
            </ul>
            <span class="edge"></span>
        </div>
        <!-- /before_login -->
        @else
            <!-- after_login -->
        <!-- [D] 프로필 이미지를 등록하지 않았을 경우 기본 이미지 노출, alt 속성에는 프로필명 적용 -->
        <a href="#" class="login_after"><img src="{{ auth()->user()->getProfileImage() }}" alt="{{ auth()->user()->getDisplayName() }}님 프로필"></a>
        <div class="ly ly_login">
            <ul>
                <li><a href="{{ route('member.settings') }}">설정 보기</a></li>
                <li><a href="{{ route('member.profile', [auth()->id()]) }}">프로필 보기</a></li>
                <li class="logout"><a href="{{ route('logout') }}">로그아웃</a></li>
            </ul>
            <span class="edge"></span>
        </div>
        <!-- /after_login -->
        @endif
    </li>
</ul>
