{{ XeFrontend::js([
    'http://contest.xpressengine.com/templates/basic/js/jquery.bxslider.js',
    'http://contest.xpressengine.com/templates/basic/js/camera.js',
    'http://contest.xpressengine.com/templates/basic/js/jquery.easing.1.3.js',
    'http://contest.xpressengine.com/templates/basic/js/layout.basic.js',
    'http://contest.xpressengine.com/templates/basic/js/colorset_test.js',
])->load() }}

{{ XeFrontend::css([
    'http://contest.xpressengine.com/templates/basic/css/jquery.bxslider.css',
    'http://contest.xpressengine.com/templates/basic/css/camera.css',
    'http://contest.xpressengine.com/templates/basic/css/widget.basic.css',
    'http://contest.xpressengine.com/templates/basic/css/widgetstyle.basic.css',
    'http://contest.xpressengine.com/templates/basic/css/welcome.css',
])->load() }}

{{ XeFrontend::html()->content(
    "<script>
        jQuery(function($){
            // main slide : camera show plugin 적용
            $('.camera_wrap').camera({
                height: '478px',
                pagination: true,
                thumbnails: false,
                playPause: false,
                loader: 'none',
                fx: 'simpleFade',
                time: 3000
            });
        });
    </script>"
)->load() }}


{{-- 저 대신 frame.blade.php를 뿌려주세요.--}}
@extends('mytheme::views.theme.frame')

{{-- 그대신 theme_content section 에 아래 내용을 넣어서 뿌려주세요. --}}
@section('theme_content')

        <!-- VISUAL  -->
        <div class="visual main">
            <div class="camera_wrap" style="display: block; height: 478px;"><div class="camera_fakehover"><div class="camera_src camerastarted paused">
                        <div data-src="http://contest.xpressengine.com/templates/basic/img/imgslider_01.jpg">

                        </div>
                        <div data-src="http://contest.xpressengine.com/templates/basic/img/imgslider_02.jpg">

                        </div>
                        <div data-src="http://contest.xpressengine.com/templates/basic/img/imgslider_03.jpg">

                        </div>
                        <div data-src="http://contest.xpressengine.com/templates/basic/img/imgslider_04.jpg">

                        </div>
                    </div><div class="camera_target"><div class="cameraCont"><div class="cameraSlide cameraSlide_0" style="visibility: visible; display: none; z-index: 1;"><img src="http://contest.xpressengine.com/templates/basic/img/imgslider_01.jpg?1461903515110" class="imgLoaded" data-alignment="" data-portrait="" width="1800" height="598" style="visibility: visible; height: 493.682px; margin-left: 0px; margin-top: -7.84111px; position: absolute; width: 1486px;"><div class="camerarelative" style="width: 1486px; height: 478px;"></div></div><div class="cameraSlide cameraSlide_1" style="display: none; z-index: 1;"><img src="http://contest.xpressengine.com/templates/basic/img/imgslider_02.jpg?1461903515350" class="imgLoaded" data-alignment="" data-portrait="" width="1800" height="598" style="visibility: visible; height: 493.682px; margin-left: 0px; margin-top: -7.84111px; position: absolute; width: 1486px;"><div class="camerarelative" style="width: 1486px; height: 478px;"></div></div><div class="cameraSlide cameraSlide_2 cameracurrent" style="display: block; z-index: 999;"><img src="http://contest.xpressengine.com/templates/basic/img/imgslider_03.jpg?1461903522147" class="imgLoaded" data-alignment="" data-portrait="" width="1800" height="598" style="visibility: visible; height: 493.682px; margin-left: 0px; margin-top: -7.84111px; position: absolute; width: 1486px;"><div class="camerarelative" style="width: 1486px; height: 478px;"></div></div><div class="cameraSlide cameraSlide_3 cameranext" style="display: none; z-index: 1;"><img src="http://contest.xpressengine.com/templates/basic/img/imgslider_04.jpg?1461903527375" class="imgLoaded" data-alignment="" data-portrait="" width="1800" height="598" style="visibility: visible; height: 493.682px; margin-left: 0px; margin-top: -7.84111px; position: absolute; width: 1486px;"><div class="camerarelative" style="width: 1486px; height: 478px;"></div></div><div class="cameraSlide cameraSlide_4 cameranext" style="z-index: 1; display: none;"><div class="camerarelative" style="width: 1486px; height: 478px;"></div></div></div></div><div class="camera_overlayer"></div><div class="camera_target_content"><div class="cameraContents"><div class="cameraContent" style="display: none;"><div class="camera_caption fadeIn" style="visibility: hidden; opacity: 1;"><div>
                                        <h1>SHARING, PUBLISHING.<br>&amp; PLEASURE.</h1>
                                        <p>지식을 나누고 컨텐츠를 출판하며 즐거움을 함께합니다.</p>
                                    </div></div></div><div class="cameraContent" style="display: none;"><div class="camera_caption fadeIn" style="visibility: hidden; opacity: 1;"><div>
                                        <h1>MAKING<br>WEB CULTURES</h1>
                                        <p>올바른 웹 문화를 지향합니다.</p>
                                    </div></div></div><div class="cameraContent cameracurrent" style="display: block;"><div class="camera_caption fadeIn" style="visibility: visible; opacity: 1;"><div>
                                        <h1>EVOLUTION &amp; INNOVATION<br>TOGETHER</h1>
                                        <p>함께 진화하고 혁신을 추구합니다.</p>
                                    </div></div></div><div class="cameraContent" style="display: none;"><div class="camera_caption fadeIn" style="visibility: hidden; opacity: 1;"><div>
                                        <h1>CREATE A GOOD DESIGN WITH<br>THE POSSIILITY OF TECHNOLOGY</h1>
                                        <p>기술의 가능성을 발굴하고 좋은 디자인을 만들어 갑니다.</p>
                                    </div></div></div></div></div><div class="camera_bar" style="display: none; top: auto; height: 7px;"><span class="camera_bar_cont" style="opacity: 0.8; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; background-color: rgb(34, 34, 34);"><span id="pie_0" style="opacity: 0.8; position: absolute; left: 0px; right: 0px; top: 2px; bottom: 2px; display: none; background-color: rgb(238, 238, 238);"></span></span></div><div class="camera_prev" style="opacity: 0;"><span><i class="xe-angle-left"></i><span class="blind">prev</span></span></div><div class="camera_next" style="opacity: 0;"><span><i class="xe-angle-right"></i><span class="blind">next</span></span></div></div><div class="camera_pag"><ul class="camera_pag_ul"><li class="pag_nav_0" style="position:relative; z-index:1002"><span><span>0</span></span></li><li class="pag_nav_1" style="position:relative; z-index:1002"><span><span>1</span></span></li><li class="pag_nav_2 cameracurrent" style="position:relative; z-index:1002"><span><span>2</span></span></li><li class="pag_nav_3" style="position:relative; z-index:1002"><span><span>3</span></span></li></ul></div><div class="camera_loader" style="display: none; visibility: visible;"></div></div>
        </div>
        <!-- /VISUAL -->

        <!-- WelcomeXE_Contest  -->
        <div class="welcomeXE_Contest">
            <article>
                <h1 class="accent_color">WELCOME XE CONTEST</h1>
                <p>2014년도 XE CONTEST에 참여하신걸 진심으로 환영합니다.<br>참여자분들이 다양하고 손쉽게 활용할 수 있도록 제작된 XE Contest 기본 테마는 아래와 같은 특징과 기능을 가지고 있습니다.</p>
                <section class="i1">
                    <img src="http://contest.xpressengine.com/templates/basic/img/img_welcome.jpg" width="346" height="346" alt="">
                    <h1>종이, 카드 메타포 디자인</h1>
                    <p>XEContest 테마 일반형은 는 Paper와 Card를 메타포로 합니다. 종이와 스티커, 카드 등의 프린트 디자인을 모티브로 하여 웹페이지의 이질감을 덜고 친숙하고 직관적인 UX를 제공합니다.</p>
                </section>
                <section class="i2">
                    <img src="http://contest.xpressengine.com/templates/basic/img/img_welcome2.jpg" width="346" height="346" alt="">
                    <h1>컬럼형 그리드 섹션</h1>
                    <p>XE 공모전 테마는 12컬럼으로 구성된 그리드 섹션을 적용할 수 있도록 가이드 페이지를 제공합니다. 이를 활용하여 위젯, 문서 페이지를 다양하고 손쉽게 구성할 수 있습니다. 또한 반응형 레이아웃으로 수정하기에 용이합니다.</p>
                </section>
                <section class="i3">
                    <img src="http://contest.xpressengine.com/templates/basic/img/img_welcome3.jpg" width="346" height="346" alt="">
                    <h1>확장형 컬러 테마</h1>
                    <p>XE 공모전 테마는 RGB 색상 값에 최적화된 12개의 기본 컬러 코드를 제공하며, 사용자가 손쉽게 컬러를 커스마이징할 수 있도록 source코드와 컬러 테마 가이드를 제공합니다.</p>
                </section>
                <section class="i4">
                    <img src="http://contest.xpressengine.com/templates/basic/img/img_welcome4.jpg" width="346" height="346" alt="">
                    <h1>XE 전용 아이콘폰트</h1>
                    <p>XE 개발 그룹에서 개발한 Iconfont를 적용하였습니다. 다양하고 확장성이 좋은 라인 아이콘들을 자신만의 UI Component에 쉽게 적용하여 사용할 수 있습니다.</p>
                </section>
                <section class="i5">
                    <img src="http://contest.xpressengine.com/templates/basic/img/img_welcome5.jpg" width="346" height="346" alt="">
                    <h1>간편한 레이어 슬라이더</h1>
                    <p>메인 레이아웃의 레이어 슬라이더와 게시판과 연동하는 이미지 슬라이더 위젯을 제공합니다. 간편하고 손쉬운 슬라이더 기능으로 콘텐츠를 손쉽게 노출할 수 있습니다.</p>
                </section>
                <section class="i6">
                    <img src="http://contest.xpressengine.com/templates/basic/img/img_welcome6.jpg" width="346" height="346" alt="">
                    <h1>다양한 UI 컴포넌트</h1>
                    <p>가장 보편적인 모듈, 위젯과 문서 스타일을 응용하여 손쉽게 활용할 수 있도록 개선된 UI 컴포넌트와 기본 가이드를 제공합니다. 커스터마이징하여 자신의 개성을 웹사이트에 표출해보세요.</p>
                </section>
            </article>
        </div>
        <!-- /WelcomeXE_Contest -->

        <div class="body main">

            <!-- CONTENT -->
            <div class="content" id="content">
                <div class="widget_page">
                    <h1 class="accent_color">BASIC WIDGET SYTLE</h1>
                    <p>게시판을 DB를 기반으로 한 메인페이지의 기본 위젯 스타일입니다.<br>리스트형, 웹진형, 블로그형, 갤러리형 위젯과 컨텐츠 슬라이더 위젯으로 구성되어 있습니다.</p>
                    <div class="xe-widget-wrapper" style="margin:0px 0px 0px 0px;border:1px solid rgb(221, 221, 221);width:351px;height:352px;float:left;background-color:rgb(250,250,250)">
                        <div class="simpleWidgetStyle">
                            <h2>목록형 위젯</h2>
                            <a href="#" class="widgetMoreLink"><i class="xe-plus"></i><span class="blind">더보기</span></a>
                            <div style="*zoom:1;padding:0 0px 0px 0px !important;">
                                <div class="widgetContainer">
                                    <ul class="widgetA">
                                        <li>
                                            <a href="#">
                                                <span class="title">[공지] XE Contest 공지사항 및 접수방법...</span>
                                                <span class="date">1 day</span>
                                                <div class="more_info">
                                                    <dl>
                                                        <dt><i class="xe-pencil"></i><span class="blind">글쓴이</span></dt>
                                                        <dd>XpressEngine</dd>
                                                        <dt><i class="xe-eye"></i><span class="blind">조회수</span></dt>
                                                        <dd>356</dd>
                                                        <dt><i class="xe-message-left-ellipsis"></i><span class="blind">댓글수</span></dt>
                                                        <dd>18</dd>
                                                    </dl>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="title">[공지] XE Contest 공지사항 및 접수방법...</span>
                                                <span class="date">2 day</span>
                                                <div class="more_info">
                                                    <dl>
                                                        <dt><i class="xe-pencil"></i><span class="blind">글쓴이</span></dt>
                                                        <dd>XpressEngine</dd>
                                                        <dt><i class="xe-eye"></i><span class="blind">조회수</span></dt>
                                                        <dd>356</dd>
                                                        <dt><i class="xe-message-left-ellipsis"></i><span class="blind">댓글수</span></dt>
                                                        <dd>18</dd>
                                                    </dl>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="title">[공지] XE Contest 공지사항 및 접수방법...</span>
                                                <span class="date">1 week</span>
                                                <div class="more_info">
                                                    <dl>
                                                        <dt><i class="xe-pencil"></i><span class="blind">글쓴이</span></dt>
                                                        <dd>XpressEngine</dd>
                                                        <dt><i class="xe-eye"></i><span class="blind">조회수</span></dt>
                                                        <dd>356</dd>
                                                        <dt><i class="xe-message-left-ellipsis"></i><span class="blind">댓글수</span></dt>
                                                        <dd>18</dd>
                                                    </dl>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="title">XE Contest 공지사항 및 접수방법을 안...</span>
                                                <span class="date">3 hrsy</span>
                                                <div class="more_info">
                                                    <dl>
                                                        <dt><i class="xe-pencil"></i><span class="blind">글쓴이</span></dt>
                                                        <dd>XpressEngine</dd>
                                                        <dt><i class="xe-eye"></i><span class="blind">조회수</span></dt>
                                                        <dd>356</dd>
                                                        <dt><i class="xe-message-left-ellipsis"></i><span class="blind">댓글수</span></dt>
                                                        <dd>18</dd>
                                                    </dl>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="title">XE Contest 공지사항 및 접수방법을 안...</span>
                                                <span class="date">23 hrs</span>
                                                <div class="more_info">
                                                    <dl>
                                                        <dt><i class="xe-pencil"></i><span class="blind">글쓴이</span></dt>
                                                        <dd>XpressEngine</dd>
                                                        <dt><i class="xe-eye"></i><span class="blind">조회수</span></dt>
                                                        <dd>356</dd>
                                                        <dt><i class="xe-message-left-ellipsis"></i><span class="blind">댓글수</span></dt>
                                                        <dd>18</dd>
                                                    </dl>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xe-widget-wrapper" style="margin:0px 0px 0px 18px;border:1px solid rgb(221, 221, 221);width:727px;height:352px;float:left;background-color:rgb(250,250,250)">
                        <div class="simpleWidgetStyle">
                            <h2>웹진형 위젯</h2>
                            <a href="#" class="widgetMoreLink"><i class="xe-plus"></i><span class="blind">더보기</span></a>
                            <div style="*zoom:1;padding:0 0px 0px 0px !important;">
                                <div class="widgetContainer">
                                    <ul class="widgetZineA">
                                        <li>
                                            <!-- [D] 사용자 설정에서 이미지 가로/세로 적용시 동일한 값 적용 -->
                                            <div class="thumb_area" style="width:120px;height:100px">
                                                <a href="#"><img src="http://contest.xpressengine.com/templates/basic/img/wg_thum-01.png" alt="" style="width:120px;height:100px"></a>
                                            </div>
                                            <div class="cont_area">
                                                <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. XE는...</p>
                                                <!-- [D] 작성자/날짜 노출시 적용
                                                <span class="author">by <a href="#">XE</a></span>
                                                <span class="date">2014.11.08</span> -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:120px;height:100px">
                                                <a href="#"><img src="http://contest.xpressengine.com/templates/basic/img/wg_thum-02.png" alt="" style="width:120px;height:100px"></a>
                                            </div>
                                            <div class="cont_area">
                                                <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. XE는...</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xe-widget-wrapper" style="margin:18px 18px 0px 0px;border:1px solid rgb(221, 221, 221);width:539px;height:727px;float:left;background-color:rgb(250,250,250)">
                        <div class="simpleWidgetStyle">
                            <h2>블로그형 위젯</h2>
                            <a href="#" class="widgetMoreLink"><i class="xe-plus"></i><span class="blind">더보기</span></a>
                            <div style="*zoom:1;padding:0 0px 0px 0px !important;">
                                <div class="widgetContainer">
                                    <ul class="widgetBlog">
                                        <!-- [D] 사용자가 li 높이값을 일괄적으로 지정할 수 있도록 적용 -->
                                        <li style="height:294px">
                                            <!-- [D] 사용자 설정에서 이미지 가로/세로 적용시 동일한 값 적용 -->
                                            <div class="thumb_area" style="width:238px;height:150px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/blg_thum-01.png" alt="" style="width:238px;height:150px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                            <span class="hover_info">
                                                <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                            </span>
                                                </div>
                                            </div>
                                            <!-- [D] 사용자 설정에서 이미지 가로길이 적용시 동일한 너비값 적용 -->
                                            <div class="cont_area" style="width:238px">
                                                <!-- [D] 빵조각 설정시 노출
                                                <a href-"#" class="breadcrumb">세미나/이벤트</a> -->
                                                <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트...</a></h3>
                                                <span class="author">by <a href="#">XE</a></span>
                                                <span class="date">2014.11.08</span>
                                                <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동....</p>
                                            </div>
                                        </li>
                                        <li style="height:294px">
                                            <div class="thumb_area" style="width:238px;height:150px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/blg_thum-02.png" alt="" style="width:238px;height:150px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                            <span class="hover_info">
                                                <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="cont_area" style="width:238px">
                                                <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트...</a></h3>
                                                <span class="author">by <a href="#">XE</a></span>
                                                <span class="date">2014.11.08</span>
                                                <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동....</p>
                                            </div>
                                        </li>
                                        <li style="height:294px">
                                            <div class="thumb_area" style="width:238px;height:150px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/blg_thum-03.png" alt="" style="width:238px;height:150px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                            <span class="hover_info">
                                                <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="cont_area" style="width:238px">
                                                <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트...</a></h3>
                                                <span class="author">by <a href="#">XE</a></span>
                                                <span class="date">2014.11.08</span>
                                                <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동....</p>
                                            </div>
                                        </li>
                                        <li style="height:294px">
                                            <div class="thumb_area" style="width:238px;height:150px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/blg_thum-04.png" alt="" style="width:238px;height:150px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                            <span class="hover_info">
                                                <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="cont_area" style="width:238px">
                                                <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트...</a></h3>
                                                <span class="author">by <a href="#">XE</a></span>
                                                <span class="date">2014.11.08</span>
                                                <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동....</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xe-widget-wrapper" style="margin:18px 0 0px 0px;border:1px solid rgb(221, 221, 221);width:539px;height:570px;float:left;background-color:rgb(250,250,250)">
                        <div class="simpleWidgetStyle">
                            <h2>컨텐츠 슬라이더 위젯</h2>
                            <a href="#" class="widgetMoreLink"><i class="xe-plus"></i><span class="blind">더보기</span></a>
                            <div style="*zoom:1;padding:0 0px 0px 0px !important;">
                                <div class="widgetContainer">
                                    <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 466px;"><ul class="bxslider contents_slider" style="width: 615%; position: relative; left: -539px;"><li style="float: left; list-style: none; position: relative; width: 539px;" class="bx-clone">
                                                    <div class="thumb_area">
                                                        <img src="http://contest.xpressengine.com/templates/basic/img/cont_thum4.png" alt="">
                                                    </div>
                                                    <div class="cont_area">
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                        <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. 수상작은 오픈소스로 공개하여 널리 이용됨은 물론 오픈소스 프로젝트로 이어나가도록 기회를 열어둡니다.</p>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 539px;">
                                                    <div class="thumb_area">
                                                        <img src="http://contest.xpressengine.com/templates/basic/img/cont_thum.png" alt="">
                                                    </div>
                                                    <div class="cont_area">
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                        <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. 수상작은 오픈소스로 공개하여 널리 이용됨은 물론 오픈소스 프로젝트로 이어나가도록 기회를 열어둡니다.</p>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 539px;">
                                                    <div class="thumb_area">
                                                        <img src="http://contest.xpressengine.com/templates/basic/img/cont_thum2.png" alt="">
                                                    </div>
                                                    <div class="cont_area">
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                        <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. 수상작은 오픈소스로 공개하여 널리 이용됨은 물론 오픈소스 프로젝트로 이어나가도록 기회를 열어둡니다.</p>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 539px;">
                                                    <div class="thumb_area">
                                                        <img src="http://contest.xpressengine.com/templates/basic/img/cont_thum3.png" alt="">
                                                    </div>
                                                    <div class="cont_area">
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                        <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. 수상작은 오픈소스로 공개하여 널리 이용됨은 물론 오픈소스 프로젝트로 이어나가도록 기회를 열어둡니다.</p>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 539px;">
                                                    <div class="thumb_area">
                                                        <img src="http://contest.xpressengine.com/templates/basic/img/cont_thum4.png" alt="">
                                                    </div>
                                                    <div class="cont_area">
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                        <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. 수상작은 오픈소스로 공개하여 널리 이용됨은 물론 오픈소스 프로젝트로 이어나가도록 기회를 열어둡니다.</p>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 539px;" class="bx-clone">
                                                    <div class="thumb_area">
                                                        <img src="http://contest.xpressengine.com/templates/basic/img/cont_thum.png" alt="">
                                                    </div>
                                                    <div class="cont_area">
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <h3 class="title"><a href="#">XE Con 공지사항 및 제작리스트 안내</a></h3>
                                                        <p class="cont">XE는 오픈소스 프로젝트 활성화를 도모하고자 XE Extension(모듈, 애드온, 위젯, 레이아웃, 스킨 등) 및 XE 연동 프로그램 개발에 참여하여 함께 성장할 수 있는 대회를 열고 있습니다. 수상작은 오픈소스로 공개하여 널리 이용됨은 물론 오픈소스 프로젝트로 이어나가도록 기회를 열어둡니다.</p>
                                                    </div>
                                                </li></ul></div><div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager" style="top: 274px;"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div><div class="bx-pager-item"><a href="" data-slide-index="3" class="bx-pager-link">4</a></div></div><div class="bx-controls-direction" style="top: 166px;"><a class="bx-prev" href="">&lt;<span class="blind">prev</span></a><a class="bx-next" href="">&gt;<span class="blind">next</span></a></div></div></div>
                                    <script>
                                        jQuery(function($){
                                            // 컨텐츠 슬라이더 : bxSlider plugin 적용
                                            $('.bxslider').bxSlider({
                                                mode: 'horizontal',
                                                speed: 200,
                                                infiniteLoop: true,
                                                pager: true,
                                                hideControlOnEnd: true,
                                                useCSS: false,
                                                touchEnabled: true,
                                                oneToOneTouch: true,
                                                //  auto: true
                                            });
                                            $(".bxslider li img").eq(0).load(function() {
                                                var imgHeight =  $(this).height();
                                                $('.bx-pager').css('top',imgHeight - 26);
                                                $('.bx-controls-direction').css('top',imgHeight/2 + 16);
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xe-widget-wrapper" style="margin:18px 0 0px 0px;border:1px solid rgb(221, 221, 221);width:1098px;height:428px;float:left;background-color:rgb(250,250,250)">
                        <div class="simpleWidgetStyle">
                            <h2>갤러리형 위젯</h2>
                            <a href="#" class="widgetMoreLink"><i class="xe-plus"></i><span class="blind">더보기</span></a>
                            <div style="*zoom:1;padding:0 0px 0px 0px !important;">
                                <div class="widgetContainer">
                                    <ul class="widgetGalleryA">
                                        <li>
                                            <!-- [D] 사용자 설정에서 이미지 가로/세로 적용시 동일한 값 적용 -->
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-01.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- [D] 작성자/날짜 노출시 적용
                                            <div class="cont_area">
                                                <span class="author">by <a href="#">XE</a></span>
                                                <span class="date">2014.11.08</span>
                                            </div>  -->
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-02.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-03.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-04.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-05.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-06.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-07.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-08.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-09.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-10.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-11.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb_area" style="width:167px;height:152px">
                                                <img src="http://contest.xpressengine.com/templates/basic/img/gall_thum-12.png" alt="" style="width:167px;height:152px">
                                                <span class="mask"></span>
                                                <div class="hover_info_wrap">
                                                    <div class="hover_info">
                                                        <h3 class="title"><a href="#">XE Contest 2014</a></h3>
                                                        <a href="#" class="breadcrumb">세미나, 이벤트</a>
                                                        <a href="#" class="btn_show"><i class="xe-plus"></i><span class="blind">썸네일 크게보기</span></a> <a href="#" class="btn_move"><i class="xe-angle-right"></i><span class="blind">바로가기</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /CONTENT -->
        </div>

@endsection


