<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- sec2 -->

    <title>STUDY4</title>
    <link rel=dns-prefetch href=//fonts.googleapis.com>
    <meta charset="utf-8">
    <meta name="description" CONTENT="STUDY4 - học tiếng Anh và luyện thi online TOEIC, IELTS, SAT, ACT, GRE, GMAT.">
    <meta name="keywords"
        content="toeic,ielts,online english learning,cambridge ielts,bc ielts,real ielts tests,toeic ets,test prep services,online tutor,luyện thi online,tiếng Anh online,tiếng Anh giao tiếp,tiếng Anh cơ bản,tiếng anh cho người mất gốc" />
    <link rel="canonical" href="https://study4.com/" />
    <link rel="icon" href="user/static/img/study4_new_icon_blk.png" />
    <link rel="apple-touch-icon" href="user/static/img/study4_new_logo_square.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta property="fb:app_id" content="203430341284880" />
    <meta property="og:url" content="https://study4.com/" />
    <meta property=”og:locale” content=”vi_VN” />
    <meta property="og:title" content="STUDY4" />
    <meta property="og:description"
        content="STUDY4 - học tiếng Anh và luyện thi online TOEIC, IELTS, SAT, ACT, GRE, GMAT." />
    <meta property="og:image" content="user/static/img/study4_new_logo.png" />


    <meta property="og:type" content="article" />



    <!-- <link rel=stylesheet id=flatsome-googlefonts-css  href='//fonts.googleapis.com/css?family=Roboto%3Aregular%2C700%2Cregular%2C700%2C500&#038;display=swap&#038;ver=3.9' type=text/css media=all> -->

    <link rel="preload" as="style" href="{{ asset('user/static/css/fontawesome.min.css?v=1730343340')}}" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('user/static/css/fontawesome.min.css?v=1730343340')}}">
    </noscript>


    <link rel="preload" as="style" href="{{ asset('user/static/dist/vendor.ad60eb658fc650d75097.min.css?v=1730343340')}}"
        onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('user/static/dist/vendor.ad60eb658fc650d75097.min.css?v=1730343340')}}">
    </noscript>

    <link rel='stylesheet' href="{{ asset('user/static/dist/main.5889fb175716e6740219.min.css?v=1730343340')}}" />

</head>
<body>
    <div class='topnav1 topnav-wrapper'>
            <div class="topnav-container">
                <nav class="navbar  navbar-expand-lg">
                    <span class="navbar-brand">
                        <a class='topnav-brand' href='/'>
                            <img class='topnav-logo' src='/static/img/study4_new_logo_sm.png' alt='STUDY4' />

                        </a>
                    </span>
                    <button class="navbar-toggler pull-xs-right d-lg-none" type="button" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        &#9776;

                    </button>
                    <div class="d-lg-block navbar-collapse justify-content-end collapse" id="navbar-collapse">

                        <ul class="nav">


                            <li class="nav-item">
                                <a class="nav-link" href="/my-account/courses/">Khoá học của tôi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/courses/online/">Chương trình học</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/tests/">Đề thi online</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/flashcards/">
                                    Flashcards
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/posts/">Blog</a>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link" href="/courses/activate/">
                                    Kích hoạt tài khoản
                                </a>
                            </li>

                            <li class="nav-item user-topnav dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle user-topnav-profile" href="/my-account/"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class='account-profile-img'>

                                        <img src="/static/img/user_icon.png" alt="tadat216">

                                    </span>

                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <div>
                                        <h6 class="dropdown-header"> Thông báo </h6>
                                        <div id='new-notis-dropdown-content' class='jqhtml-loader dropdown-text'
                                            data-href='/notifications/newest/'></div>
                                    </div>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/studyplan/">Lịch học của tôi</a>
                                    <a class="dropdown-item" href="/my-account/">Trang cá nhân</a>
                                    <a class="dropdown-item" href="/logout/">Đăng xuất</a>
                                </div>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="/notifications/">Thông báo </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="/studyplan/">Lịch học của tôi</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="/my-account/">Trang cá nhân</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="/logout/">Đăng xuất</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
    </div>
    

    <div class='site-content-wrapper'>
      @yield('content')
    </div>

    <!-- <main>
        @yield('content')
    </main> -->

    <div class='footer-wrapper'>
            <div class="footer-container">
                <footer>

                    <div class='fb-like mb-2'>
                        <div class="fb-like" data-href="https://facebook.com/study4.support" data-width=""
                            data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 col-md grow0">
                            <a href='/'><img class="mb-2" src="/static/img/study4_new_logo_sm.png" alt=""
                                    height="30"></a>
                            <small class="d-block mb-2">© 2021</small>
                            <div class='site-socials'>
                                <a target='_blank' href='https://facebook.com/study4.support'><span
                                        class='social-link fab fa-facebook-square'></span></a>
                                <a target='_blank' href='https://instagram.com/study4.official'><span
                                        class='social-link fab fa-instagram'></span></a>
                                <a target='_blank' href='https://twitter.com/study4Official'><span
                                        class='social-link fab fa-twitter'></span></a>
                                <a target='_blank' href='https://www.linkedin.com/company/study4'><span
                                        class='social-link fab fa-linkedin'></span></a>
                                <a target='_blank' href='https://www.tiktok.com/@study4.official'><span
                                        class='social-link fab fa-tiktok'></span></a>
                            </div>
                        </div>
                        <div class="col-6 col-md">
                            <div class='footer-title'>Chương trình học</div>
                            <ul class="list-unstyled text-small">

                                <li><a href='/courses/29/ielts-general-intensive-reading/'>IELTS General Reading</a>
                                </li>

                                <li><a href='/courses/30/ielts-general-intensive-writing/'>IELTS General Writing</a>
                                </li>

                                <li><a href='/courses/28/complete-toeic/'>Complete TOEIC</a></li>

                                <li><a href='/courses/26/ielts-fundamentals/'>IELTS Fundamentals</a></li>

                                <li><a href='/courses/15/ielts-intensive-listening/'>IELTS Intensive Listening</a></li>

                                <li><a href='/courses/22/ielts-intensive-vocabulary-reading/'>IELTS Intensive
                                        Reading</a></li>

                                <li><a href='/courses/27/ielts-intensive-speaking/'>IELTS Intensive Speaking</a></li>

                                <li><a href='/courses/25/ielts-intensive-writing/'>IELTS Intensive Writing</a></li>

                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <div class='footer-title'>Tài nguyên</div>
                            <ul class="list-unstyled text-small">

                                <li><a href="{{url('/test')}}">Thư viện đề thi</a></li>
                                <li><a href="/posts/">Blog</a></li>
                                <li><a href="/materials/">Kho tài liệu</a></li>
                                <li><a href="/groups/">Nhóm học tập</a></li>

                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <div class='footer-title'>Hỗ trợ</div>
                            <ul class="list-unstyled text-small">
                                <li><a href="/user-guide/">Hướng dẫn sử dụng</a></li>
                                <li><a href="/buying-guide/">Hướng dẫn mua hàng</a></li>
                                <li><a href="/customer-support/">Chăm sóc khách hàng</a></li>
                                <li><a href="/feedback/">Phản hồi khiếu nại</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <div class='footer-title'>STUDY4</div>
                            <ul class="list-unstyled text-small">
                                <li><a href="/about/">Về chúng tôi</a></li>
                                <li><a href="/contact/">Liên hệ</a></li>
                                <li><a href="/privacy/">Điều khoản bảo mật</a></li>
                                <li><a href="/terms/">Điều khoản sử dụng</a></li>
                                <li><a href="/buying-terms/">Điều khoản và Điều Kiện Giao Dịch</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class='footer-addresses'>
                        <div class="row">
                            <div class="col-6 col-md">
                                <h5 class="mb-2">Thông tin doanh nghiệp</h5>
                                <ul>
                                    <li>Công ty TNHH Công Nghệ A Plus</li>
                                    <li>Giấy chứng nhận Đăng ký doanh nghiệp số: 0109675459 do Sở Kế hoạch và Đầu tư
                                        thành phố Hà Nội cấp</li>
                                    <li>Điện thoại liên hệ/Hotline: 096 369 5525</li>
                                    <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="87f4f3f2e3feb3a9f3e2e6eac7e0eae6eeeba9e4e8ea">[email&#160;protected]</a>
                                    </li>
                                    <li>Địa chỉ trụ sở: Số 15, Ngõ 208 Giải Phóng, Phường Phương Liệt, Quận Thanh Xuân,
                                        Thành phố Hà Nội, Việt Nam</li>
                                    <li>CS1: TRUNG TÂM NGOẠI NGỮ STUDY4 - Số 17, Ngõ 208 Giải Phóng, Phường Phương Liệt,
                                        Quận Thanh Xuân, Thành phố Hà Nội, Việt Nam</li>
                                </ul>
                            </div>
                            <div class="col-6 col-md">
                                <h5 class="mb-2">Thông tin trung tâm đào tạo</h5>
                                <ul>
                                    <li>Trung tâm ngoại ngữ STUDY4</li>
                                    <li>Giấy chứng nhận hoạt động đào tạo, bồi dưỡng số 2654/QĐ-SGDĐT do Sở Giáo dục và
                                        Đào tạo Hà Nội cấp</li>
                                    <li>Địa chỉ: Số 17, Ngõ 208 Giải Phóng, Phường Phương Liệt, Quận Thanh Xuân, Thành
                                        phố Hà Nội, Việt Nam</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class='footer-copyright text-center'>
                        @ 2021 - Bản quyền của Công ty TNHH Công Nghệ A Plus.
                    </div>
                </footer>
            </div>
    </div>
    
    <script type='text/javascript' src="{{ asset('user/static/ckeditor/ckeditor-init-override.js?v=1730343340')}}"></script>
    <script type='text/javascript' src="{{ asset('user/static/ckeditor/ckeditor/ckeditor.js')}}"></script>
    <script type='text/javascript' src="{{ asset('user/static/js/webaudiorecorder/WebAudioRecorder.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('user/static/dist/vendor.ad60eb658fc650d75097.js?v=1730343340')}}"></script>
    <script type='text/javascript' src="{{ asset('user/static/dist/main.5889fb175716e6740219.js?v=1730343340')}}"></script>
</body>
</html>