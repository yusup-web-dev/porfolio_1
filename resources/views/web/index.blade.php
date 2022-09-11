@extends('layouts.fe')
@section('content')
<!-- WRAPPER ALL -->
<div class="devman_tm_all_wrap" data-magic-cursor="show">
    <!-- MOBILE MENU -->
    @include('components.frontend.head')
    <!-- /MOBILE MENU -->
    <!-- HEADER -->
    @include('components.frontend.header')
    <!-- /HEADER -->

    <!-- HERO -->
    <div class="devman_tm_section" id="home">
        <div class="devman_tm_hero">
            <div class="background">
                <div class="image" data-img-url="{{ asset('fe/img/hero/1.jpg') }}"></div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="left">
                        <div class="inner">
                            <h3 class="hello">Hello I'm</h3>
                            <h3 class="name">Yusup Supriatna</h3>
                            <h3 class="job">Web Developer from New York</h3>
                            <p class="text">Jodi kokhono vul hoye jai tumi oporadh nio na ptate velit esse cillum
                                dolore</p>
                            <div class="buttons">
                                <div class="devman_tm_button">
                                    <a class="anchor" href="#contact">Get a Quote</a>
                                </div>
                                <div class="simple_button">
                                    <a class="anchor" href="#about">About Me</a>
                                </div>
                            </div>
                        </div>
                        <h3 class="stroke_1">Yusup</h3>
                        <h3 class="stroke_2">Supriatna</h3>
                    </div>
                    <div class="right">
                        <div class="image">
                            <img src="{{ asset('fe/img/thumbs/53-61.jpg') }}" alt="" />
                            <div class="main" data-img-url="{{ asset('fe/img/hero/2.jpg') }}"></div>
                            <span class="win">
                                <img src="{{ asset('fe/img/svg/award.svg') }}" alt="" class="svg" />
                            </span>
                            <div class="numbers year">
                                <div class="wrapper">
                                    <h3><span class="devman_tm_counter" data-from="0" data-to="12"
                                            data-speed="2000">0</span></h3>
                                    <span class="item_name">Years of<br />Success</span>
                                </div>
                            </div>
                            <div class="numbers project">
                                <div class="wrapper">
                                    <h3><span class="devman_tm_counter" data-from="0" data-to="800"
                                            data-speed="2000">0</span><span class="extra">+</span></h3>
                                    <span class="item_name">Projects<br />Completed</span>
                                </div>
                            </div>
                            <span class="circle anim_circle"><img src="{{ asset('fe/img/hero/circle.png') }}" alt="" /></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /HERO -->

    <!-- FEATURES -->
    <div class="devman_tm_section">
        <div class="devman_tm_features">
            <div class="container">
                <div class="features_list">
                    <ul>
                        <li class="wow fadeInUp" data-wow-duration="1s">
                            <div class="list_inner">
                                <div class="short">
                                    <div class="title">
                                        <span>01</span>
                                        <h3>Dedication</h3>
                                    </div>
                                    <div class="icon">
                                        <img class="svg" src="{{ asset('fe/img/svg/design.svg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Sed do eiusmod tempor incididunt ut labore ullamco laboris nisi ut aliquip ex
                                        ea commo do conse namber onequat.</p>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="list_inner">
                                <div class="short">
                                    <div class="title">
                                        <span>02</span>
                                        <h3>Smart Work</h3>
                                    </div>
                                    <div class="icon">
                                        <img class="svg" src="{{ asset('fe/img/svg/development.svg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Sed do eiusmod tempor incididunt ut labore ullamco laboris nisi ut aliquip ex
                                        ea commo do conse namber onequat.</p>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="list_inner">
                                <div class="short">
                                    <div class="title">
                                        <span>03</span>
                                        <h3>Intelligence</h3>
                                    </div>
                                    <div class="icon">
                                        <img class="svg" src="{{ asset('fe/img/svg/landing.svg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Sed do eiusmod tempor incididunt ut labore ullamco laboris nisi ut aliquip ex
                                        ea commo do conse namber onequat.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /FEATURES -->

    <!-- ABOUT -->
    <div class="devman_tm_section" id="about">
        <div class="devman_tm_about">
            <div class="container">
                <div class="about_inner">
                    <div class="left">
                        <div class="image_wrap">
                            <img src="{{ asset('fe/img/thumbs/64-49.jpg') }}" alt="" />
                            <div class="main" data-img-url="{{ asset('fe/img/about/1.jpg') }}"></div>
                            <div class="extra_image">
                                <div class="image_inner">
                                    <img src="{{ asset('fe/img/thumbs/1-1.jpg') }}" alt="" />
                                    <div class="main_extra" data-img-url="{{ asset('fe/img/about/2.jpg') }}"></div>
                                </div>
                                <span class="icon_1 wow fadeIn" data-wow-duration="1s"><img class="svg"
                                        src="{{ asset('fe/img/svg/joomla.svg') }}" alt="" /></span>
                            </div>
                            <span class="icon_2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"><img
                                    class="svg" src="{{ asset('fe/img/svg/wp.svg') }}" alt="" /></span>
                            <span class="icon_3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"><img
                                    class="svg" src="{{ asset('fe/img/svg/drupal.svg') }}" alt="" /></span>
                            <span class="icon_4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"><img
                                    class="svg" src="{{ asset('fe/img/svg/laravel.svg') }}" alt="" /></span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <span>I'm a Developer</span>
                            <h3>I Develop Application that Help People</h3>
                        </div>
                        <div class="text">
                            <p>Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatu epteur sint occaecat
                                cupidatat</p>
                            <p>Krnon proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis</p>
                        </div>
                        <div class="devman_tm_button">
                            <a class="anchor" href="#portfolio">View Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->

    <!-- COUNTER -->
    <div class="devman_tm_section">
        <div class="devman_tm_counter_section">
            <div class="container">
                <div class="counter_list">
                    <ul>
                        <li>
                            <div class="list_inner">
                                <div class="wrapper">
                                    <div class="value">
                                        <span class="abs"><span class="tm_counter" data-from="0" data-to="120"
                                                data-speed="1200">0</span><label class="small">+</label></span>
                                    </div>
                                    <div class="text">
                                        <h3>Digital<br />Products</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <div class="wrapper">
                                    <div class="value">
                                        <span class="abs"><span class="tm_counter" data-from="0" data-to="40"
                                                data-speed="1200">0</span><label class="small">+</label></span>
                                    </div>
                                    <div class="text">
                                        <h3>Open Source<br />Projects</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <div class="wrapper">
                                    <div class="value">
                                        <span class="abs"><span class="tm_counter" data-from="0" data-to="10"
                                                data-speed="1200">0</span><label class="big">M</label></span>
                                    </div>
                                    <div class="text extra">
                                        <h3>Lines of<br />Code</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="shape moving_effect" data-direction="y" data-reverse="yes"></div>
        </div>
    </div>
    <!-- /COUNTER -->

    <!-- PORTFOLIO -->
    <div class="devman_tm_section" id="portfolio">
        <div class="devman_tm_portfolio">
            <div class="container">
                <div class="devman_tm_main_title" data-text-align="center">
                    <span>Portfolio</span>
                    <h3>My Amazing Works</h3>
                    <p>Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate</p>
                </div>
                <div class="portfolio_list">
                    <ul>
                        <li class="wow fadeInUp" data-wow-duration="1s">
                            <div class="list_inner">
                                <div class="background_image" data-img-url="{{ asset('fe/img/portfolio/1.jpg') }}"></div>
                                <div class="content">
                                    <div class="details">
                                        <span class="category"><a href="#">Youtube</a></span>
                                        <h3 class="title"><a href="#">Web Application for<br /> Desiverse</a></h3>
                                        <span class="view_project"><a href="#">View Project <i
                                                    class="icon-right-big"></i></a></span>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                                <a class="devman_tm_full_link popup-youtube"
                                    href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s">
                            <div class="list_inner">
                                <div class="background_image" data-img-url="{{ asset('fe/img/portfolio/2.jpg') }}"></div>
                                <div class="content">
                                    <div class="details">
                                        <span class="category"><a href="#">Vimeo</a></span>
                                        <h3 class="title"><a href="#">Web Application for<br /> Desiverse</a></h3>
                                        <span class="view_project"><a href="#">View Project <i
                                                    class="icon-right-big"></i></a></span>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                                <a class="devman_tm_full_link popup-vimeo" href="https://vimeo.com/337293658"></a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s">
                            <div class="list_inner">
                                <div class="background_image" data-img-url="{{ asset('fe/img/portfolio/3.jpg') }}"></div>
                                <div class="content">
                                    <div class="details">
                                        <span class="category"><a href="#">Soundcloud</a></span>
                                        <h3 class="title"><a href="#">Web Application for<br /> Desiverse</a></h3>
                                        <span class="view_project"><a href="#">View Project <i
                                                    class="icon-right-big"></i></a></span>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                                <a class="devman_tm_full_link soundcloude_link mfp-iframe audio"
                                    href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s">
                            <div class="list_inner">
                                <div class="background_image" data-img-url="{{ asset('fe/img/portfolio/4.jpg') }}"></div>
                                <div class="content">
                                    <div class="details">
                                        <span class="category"><a href="#">Details</a></span>
                                        <h3 class="title"><a href="#">Web Application for<br /> Desiverse</a></h3>
                                        <span class="view_project"><a href="#">View Project <i
                                                    class="icon-right-big"></i></a></span>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                                <a href="#" class="devman_tm_full_link portfolio_popup"></a>

                                <div class="hidden_content">
                                    <div class="popup_details">
                                        <div class="main_details">
                                            <div class="textbox">
                                                <p>We live in a world where we need to move quickly and iterate on
                                                    our ideas as flexibly as possible.</p>
                                                <p>Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.</p>
                                            </div>
                                            <div class="detailbox">
                                                <ul>
                                                    <li>
                                                        <span class="first">Client</span>
                                                        <span>Alvaro Morata</span>
                                                    </li>
                                                    <li>
                                                        <span class="first">Category</span>
                                                        <span><a href="#">Detail</a></span>
                                                    </li>
                                                    <li>
                                                        <span class="first">Date</span>
                                                        <span>March 07, 2021</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images">
                                            <ul>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="my_image">
                                                            <img src="{{ asset('fe/img/thumbs/4-2.jpg') }}" alt="" />
                                                            <div class="main" data-img-url="{{ asset('fe/img/portfolio/1.jpg') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="my_image">
                                                            <img src="{{ asset('fe/img/thumbs/4-2.jpg') }}" alt="" />
                                                            <div class="main" data-img-url="{{ asset('fe/img/portfolio/2.jpg') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="my_image">
                                                            <img src="{{ asset('fe/img/thumbs/4-2.jpg') }}" alt="" />
                                                            <div class="main" data-img-url="{{ asset('fe/img/portfolio/3.jpg') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <div class="shape_1 moving_effect" data-direction="y" data-reverse="yes"></div>
                        <div class="shape_2 moving_effect" data-direction="y" data-reverse="yes"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /PORTFOLIO -->

    <!-- SKILLS -->
    <div class="devman_tm_section">
        <div class="devman_tm_skills">
            <div class="container">
                <div class="devman_tm_main_title" data-text-align="center">
                    <span>My Skills</span>
                    <h3>I Develop Skills Regularly</h3>
                    <p>Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate</p>
                </div>
                <div class="skills_wrapper">
                    <div class="left">
                        <div class="dodo_progress">
                            <div class="progress_inner" data-value="95" data-color="#142eb5">
                                <span><span class="label">WordPress</span><span class="number">95%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress_inner" data-value="75" data-color="#142eb5">
                                <span><span class="label">Joomla</span><span class="number">75%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress_inner" data-value="90" data-color="#142eb5">
                                <span><span class="label">Drupal</span><span class="number">90%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="dodo_progress">
                            <div class="progress_inner" data-value="70" data-color="#142eb5">
                                <span><span class="label">Python</span><span class="number">70%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress_inner" data-value="80" data-color="#142eb5">
                                <span><span class="label">PHP</span><span class="number">80%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress_inner" data-value="60" data-color="#142eb5">
                                <span><span class="label">JavaScript</span><span class="number">60%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /SKILLS -->

    <!-- SERVICE -->
    <div class="devman_tm_section" id="service">
        <div class="devman_tm_service">
            <div class="container">
                <div class="service_list">
                    <ul>
                        <li class="wow fadeInLeft" data-wow-duration="1s">
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/cpu.svg') }}" alt="" />
                                <h3 class="title">Desktop Application</h3>
                                <p class="text">Dliquip ex ea commo do conse namber onequa ute irure dolor in
                                    reprehenderit in v iusmod tempor incid idunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="devman_tm_full_link" href="#"></a>
                                <img class="popup_service_image" src="{{ asset('fe/img/service/1.jpg') }}" alt="" />
                                <div class="service_hidden_details">
                                    <div class="service_popup_informations">
                                        <div class="descriptions">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Kura, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s">
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/phone.svg') }}" alt="" />
                                <h3 class="title">Mobile Application</h3>
                                <p class="text">Dliquip ex ea commo do conse namber onequa ute irure dolor in
                                    reprehenderit in v iusmod tempor incid idunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="devman_tm_full_link" href="#"></a>
                                <img class="popup_service_image" src="{{ asset('fe/img/service/1.jpg') }}" alt="" />
                                <div class="service_hidden_details">
                                    <div class="service_popup_informations">
                                        <div class="descriptions">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Kura, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s">
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/web.svg') }}" alt="" />
                                <h3 class="title">Website Development</h3>
                                <p class="text">Dliquip ex ea commo do conse namber onequa ute irure dolor in
                                    reprehenderit in v iusmod tempor incid idunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="devman_tm_full_link" href="#"></a>
                                <img class="popup_service_image" src="{{ asset('fe/img/service/1.jpg') }}" alt="" />
                                <div class="service_hidden_details">
                                    <div class="service_popup_informations">
                                        <div class="descriptions">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Kura, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s">
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/star.svg') }}" alt="" />
                                <h3 class="title">Game Development</h3>
                                <p class="text">Dliquip ex ea commo do conse namber onequa ute irure dolor in
                                    reprehenderit in v iusmod tempor incid idunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="devman_tm_full_link" href="#"></a>
                                <img class="popup_service_image" src="{{ asset('fe/img/service/1.jpg') }}" alt="" />
                                <div class="service_hidden_details">
                                    <div class="service_popup_informations">
                                        <div class="descriptions">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Kura, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="shape moving_effect" data-direction="y" data-reverse="yes"></div>
        </div>
    </div>
    <!-- /SERVICE -->

    <!-- PROCESS -->
    <div class="devman_tm_section">
        <div class="devman_tm_process">
            <div class="container">
                <div class="process_inner">
                    <div class="left">
                        <div class="devman_tm_main_title" data-text-align="left">
                            <span>Working to make difference</span>
                            <h3>Real Passion to Create Amazing Things</h3>
                            <p>Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in
                                voluptate</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="acc_holder">
                            <div class="devman_tm_accordion" data-active="1" data-type="accordion">
                                <div class="accordion_in">
                                    <div class="acc_head">
                                        <span class="plus"></span>
                                        <p>Work Strategy</p>
                                    </div>
                                    <div class="acc_content">
                                        <div class="acc_content_in">
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing
                                                elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita
                                                tumi sopono carini hoye.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion_in">
                                    <div class="acc_head">
                                        <span class="plus"></span>
                                        <p>The Process of Our Work</p>
                                    </div>
                                    <div class="acc_content">
                                        <div class="acc_content_in">
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing
                                                elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita
                                                tumi sopono carini hoye.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion_in">
                                    <div class="acc_head">
                                        <span class="plus"></span>
                                        <p>Core Value of Development</p>
                                    </div>
                                    <div class="acc_content">
                                        <div class="acc_content_in">
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing
                                                elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita
                                                tumi sopono carini hoye.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion_in">
                                    <div class="acc_head">
                                        <span class="plus"></span>
                                        <p>Desire to Work Hard</p>
                                    </div>
                                    <div class="acc_content">
                                        <div class="acc_content_in">
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation utur adipisicing
                                                elit, sed do eiusmod einisha chor amay vebona sukher mohona kobita
                                                tumi sopono carini hoye.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PROCESS -->

    <!-- TESTIMONIALS -->
    <div class="devman_tm_section">
        <div class="devman_tm_testimonials">
            <div class="container">
                <div class="devman_tm_main_title" data-text-align="center">
                    <span>Testimonial</span>
                    <h3>What Clients Say</h3>
                    <p>Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate</p>
                </div>
                <div class="testimonials_list wow fadeInUp" data-wow-duration="1s">
                    <ul class="owl-carousel owl-theme">
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/1.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>Selena Brook</h3>
                                        <span>ABC Studio</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/3.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>David Parker</h3>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/4.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>Jessica Smith</h3>
                                        <span>Vivaco Group</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/5.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>Collin Mattew</h3>
                                        <span>Photographer</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/6.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>Kerri Bull</h3>
                                        <span>UX Designer</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/7.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>Keylin Smith</h3>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{ asset('fe/img/svg/quote.svg') }}" alt="" />
                                <p class="text">Duis aute irure dolor in repre hen derit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="{{ asset('fe/img/testimonials/9.jpg') }}"></div>
                                    </div>
                                    <div class="short">
                                        <h3>Adam Miller</h3>
                                        <span>Envato Studio</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="shape moving_effect" data-direction="y" data-reverse="yes"></div>
                    <div class="shape_2 moving_effect" data-direction="y" data-reverse="yes"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /TESTIMONIALS -->

    <!-- PARTNERS -->
    <div class="devman_tm_section">
        <div class="devman_tm_partners">
            <div class="container">
                <div class="partners_inner">
                    <ul>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" src="{{ asset('fe/img/partners/dark/1.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                                    src="{{ asset('fe/img/partners/dark/2.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                                    src="{{ asset('fe/img/partners/dark/3.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"
                                    src="{{ asset('fe/img/partners/dark/4.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" src="{{ asset('fe/img/partners/dark/5.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                                    src="{{ asset('fe/img/partners/dark/6.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                                    src="{{ asset('fe/img/partners/dark/7.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"
                                    src="{{ asset('fe/img/partners/dark/8.png') }}" alt="" />
                                <a class="devman_tm_full_link" a href="#"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /PARTNERS -->

    <!-- CONTACT -->
    <div class="devman_tm_section" id="contact">
        <div class="devman_tm_contact">
            <div class="container">
                <div class="contact_inner">
                    <div class="devman_tm_main_title" data-text-align="left">
                        <span>Don't be shy</span>
                        <h3>Drop Me a Line</h3>
                    </div>
                    <div class="in">
                        <div class="left wow fadeInLeft" data-wow-duration="1s">
                            <div class="fields">
                                <form action="/" method="post" class="contact_form" id="contact_form"
                                    autocomplete="off">
                                    <div class="returnmessage"
                                        data-success="Your message has been received, We will contact you soon.">
                                    </div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="first">
                                        <ul>
                                            <li>
                                                <input id="name" type="text" placeholder="Name">
                                            </li>
                                            <li>
                                                <input id="email" type="text" placeholder="Email">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="last">
                                        <textarea id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="devman_tm_button" data-position="left">
                                        <a id="send_message" href="#">
                                            <span>Submit Message</span>
                                        </a>
                                    </div>

                                    <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

                                </form>
                            </div>
                        </div>
                        <div class="right wow fadeInRight" data-wow-duration="1s">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon">
                                            <i class="icon-location orangeText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Address</h3>
                                            <span>20, Somewhere in world</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon">
                                            <i class="icon-mail-1 greenText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Email</h3>
                                            <span><a href="#">hello@dizme.com</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon">
                                            <i class="icon-phone purpleText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Phone</h3>
                                            <span>+123 456 7890</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="shape moving_effect" data-direction="y" data-reverse="yes"></div>
                    <div class="shape_2 moving_effect" data-direction="y" data-reverse="yes"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT -->

    <!-- NEWS -->
    <div class="devman_tm_section" id="blog">
        <div class="devman_tm_news">
            <div class="container">
                <div class="devman_tm_main_title" data-text-align="center">
                    <span>Latest News</span>
                    <h3>Checkout My Recent Blogs</h3>
                    <p>Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate</p>
                </div>
                <div class="news_list">
                    <ul>
                        <li class="wow fadeInUp" data-wow-duration="1s">
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('fe/img/thumbs/42-29.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('fe/img/news/1.jpg') }}"></div>
                                    <a class="devman_tm_full_link" href=""></a>
                                </div>
                                <div class="details">
                                    <span class="category"><a href="#">Web Development</a></span>
                                    <h3 class="title"><a href="#">Jim Morisson Says when the musics over turn off
                                            the light</a></h3>
                                </div>

                                <div class="news_hidden_details">
                                    <div class="news_popup_informations">
                                        <div class="text">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Devman, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('fe/img/thumbs/42-29.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('fe/img/news/2.jpg') }}"></div>
                                    <a class="devman_tm_full_link" href=""></a>
                                </div>
                                <div class="details">
                                    <span class="category"><a href="#">Web Development</a></span>
                                    <h3 class="title"><a href="#">Jim Morisson Says when the musics over turn off
                                            the light</a></h3>
                                </div>

                                <div class="news_hidden_details">
                                    <div class="news_popup_informations">
                                        <div class="text">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Devman, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('fe/img/thumbs/42-29.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('fe/img/news/3.jpg') }}"></div>
                                    <a class="devman_tm_full_link" href=""></a>
                                </div>
                                <div class="details">
                                    <span class="category"><a href="#">Web Development</a></span>
                                    <h3 class="title"><a href="#">Jim Morisson Says when the musics over turn off
                                            the light</a></h3>
                                </div>

                                <div class="news_hidden_details">
                                    <div class="news_popup_informations">
                                        <div class="text">
                                            <p>Devman is a leading web design agency with an award-winning design
                                                team that creates innovative, effective websites that capture your
                                                brand, improve your conversion rates, and maximize your revenue to
                                                help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction
                                                consumers have with your business. That's why almost 95 percent of a
                                                user’s first impression relates to web design. It’s also why web
                                                design services can have an immense impact on your company’s bottom
                                                line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s
                                                design but also partnering with Devman, the web design agency that’s
                                                driven more than $2.4 billion in revenue for its clients. With over
                                                50 web design awards under our belt, we're confident we can design a
                                                custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /NEWS -->

  @include('components.frontend.footer')

</div>
<!-- / WRAPPER ALL -->
@endsection