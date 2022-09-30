<!-- Header for mobile -->
<header class="mobile-header d-block d-lg-none">
    <div class="container">
        <div class="mobile-header-content d-flex justify-content-between align-items-center">
            <div class="mobile-header-logo">
                <img src="{{ asset('web/images/logo.webp') }}" alt="">
            </div>
            <div class="mobile-header-menu d-flex ">
                <div class="mobile-menu-canvas">
                    <a class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuCanvas" ><svg width="20px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></a>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenuCanvas" >
                        <div class="offcanvas-header d-block text-end">
                            <a type="button" class="" data-bs-dismiss="offcanvas">
                                <svg width="20px" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
                            </a>
                        </div>
                        <div class="offcanvas-body">
                            <div class="header-menu">
                                <ul >
                                    <li ><a data-bs-toggle="collapse" href="#mobileMenuCollapse" role="button" aria-expanded="false" aria-controls="mobileMenuCollapse">Home <span><svg width="15px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg></span></a>

                                        <ul class="collapse ms-4" id="mobileMenuCollapse">
                                            <li ><a href="#">Category Page</a></li>
                                            <li ><a href="#">post page</a></li>
                                            <li ><a href="#">author Page</a></li>
                                            <li ><a href="#">about us</a></li>
                                            <li ><a href="#">Contact us</a></li>
                                            <li ><a href="#">Regular</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="#">LifeStyle</a></li>
                                    <li ><a href="#">Fashion</a></li>
                                    <li ><a href="#">Technology</a></li>
                                    <li ><a href="#">Health</a></li>
                                    <li ><a href="#">Travel</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-search-btn">
                    <span><a href="#"><svg width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg></a></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header for mobile -->
