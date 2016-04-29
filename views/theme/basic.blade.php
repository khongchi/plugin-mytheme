{{-- 저 대신 frame.blade.php를 뿌려주세요.--}}
@extends('mytheme::views.theme.frame')

{{-- 그대신 theme_content section 에 아래 내용을 넣어서 뿌려주세요. --}}
@section('theme_content')
    <!-- VISUAL  -->
    <!-- [D] 타이틀 영역에 백그라운 이미지 적용시 클래스 sub_img 추가 -->
    <div class="visual sub">
        <!-- [D] 백그라운 이미지 적용 (디폴트 이미지 사이즈 1440x160) -->
        <span class="bg_img" style="background-image:url('http://contest.xpressengine.com/templates/basic/img/subtitle.png')"></span>
        <span class="mask"></span>
        <div class="sub_title">
            <h1>풀컨텐츠</h1>
            <div class="page_location">
                <p>Yor are here:</p>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">레이아웃</a></li>
                    <li><a href="#">서브레이아웃</a></li>
                    <li><a href="#">풀컨텐츠</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /VISUAL -->

    <!-- [D] 좌측 LNB(기본) : body sub
             우측 LNB : body sub right
             LNB 미노출 : body sub no_lnb  -->
    <div class="body {{ $config->get('sidebar', 'sub no_lnb') }}">

        <!-- LNB -->
        <nav class="lnb">
            <div class="top_thumb">
                <img src="http://contest.xpressengine.com/templates/basic/img/img_top.png" width="222" height="200" alt="">
            </div>
            <ul>
                <li><a href="#">메인 레이아웃</a></li>
                <!-- [D]3depth 노출시 li에 클래스 divide 추가 -->
                <li class="divide">
                    <!-- [D]2depth 메뉴명은 사용자 설정에 따라 노출/미노출 가능 -->
                    <span>서브 레이아웃</span>
                    <ul>
                        <li class="active"><a href="#">풀컨텐츠</a></li>
                        <li><a href="#">2단 좌측 LNB</a></li>
                        <li><a href="#">2단 우측 LNB</a></li>
                    </ul>
                </li>
                <li class="divide">
                    <span>서브 타이틀</span>
                    <ul>
                        <li><a href="#">빵조각 - 배너형</a></li>
                        <li><a href="#">빵조각 - 기본형</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /LNB -->

        <!-- CONTENT -->
        <div class="content" id="content">

            <!-- UI TEST -->
            <!-- [D] 개발시 삭제 -->
            <nav class="category">
                <ul>
                    <li class="active"><a href="#">ALL</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">VIDEO</a></li>
                </ul>
            </nav>
            <ul class="ui_test">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <!-- /UI TEST-->

        </div>
        <!-- /CONTENT -->
    </div>
@endsection
