{{-- assets file load --}}
{{ XeFrontend::css("http://contest.xpressengine.com/templates/basic/css/layout.basic.css")->load()  }}
{{ XeFrontend::css("http://contest.xpressengine.com/templates/basic/css/welcome.css")->load()  }}

{{ XeFrontend::js("http://contest.xpressengine.com/templates/basic/js/layout.basic.js")->load() }}
{{ XeFrontend::js("http://contest.xpressengine.com/templates/basic/js/colorset_test.js")->load() }}

{{-- meta tag --}}
{{ XeFrontend::meta()->name('viewport')->content('width=1100')->load() }}

<!-- [D] Fixed header를 위하여 클래스 fixed_header 추가 -->
<div class="container fixed_header">
    <p class="skip"><a href="#content">메뉴 건너뛰기</a></p>
    <div class="header_wrap">
        <header class="header">
            <h1>
                <a href="{{ url() }}" id="siteTitle">
                    <img src="{{ $config->get('logoImagePath', 'http://contest.xpressengine.com/templates/basic/img/logo.png') }}" alt="{{ $config->get('logoTitle', 'XE Basic') }}">
                </a>
            </h1>
            <div class="side">
                @include('mytheme::views.theme.userinfo')
            </div>
            <!-- GNB -->
            @include('mytheme::views.theme.gnb')
            <!-- /GNB -->
        </header>
    </div>

    @section('theme_content')

    @show

    <div class="footer_wrap">
        <footer class="footer">
            <div class="f_info">
                <p class="f_logo"><a href="#"><img src="http://contest.xpressengine.com/templates/basic/img/f_logo.png" alt="XE Basic"></a></p>
                <ul class="lst_sns">
                    <li><a href="#"><i class="xi-facebook"></i><span class="blind">Facebook</span></a></li>
                    <li><a href="#"><i class="xi-twitter"></i><span class="blind">Twitter</span></a></li>
                    <li><a href="#"><i class="xi-linkedin"></i><span class="blind">Linkedin</span></a></li>
                    <li><a href="#"><i class="xi-github"></i><span class="blind">Github</span></a></li>
                    <li><a href="#"><i class="xi-social-rssfeed"></i><span class="blind">RSS Feed</span></a></li>
                    <li><a href="#"><i class="xi-google-plus"></i><span class="blind">Google plus</span></a></li>
                </ul>
                <p class="site_name">XpressEngine Contest Online<br><a href="#">www.xpressengine.com</a></p>
                <p class="copyright">Copyright @ <a href="#">NAVER Corp.</a><br>Supported by <a href="#">D2 Program</a>.</p>
            </div>
            <div class="f_info2">
                <div class="site_map">
                    <ul>
                        <li>
                            <a href="#">컬러테마</a>
                            <ul>
                                <li><a href="#">Royal Classic</a></li>
                                <li><a href="#">Grape Fruit</a></li>
                                <li><a href="#">Hot Pink</a></li>
                                <li><a href="#">Orchid</a></li>
                                <li><a href="#">Blue Jeans</a></li>
                                <li><a href="#">Mint</a></li>
                                <li><a href="#">Sunflower</a></li>
                                <li><a href="#">Java Coffee</a></li>
                                <li><a href="#">Gray</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">레이아웃</a>
                            <ul>
                                <li><a href="#">메인 레이아웃</a></li>
                                <li><a href="#">서브 레이아웃</a></li>
                                <li><a href="#">서브 타이틀</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">로그인</a>
                            <ul>
                                <li><a href="#">로그인 일반</a></li>
                                <li><a href="#">로그인 모달</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">메시지</a>
                        </li>
                        <li>
                            <a href="#">라이선스</a>
                        </li>
                        <!-- [D] 6번째 메뉴에 클래스 clear 추가 -->
                        <li class="clear">
                            <a href="#">6번째 메뉴(예시)</a>
                        </li>
                    </ul>
                </div>
                <div class="f_more_info">
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">개인정보취급방침</a></li>
                        <li><a href="#">운영규칙</a></li>
                        <li><a href="#">이메일찾기</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<a href="#" class="btn_top"><i class="xi-angle-up"><span class="blind">위로가기</span></i></a>

