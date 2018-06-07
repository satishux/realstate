@extends('layouts.pages.app')

@section('content')

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="word-rotator-title mb-4">
                        The New Way to 
                        <strong class="inverted inverted-primary">
                            <span class="word-rotator" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
                                <span class="word-rotator-items">
                                    <span>success.</span>
                                    <span>advance.</span>
                                    <span>progress.</span>
                                </span>
                            </span>				
                        </strong>
                    </h2>

                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
                    </p>

                    <hr class="tall">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2">Customer Support</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2">HTML5 / CSS3 / JS</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2">Sliders</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2">Icons</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2">Buttons</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="mb-2">Lightbox</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-primary mb-0">
            <div class="container">
                <div class="row counters counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="25000" data-append="+">0</strong>
                            <label>Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="15">0</strong>
                            <label>Years in Business</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <strong data-to="352">0</strong>
                            <label>Cups of Coffee</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="178">0</strong>
                            <label>High Score</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video section section-text-light section-video section-center mt-0" data-video-path="video/dark" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%', 'overlay': true}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav mt-4 mb-0" data-plugin-options="{'items': 1, 'loop': false}">
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-style-6 testimonial-with-quotes mb-0">
                                        <blockquote>
                                            <p>Hello, I want to thank you for creating a great template and for the excellent and quick support and help that you have been providing to me as I begin to work with it.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-style-6 testimonial-with-quotes mb-0">
                                        <blockquote>
                                            <p>Just want to say Okler RULES. Provide great tech service for each template and allows me to become more knowledgeable as a designer.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h2><strong>Who</strong> We Are</h2>
                    <p>Rising Street Infra City Pvt. Ltd. is a registered real estate company. A conglomerate with diversified Real estate and Infrastructure company, having primary business of development of residential, commercial and retail properties. The company has unique business model with earnings arising from development Stallion Vision InfraEstate Pvt. Ltd. offers you the opportunity to live relaxed yet grand way. While you sip on Tea with your friends, or read a book while enjoying the scenery or simply take a walk with your loved ones, we can see to it that your home and its amenities are a perfect blend of comfort style.</p>
                <p>The group is equipped with its extraordinary team of dedicated staff and its perpetual commitment to Gravity, Integrity and Perfection and with strong vision. With our vast experience in developing beautiful projects .We have expertise and knowledge to help our investor to make the best decisions.</p>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-1.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">John Doe</span>
                                    <span class="thumb-info-type">CEO</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-2.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Jessica Doe</span>
                                    <span class="thumb-info-type">Marketing</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-3.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Rick Edward Doe</span>
                                    <span class="thumb-info-type">Developer</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-4.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Melinda Wolosky</span>
                                    <span class="thumb-info-type">Design</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
            </div>
        </div>

        @include('layouts.pages.partials.call_to_action')


@endsection

@section('scripts')

@endsection
