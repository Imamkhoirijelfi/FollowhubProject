@extends("layouts.app2")
@section("title")
    Create and Share Creative Experiences
    @endsection
@section("content")
    <div class="preloader">
        <img src="{{ asset('images/loader.png')}}" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="site-header-two site-header-two__home-three">
            <nav class="main-nav__two stricky">
                <div class="container">
                    <div class="main-nav__logo-box">
                        <a href="index.blade.php">
                            <img src="{{ asset('images/logo-full-light.png')}}" alt="">
                        </a>
                    </div><!-- /.main-nav__logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li class="">
                                <a href="index.blade.php">Home</a>
                            </li>
                            <li class="">
                                <a href="programs.html">Programs</a>
                            </li>
                            <li class="">
                                <a href="{{route('events') }}">Events</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li class="">
                                <a href="blog.html">Blog</a>
                            </li>
                        </ul>
                    </div><!-- /.main-nav__main-navigation -->

                </div><!-- /.container -->
            </nav><!-- /.main-nav__one -->

        </header><!-- /.site-header-two -->

        <section class="banner-three">

            <div class="banner-three__circle-1"></div><!-- /.banner-three__circle-1 -->
            <div class="banner-three__circle-2"></div><!-- /.banner-three__circle-2 -->


            <img src="{{ asset('images/resources/banner1.svg')}}" alt="" class="banner-three__moc">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9">
                        <div class="banner-three__content">
                            <h3>Create and Share <span>Creative Experiences </span> </h3>
                            <p>Kami Membuat dan Membagikan Solusi Terbaik untuk Meningkatkan Skill Kreatif Anda di Masa Depan.</p>
                        </div><!-- /.banner-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-three -->
        <section class="service-three">
            <div class="container">
                <div class="block-title-two text-center">
                </div><!-- /.block-title-two text-center -->
                <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-five__single">
                            <div class="service-five__single-inner">
                                <h3><a href="#">Skill Impact</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusante
                                    um doloremque laudantium totam
                                    rem aperiam eaque ipsa </p>
                            </div><!-- /.service-five__single-inner -->
                        </div><!-- /.service-five__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-five__single">
                            <div class="service-five__single-inner">
                                <h3><a href="#">Social Impact</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusante
                                    um doloremque laudantium totam
                                    rem aperiam eaque ipsa </p>
                            </div><!-- /.service-five__single-inner -->
                        </div><!-- /.service-five__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-five__single">
                            <div class="service-five__single-inner">
                                <h3><a href="#">Sharing Impact</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusante
                                    um doloremque laudantium totam
                                    rem aperiam eaque ipsa </p>
                            </div><!-- /.service-five__single-inner -->
                        </div><!-- /.service-five__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            </div><!-- /.container -->
        </section><!-- /.service-three -->





        <section class="about-one">
            <div class="container">
                <img src="{{ asset('images/resources/about-us-1.svg')}}" alt="" class="about-one__moc">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <h3>We Are Creative Experience Agency</h3>
                                <div class="block-title__line"></div><!-- /.block-title__line -->
                            </div><!-- /.block-title -->
                            <p>We help people connect in extraordinary ways.
                            We are experience makers, content creators and creative activators, inspired by culture and fuelled by insights..</p>
                            <h4>Follow to Connection and Get Experiences</h4>
                            <p>We create distinct and data-driven experiences.</p>
                            <!-- /.thm-btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section class="funfact-one funfact-one__home-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <h3><span class="counter">1500</span><!-- /.counter -->+</h3>
                            <p>Members</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <h3><span class="counter">250</span><!-- /.counter -->+</h3>
                            <p>Events</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <h3><span class="counter">110</span><!-- /.counter -->
                            </h3>
                            <p>Program</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <h3><span class="counter">100</span><!-- /.counter -->+</h3>
                            <p>Partners</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->



        <section class="pricing-one pricing-one__home-three">
            <div class="container">

                <div class="pricing-one__block">
                    <div class="block-title-two text-left">
                        <h3>Temukan Pengalaman <br> Kreatif untuk Skill Anda</h3>
                    </div><!-- /.block-title-two -->

                    <div class="pricing-one__btn-block">
                        <ul class="list-unstyled nav nav-tabs">
                            <li class="nav-item">
                                <a href="#monthly" class="nav-link active" data-toggle="tab">Events</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="#yearly" class="nav-link " data-toggle="tab">Programs</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.list-unstyled nav nav-tabs -->
                    </div><!-- /.pricing-one__btn-block -->
                </div><!-- /.pricing-one__block -->

                <div class="tab-content">
                    <div class="tab-pane show active  animated fadeInUp" id="monthly">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <img src="" alt="">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                <ul class="list-unstyled pricing-two__list">
                                    <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                    <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                    <li><i class="far fa-check"></i>24 hour support</li>
                                    <li><i class="far fa-check"></i>Customer Managemet</li>
                                    <li><i class="far fa-check"></i>One Mail Box</li>
                                </ul><!-- /.list-unstyled pricing-two__list -->
                                <p><b>$</b> 24.99 <span>Monthly</span></p>
                                <div class="text-center">
                                    <a href="#" class="thm-btn pricing-one__btn pricing-two__btn">Selengkapnya</a><!-- /.thm-btn pricing-one__btn -->
                                </div><!-- /.text-center -->
                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <img src="" alt="">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                <ul class="list-unstyled pricing-two__list">
                                    <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                    <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                    <li><i class="far fa-check"></i>24 hour support</li>
                                    <li><i class="far fa-check"></i>Customer Managemet</li>
                                    <li><i class="far fa-check"></i>One Mail Box</li>
                                </ul><!-- /.list-unstyled pricing-two__list -->
                                <p><b>$</b> 24.99 <span>Monthly</span></p>
                                <div class="text-center">
                                    <a href="#" class="thm-btn pricing-one__btn pricing-two__btn">Selengkapnya</a><!-- /.thm-btn pricing-one__btn -->
                                </div><!-- /.text-center -->
                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <img src="" alt="">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                <ul class="list-unstyled pricing-two__list">
                                    <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                    <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                    <li><i class="far fa-check"></i>24 hour support</li>
                                    <li><i class="far fa-check"></i>Customer Managemet</li>
                                    <li><i class="far fa-check"></i>One Mail Box</li>
                                </ul><!-- /.list-unstyled pricing-two__list -->
                                <p><b>$</b> 24.99 <span>Monthly</span></p>
                                <div class="text-center">
                                    <a href="#" class="thm-btn pricing-one__btn pricing-two__btn">Selengkapnya</a><!-- /.thm-btn pricing-one__btn -->
                                </div><!-- /.text-center -->
                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade in active -->
                    <div class="tab-pane animated fadeInUp " id="yearly">
                        <div class="row">
                            <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <img src="" alt="">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                <ul class="list-unstyled pricing-two__list">
                                    <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                    <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                    <li><i class="far fa-check"></i>24 hour support</li>
                                    <li><i class="far fa-check"></i>Customer Managemet</li>
                                    <li><i class="far fa-check"></i>One Mail Box</li>
                                </ul><!-- /.list-unstyled pricing-two__list -->
                                <p><b>$</b> 24.99 <span>Monthly</span></p>
                                <div class="text-center">
                                    <a href="#" class="thm-btn pricing-one__btn pricing-two__btn">Choose Plan <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn pricing-one__btn -->
                                </div><!-- /.text-center -->
                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            <div class="col-lg-4">
                                <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <div class="pricing-two__bubble-1"></div><!-- /.pricing-two__bubble-1 -->
                                <div class="pricing-two__bubble-2"></div><!-- /.pricing-two__bubble-2 -->
                                <div class="pricing-two__bubble-3"></div><!-- /.pricing-two__bubble-3 -->
                                <div class="pricing-two__bubble-4"></div><!-- /.pricing-two__bubble-4 -->
                                <img src="{{ asset('images/shapes/pricing-shape-1-1.png')}}" class="pricing-two__shape" alt="">
                                <h3>Premium</h3>
                                <img src="{{ asset('images/shapes/pricing-i-2-3.png')}}" alt="">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                <ul class="list-unstyled pricing-two__list">
                                    <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                    <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                    <li><i class="far fa-check"></i>24 hour support</li>
                                    <li><i class="far fa-check"></i>Customer Managemet</li>
                                    <li><i class="far fa-check"></i>One Mail Box</li>
                                </ul><!-- /.list-unstyled pricing-two__list -->
                                <p><b>$</b> 24.99 <span>Monthly</span></p>
                                <div class="text-center">
                                    <a href="#" class="thm-btn pricing-one__btn pricing-two__btn">Choose Plan <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn pricing-one__btn -->
                                </div><!-- /.text-center -->
                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <div class="pricing-two__bubble-1"></div><!-- /.pricing-two__bubble-1 -->
                                <div class="pricing-two__bubble-2"></div><!-- /.pricing-two__bubble-2 -->
                                <div class="pricing-two__bubble-3"></div><!-- /.pricing-two__bubble-3 -->
                                <div class="pricing-two__bubble-4"></div><!-- /.pricing-two__bubble-4 -->
                                <img src="{{ asset('images/shapes/pricing-shape-1-1.png')}}" class="pricing-two__shape" alt="">
                                <h3>Premium</h3>
                                <img src="{{ asset('images/shapes/pricing-i-2-3.png')}}" alt="">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                <ul class="list-unstyled pricing-two__list">
                                    <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                    <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                    <li><i class="far fa-check"></i>24 hour support</li>
                                    <li><i class="far fa-check"></i>Customer Managemet</li>
                                    <li><i class="far fa-check"></i>One Mail Box</li>
                                </ul><!-- /.list-unstyled pricing-two__list -->
                                <p><b>$</b> 24.99 <span>Monthly</span></p>
                                <div class="text-center">
                                    <a href="#" class="thm-btn pricing-one__btn pricing-two__btn">Choose Plan <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn pricing-one__btn -->
                                </div><!-- /.text-center -->
                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade in active -->
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->


        <section class="blog-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-three__block">
                            <div class="block-title-two text-left block-title-two__home-five">
                                <h3>Blog Terbaru</h3>
                            </div><!-- /.block-title-two -->
                            <p>Di sini Anda dapat menemukan pembaruan tentang berita, cerita, komunitas terbaru, dan apa yang sedang kami lakukan.</p>
                            <a href="#" class="thm-btn blog-three__more-btn">Selengkapnya</a><!-- /.thm-btn blog-three__more-btn -->
                        </div><!-- /.blog-three__block -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-three__single">
                            <h3><a href="blog-details.html">When Do We Need A Design System? An Interview With Brad Frost System.</a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus eroluptate accusantium doloremque lautium totam rem apam eaque ipsa quae</p>
                            <ul class="blog-three__meta list-unstyled">
                                <li><a href="#"><i class="far fa-user-alt"></i> Posted On May 12, 2020 by Followhub</a></li>
                            </ul><!-- /.blog-three__meta list-unstyled -->
                            <a href="blog-details.html" class="thm-btn blog-three__btn">Selengkapnya</a><!-- /.thm-btn blog-three__btn -->
                        </div><!-- /.blog-three__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-three__single">
                            <h3><a href="blog-details.html">When Do We Need A Design System? An Interview With Brad Frost System.</a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus eroluptate accusantium doloremque lautium totam rem apam eaque ipsa quae</p>
                            <ul class="blog-three__meta list-unstyled">
                                <li><a href="#"><i class="far fa-user-alt"></i> Posted On May 12, 2020 by Followhub</a></li>
                            </ul><!-- /.blog-three__meta list-unstyled -->
                            <a href="blog-details.html" class="thm-btn blog-three__btn">Selengkapnya</a><!-- /.thm-btn blog-three__btn -->
                        </div><!-- /.blog-three__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-three -->


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


        <footer class="site-footer-one">
            <div class="site-footer-two">
            <img src="{{ asset('images/shapes/footer-shape-2-1.png')}}" alt="" class="site-footer-two__shape-1">
            <img src="{{ asset('images/shapes/footer-shape-2-2.png')}}" alt="" class="site-footer-two__shape-2">

            <div class="site-footer-two__bottom">
                <div class="container">
                    <p>Copy@2020 <a>Followhub</a>. All Right Reserved.</p>
                </div><!-- /.container -->
            </div><!-- /.site-footer-two__bottom -->
        </div><!-- /.site-footer-two -->
        </footer><!-- /.site-footer-one -->

    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <div class="side-menu__block">


        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ asset('images/shapes/close-1-1.png')}}" alt=""></a>
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
