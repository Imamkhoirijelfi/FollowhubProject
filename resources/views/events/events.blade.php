
@extends("layouts.app2")
@section("title")
    Events
@endsection
@section("content")
    <div class="preloader">
        <img src="{{ asset('images/loader.png')}}" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="site-header-two site-header-two__">
            <nav class="main-nav__two stricky">
                <div class="container">
                    <div class="main-nav__logo-box">
                        <a href="index.blade.php">
                            <img src="{{ asset('images/logo-dark.png')}}" alt="">
                        </a>
                    </div><!-- /.main-nav__logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li class="">
                                <a href="{{route('index') }}">Home</a>
                            </li>
                            <li class="">
                                <a href="programs.html">Programs</a>
                            </li>
                            <li class="current">
                                <a href="{{route('events') }}">Events</a>
                            </li>
                            <li>
                                <a href="{{route('about') }}">About</a>
                            </li>
                            <li class="">
                                <a href="blog.html">Blog</a>
                            </li>
                        </ul>
                    </div><!-- /.main-nav__main-navigation -->
                </div><!-- /.container -->
            </nav><!-- /.main-nav__one -->

        </header><!-- /.site-header-two -->

        <section class="cta-two cta-two__about-page" style="background-image: url(assets/images/backgrounds/banner-halaman-events.png);">
            <div class="container text-center">
                <h3>Our best events</h3>
            </div><!-- /.container -->
        </section><!-- /.cta-two -->


        <section class="pricing-one pricing-one__home-three">
            <div class="container">

                <div class="pricing-one__block">
                    <div class="block-title-two text-left">
                        <p>Event Kami</p>
                        <h3>Don't Hesitate To Contact <br> With Us Get A Call</h3>
                    </div><!-- /.block-title-two -->


                </div><!-- /.pricing-one__block -->

                <div class="tab-content">
                    <div class="tab-pane show active  animated fadeInUp" id="monthly">
                        <div class="row">
                            @foreach($events as $event)


                            <div class="col-lg-4">
                                <div class="pricing-two__single">
                            <div class="pricing-two__top">
                                <img src="{{asset('images/ExTalks.jpg')}}" alt="Image" height="370" width="370">
                            </div><!-- /.pricing-two__top -->
                            <div class="pricing-two__bottom">
                                    <h3 class="sidebar__title">{{$event->eventName}}
                                        <span></span>
                                    </h3><!-- /.sidebar__title -->
                                    <div>
                                        <div class="sidebar__post-content">
                                            <h3>Tanggal & Waktu</h3>
                                            <span>{{$event->dateTime}}</span>

                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->

                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-content">
                                            <h3>Lokasi</h3>
                                            <span>{{$event->location}}</span>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-content">

                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                                <table>
                                    <tr height ="50px">
                                        <td align="left" valign="middle" width="300px" > <p> <b>Tiket: </b> {{$event->hargaTiket}} IDR</p></td>
                                        <td align="left" valign="middle">
                                            <p> <a href="event-details.html" class="thm-btn pricing-one__btn pricing-two__btn">Selengkapnya</a><!-- /.thm-btn pricing-one__btn -->
                                            </p></td>

                                    </tr>


                                </table>

                            </div><!-- /.pricing-two__bottom -->
                        </div><!-- /.pricing-two__single -->
                            </div><!-- /.col-lg-4 -->
                        @endforeach

                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade in active -->
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->


        <div class="site-footer-two">
            <img src="{{ asset('images/shapes/footer-shape-2-1.png')}}" alt="" class="site-footer-two__shape-1">
            <img src="{{ asset('images/shapes/footer-shape-2-2.png')}}" alt="" class="site-footer-two__shape-2">

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
