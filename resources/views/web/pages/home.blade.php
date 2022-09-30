@extends('web.layouts.app')

@section('title', 'HomePage')

@section('content')
    <div class="section">
        <div class="container">
            <!-- blog-layout-1 banner-section Start -->
            <section class="blog-banner-section blog-layout-1 pt-5">
                @include('components.web.blog-bg-banner')
            </section>
            <!-- blog-layout-1 banner-section  End  -->


            <!-- recent-post-section start -->
            <section class="recent-post-section  blog-layout-2 pt-2">
                @include('components.web.blog-recent-post')
            </section>
            <!-- recent-post-section End  -->


            <!--blog-ads-section start-->
            <section class="blog-ads-section py-5">
                @include('components.web.banner-ads')
            </section>
            <!--blog-ads-section End -->


            <!-- blog-section-with-sidebar Start -->
            <section class="blog-section-with-sidebar blog-layout-3 py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row pb-5">
                            <div class="col">
                                <div class=" blog-post-design1  blog-post-content blog-post-overlay ">
                                    <div class="">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body ">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-jquery" href="#">Jquery</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class=" blog-post-content ">
                                    <div class="blog-post-overlay">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-web-design" href="#">web design</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class=" blog-post-content ">
                                    <div class="blog-post-overlay">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-jquery" href="#">jquery</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" blog-post-content ">
                                    <div class="blog-post-overlay">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-javascript" href="#">javascript</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" blog-post-content">
                                    <div class="blog-post-overlay">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-web-design" href="#">web design</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" blog-post-content">
                                    <div class="blog-post-overlay">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-css" href="#">css</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class=" blog-post-content">
                                    <div class="blog-post-overlay">
                                        <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                    </div>
                                    <div class="blog-post-body">
                                        <div class="blog-post-meta">
                                            <a class="post-category post-category-web-design" href="#">web design</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-layout-heading">
                                <h2>Most Read</h2>
                            </div>

                            <div class="blog-sidebar-layout-1 py-2">

                                <div class=" blog-post-content d-flex">
                                    <div class="sidebar-post-img-wrapper">
                                        <div class="blog-post-overlay">
                                            <a class="blog-post-img" href="#"><img src="{{ asset('web/images/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="blog-post-body">
                                        <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                    </div>
                                </div>

                                <div class=" blog-post-content d-flex ">
                                    <div class="sidebar-post-img-wrapper">
                                        <div class="blog-post-overlay">
                                            <a class="blog-post-img" href="#"><img src="{{ asset('web/images/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="blog-post-body">
                                        <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                    </div>
                                </div>

                                <div class=" blog-post-content d-flex ">
                                    <div class="sidebar-post-img-wrapper">
                                        <div class="blog-post-overlay">
                                            <a class="blog-post-img" href="#"><img src="{{ asset('web/images/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="blog-post-body">
                                        <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                    </div>
                                </div>

                                <div class=" blog-post-content d-flex ">
                                    <div class="sidebar-post-img-wrapper">
                                        <div class="blog-post-overlay">
                                            <a class="blog-post-img" href="#"><img src="{{ asset('web/images/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="blog-post-body">
                                        <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-sidebar-layout-2 py-2">
                                <div class="blog-layout-heading ">
                                    <h2>Featured Posts</h2>
                                </div>
                                <div class="blog-sidebar-featured">
                                    <div class=" blog-post-design1  blog-post-content blog-post-overlay ">
                                        <div class="">
                                            <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                        </div>
                                        <div class="blog-post-body ">
                                            <div class="blog-post-meta">
                                                <a class="post-category post-category-jquery" href="#">Jquery</a>
                                                <span class="post-date">March 27, 2018</span>
                                            </div>
                                            <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                        </div>
                                    </div>


                                    <div class=" blog-post-design1  blog-post-content blog-post-overlay ">
                                        <div class="">
                                            <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                                        </div>
                                        <div class="blog-post-body ">
                                            <div class="blog-post-meta">
                                                <a class="post-category post-category-css" href="#">css</a>
                                                <span class="post-date">March 27, 2018</span>
                                            </div>
                                            <h3 class="post-title"><a href="#">CSS Float: A Tutorial</a></h3>
                                        </div>
                                    </div>

                                </div>

                                <div class="blog-sidebar-ads text-center">
                                    <a href="#" >
                                        <img src="{{ asset('web/images/xad-1.jpg.pagespeed.ic.b-JUsDlPPI.webp') }}" alt="">
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-section-with-sidebar End  -->


            <!-- featured-post-section start -->
            <section class="featured-post-section  blog-layout-2 py-5">
                <div class="row ">
                    <div class="col-12">
                        <div class="blog-layout-heading text-center d-none d-lg-block">
                            <h2>Featured Posts</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class=" blog-post-content ">
                            <div class="blog-post-overlay">
                                <a class="blog-post-img" href="#"><img   src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-web-design" href="#">web design</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class=" blog-post-content">
                            <div class="blog-post-overlay">
                                <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-javascript" href="#">javasrcipt</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically
                                    </a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class=" blog-post-content">
                            <div class="blog-post-overlay">
                                <a class="blog-post-img" href="#"><img src="{{ asset('web/images/feature-img.webp') }}" alt=""></a>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-jquery" href="#">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title">
                                    <a href="#">Ask HN: Does Anybody Still Use JQuery?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- featured-post-section End   -->


            <!-- most-read-section-with-sidebar start-->
            <section class=" most-read-section-with-sidebar  blog-layout-4 py-5">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-layout-heading mb-4">
                            <h2>Most Read</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class=" blog-post-content d-flex ">
                            <div class="most-read-post-img-wrapper">
                                <div class="blog-post-overlay">
                                    <a class="blog-post-img" href="#"><img   src="{{ asset('web/images/xpost-4.jpg.pagespeed.ic.5tBCPmC.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-css" href="#">css</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                        <div class=" blog-post-content d-flex ">
                            <div class="most-read-post-img-wrapper">
                                <div class="blog-post-overlay">
                                    <a class="blog-post-img" href="#"><img   src="{{ asset('web/images/xpost-4.jpg.pagespeed.ic.5tBCPmC.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-css" href="#">css</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                        <div class=" blog-post-content d-flex ">
                            <div class="most-read-post-img-wrapper">
                                <div class="blog-post-overlay">
                                    <a class="blog-post-img" href="#"><img   src="{{ asset('web/images/xpost-4.jpg.pagespeed.ic.5tBCPmC.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-css" href="#">css</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                        <div class=" blog-post-content d-flex ">
                            <div class="most-read-post-img-wrapper">
                                <div class="blog-post-overlay">
                                    <a class="blog-post-img" href="#"><img   src="{{ asset('web/images/xpost-4.jpg.pagespeed.ic.5tBCPmC.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-post-body">
                                <div class="blog-post-meta">
                                    <a class="post-category post-category-css" href="#">css</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                        <div class=" most-read-section-btn pt-5 text-center">
                            <button> <a href="#" class="text-uppercase">Load More</a> </button>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="most-read-section-sidebar">
                            <div class="blog-sidebar-ads text-center">
                                <a href="#" >
                                    <img class="" src="{{ asset('web/images/xad-3.jpg.pagespeed.ic.CPBDrv9ygH.webp') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-layout-heading">
                                <h2>Catagories</h2>
                            </div>
                            <div class="sidebar-category-menu">
                                <ul>
                                    <li ><a class="d-flex justify-content-between" href="#"><span>Web Design</span><span class="totall-number post-category-web-design">340</span></a></li><li ><a class="d-flex justify-content-between" href="#"><span>javascript</span><span class="totall-number post-category-javascript">74</span></a></li><li ><a class="d-flex justify-content-between" href="#"><span>JQuery</span><span class="totall-number post-category-jquery">40</span></a></li><li ><a class="d-flex justify-content-between" href="#"><span>CSS</span><span class="totall-number post-category-css">45</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-tags-layout">
                                <ul class="list-unstyled">
                                    <li class="">
                                        <a class=" " href="#">
                                            chrome
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            CSS
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            Tutorial
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            Backend

                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            JQuery
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            Design
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            Development
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            JavaScript
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">
                                            Website
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- most-read-section-with-sidebar End -->
        </div>
    </div>
@endsection
