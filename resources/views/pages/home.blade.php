@extends('layout.mainLayout')
@section('main_content')
    <!-- Alert Section -->
    <section class="alert-section top-50" >
        <div class="container">
            <div class="alert-title" data-aos="zoom-in">
                Welcome to Innovation Unleashed!
            </div>
            <div class="alert-text" data-aos="zoom-in">
                Collaborate with some of the brightest minds in the industry, harness cutting-edge technologies, and
                engage with clients who are a constant source of inspiration!
                <br>
                <div class=" mt-3">
                    <i class="fa fa-facebook  m-2 p-1"></i>
                    <i class="fa fa-whatsapp m-2 p-1"></i>
                    <i class="fa fa-instagram m-2 p-1"></i>
                    <i class="fa fa-linkedin m-2 p-1"></i> / +94 71 598 9403
                </div>
            </div>
        </div>
    </section>
    <section style="overflow-x: hidden" class="first-hightlight-wrapper">
        <div class="container">
            <div class="new-alert">
                START WITH
            </div>
            <div class="title-wraper bold black" data-aos="zoom-in">
                Innovate. Integrate. Inspire.
            </div>
            <div class="links-wrapper">
                <ul>
                    <li><a href="">Make Yours</a></li>
                </ul>
            </div>
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-12">
                        <img class="image-first"
                             style="width: 100%;filter: drop-shadow(-10px 0px 40px rgba(152,146,146,0.39));"
                             data-aos="zoom-in-right"
                             src="{{asset('images/home/website-one.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second section starts here -->
    <section style="overflow-x: hidden" class="second-hightlight-wrapper">
        <div class="container">
            <div class="new-alert">
                BEST WAY TO
            </div>
            <div class="title-wraper bold black" data-aos="zoom-in">
                Simplify Your Work
            </div>
            <div class="links-wrapper">
                <ul>
                    <li><a href="">Make Yours</a></li>
                </ul>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <img class="image-first mobile-image-one " style="width: 100%;" id="my-sticky-element"
                                     src="{{asset('images/home/image-mobile-one.svg')}}"  alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="description-wrapper" data-aos="zoom-in">
                            More Simple. Most reliable. <br>Less Cost.
                            <h6 data-textify class="mt-4">We tailor the web development process to your
                                <span>unique</span>
                                needs and requirements. The best
                                web development team specializing in designing, deploying, updating, and maintaining.
                                Bring your websites, web applications, apps, and innovations.
                                <br class="mt-3">
                                <span>We want your website or web application personalized and specific to your business requirements.</span>
                            </h6>
                            <br>
                            <h6 data-textify>
                                During the development phase, our front-end developers, back-end developers, and other
                                team members will work together to build your website or web application based on your
                                vision and the roadmap we have outlined. We will create the product according to your
                                requirements and objectives and inform you about our progress. We want your website or
                                web application personalized and specific to your business requirements.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="overflow-x: hidden" class="second-hightlight-wrapper mb-3">
        <div class="container secondBG">
            <div class="new-alert">
                RESPONSIVENESS
            </div>
            <div class="title-wraper bold black" data-aos="zoom-in">
                One Application.All Devices
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="description-wrapper" data-aos="zoom-in">
                                    More Simple. Most reliable. <br>Less Cost.
                                    <h6 class="mt-4" data-textify>We tailor the web development process to your <span>unique</span>
                                        needs and requirements. The best
                                        web development team specializing in designing, deploying, updating, and
                                        maintaining.
                                        Bring your websites, web applications, apps, and innovations.
                                        <br>
                                        <span>We want your website or web application personalized and specific to your business requirements.</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 " id="animatedDiv" >
                        <div class="row">
                            <div class="col-12">
                                <img data-aos="fade-down" class="image-first" style="width: 100%;"
                                     src="{{asset('images/home/multiple-device-img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 mb-3">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row">
                        <video width="100%" class="col-12 secondBG m-1" autoplay muted loop>
                            <source src="{{asset('images/home/videoOne.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="col-12 secondBG m-1">
                            <h6 class="animated-text-container">
                                <span
                                    class="animated-text-left font-weight-bold">Innovate      Integrate        Inspire</span>
                            </h6>
                        </div>
                        <div class="col-12 secondBG m-1">
                            <h5 class="animated-text-container">
                                <span class="animated-text font-weight-bold">We tailor the web development process to your unique needs and requirements.</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 secondBG">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('images/home/Vertex Co POST 1.png')}}" style="width: 100%;border-radius: 5px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Second section starts here -->
    <div class="container-fluid mt-5 mb-3">
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-1"></div>
                        <div class="swiper-slide swiper-2"></div>
                        <div class="swiper-slide swiper-3"></div>
                        <div class="swiper-slide swiper-4"></div>
                        <div class="swiper-slide swiper-5"></div>
                        <div class="swiper-slide swiper-6"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth section starts here -->
    <section style="overflow-x: hidden" class="fourth-heghlight-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="left-side-wrapper col-sm-12 col-md-6">
                    <div class="left-side-container">
                        <div class="title-wraper text-dark mb-1">
                           Simple & Alluring UI
                        </div>
                        <div class="description-wraper">
                            Our software company excels in sleek, intuitive UI design for a professional, captivating website.</div>

                        <div class="links-wrapper">
                            <ul>
                                <li><a href="tel:0718959403">Make a Call Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right-side-wrapper col-sm-12 col-md-6" id="community">
                    <div class="right-side-container" >
                        <div class="title-wraper white">
                            Join With Our Community To Start a Great journey
                        </div>
                        <form class="mt-4 p-5">
                            <div class="group mt-1 mb-4">
                                <input required="" type="text" class="input" name="name">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Name</label>
                            </div>
                            <div class="group mt-1 mb-4">
                                <input required="" type="number" class="input" name="mobile">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Mobile</label>
                            </div>
                            <div class="group mt-1 mb-4">
                                <input required="" type="text" class="input" name="email">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <button class="button-style mt-2"><span>Submit Request</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fourth section ends here -->
    <!-- Fifth section starts here -->
    <section class="fifth-heghlight-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="left-side-wrapper col-sm-12 col-md-6">
                    <div class="left-side-container">
                        <div class="top-logo-wrapper">
                            <div class="logo-wrapper">
                                <img src="{{asset('images/icons/logo.svg')}}">
                            </div>
                        </div>

                        <div class="tvshow-logo-wraper">
                            <img src="{{asset('images/home/banker.png')}}">
                        </div>

                        <div class="watch-more-wrapper">
                            <a href="#">See How We Collaborate Together</a>
                        </div>
                    </div>
                </div>
                <div class="right-side-wrapper col-sm-12 col-md-6">
                    <div class="right-side-container">
                        <div class="top-logo-wrapper">
                            <div class="logo-wrapper">
                                <img src="{{asset('images/icons/parthners-logo.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fifth section ends here -->


@endsection
