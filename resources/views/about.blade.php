@extends("layouts.app2")
@section("title")
    About
@endsection
@section("content")
    <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="site-header-two site-header-two__">
            <nav class="main-nav__two stricky">
                <div class="container">
                    <div class="main-nav__logo-box">
                        <a href="index.blade.php">
                            <img src="assets/images/logo-dark.png" alt="">
                        </a>
                    </div><!-- /.main-nav__logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li class="">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li class="">
                                <a href="program.blade.php">Programs</a>
                            </li>
                            <li class="">
                                <a href="{{route('events')}}">Events</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li class="">
                                <a href="blog.blade.php">Blog</a>
                            </li>
                        </ul>
                    </div><!-- /.main-nav__main-navigation -->
                </div><!-- /.container -->
            </nav><!-- /.main-nav__one -->
        </header><!-- /.site-header-two -->


        <section class="cta-two cta-two__about-page" style="background-image: url(assets/images/backgrounds/banner-halaman-about.png);">
            <div class="container text-center">
                <h3>Tentang Kami</h3>
            </div><!-- /.container -->
        </section><!-- /.cta-two -->

        <section class="team-one team-one__about-page">
        </section><!-- /.team-one -->

        <section class="about-two">
            <div class="container">
                <img src="assets/images/resources/about-us-1.svg" alt="" class="about-one__moc">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <p><span>About Us</span></p>
                                <h3>We Are Creative Experience Agency</h3>
                                <div class="block-title__line"></div><!-- /.block-title__line -->
                            </div><!-- /.block-title -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid dunt
                                utlabore et dolore magna aliqua. Ut enim ad minim veniam weay.</p>
                            <h4>We Are Always With You</h4>
                            <p>But we must be dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip exea commodo consequat</p>
                            <!-- /.thm-btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->


        <section class="team-one">
            <div class="container">
                <div class="block-title text-center">
                    <p><span>Tim Kami</span></p>
                    <h3>Meet Our Exclusive Team</h3>
                    <div class="block-title__line"></div><!-- /.block-title__line -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-1.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div><!-- /.team-one__social -->
                                <h3>Robi Chandra</h3>
                                <p>Chief Excecutive Officer</p>
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-2.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div><!-- /.team-one__social -->
                                <h3>Jihad B. Cahyadin</h3>
                                <p>Chief Operating Officer</p>
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-3.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div><!-- /.team-one__social -->
                                <h3>Ronni Hidayat</h3>
                                <p>Chief Design Officer</p>
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-4.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div><!-- /.team-one__social -->
                                <h3>M. Mufid Luthfi</h3>
                                <p>Chief Marketing Officer</p>
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one -->

        <section class="cta-one">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="cta-one__left">
                        <h3>Followhub Connect & Enterprise</h3>
                        <p>Kami berkolaborasi dan bermitra dengan client yang berpikiran sama yang berbagi <br> visi dan minat yang sama dengan kami. Apakah Anda salah satunya?</p>
                    </div><!-- /.cta-one__left -->
                    <div class="cta-one__right">
                        <a href="#" class="thm-btn cta-one__btn">Selengkapnya</a>
                        <!-- /.thm-btn cta-one__btn -->
                    </div><!-- /.cta-one__right -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

        <section class="">
            <div class="container">
               <div class="block-title text-center">
                    <p><span>Our Client Partner</span></p>
                    <div class="block-title__line"></div><!-- /.block-title__line -->
                </div><!-- /.block-title -->
                <div class="brand-one__carousel owl-carousel owl-theme thm__owl-carousel" data-options='{"loop": true, "autoplay": true, "autoplayTimeout": 5000, "items": 6, "margin": 150, "smartSpeed": 700, "nav": false, "dots": false, "responsive": { "0": { "items": 2, "margin": 15 },"575": { "items": 3, "margin": 30 },"767": { "items": 3, "margin": 30 }, "991": { "items": 4, "margin": 30 }, "1199": { "items": 4, "margin": 75 }, "1200": { "items": 6 } }}'>
                    <div class="item">
                        <img src="assets/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-6.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/brand/brand-2-6.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-carousel owl-theme thm__owl-carousel -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->

        <section class="about-three">

        </section><!-- /.about-three -->


        <div class="site-footer-two">
            <img src="assets/images/shapes/footer-shape-2-1.png" alt="" class="site-footer-two__shape-1">
            <img src="assets/images/shapes/footer-shape-2-2.png" alt="" class="site-footer-two__shape-2">

            <div class="site-footer-two__bottom">
                <div class="container">
                    <p>Copy@2020 <a>Followhub</a>. All Right Reserved.</p>
                </div><!-- /.container -->
            </div><!-- /.site-footer-two__bottom -->
        </div><!-- /.site-footer-two -->
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <div class="side-menu__block">


        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="assets/images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p>Lorem Ipsum is simply dummy text the printing and setting industry. Lorm Ipsum has been the industry's stanard dummy text ever. </p>
                <p><a href="mailto:needhelp@bizkar.com">needhelp@bizkar.com</a> <br> <a href="tel:888-999-0000">888 999 0000</a></p>
                <div class="side-menu__social">
                    <a class="fab fa-facebook-f" href="#"></a>
                    <a class="fab fa-twitter" href="#"></a>
                    <a class="fab fa-instagram" href="#"></a>
                    <a class="fab fa-pinterest-p" href="#"></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->



    <div class="search-popup" style="display: none;">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->
@endsection
