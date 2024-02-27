@extends('layout.mainLayout')
@section('main_content')
    <section style="overflow-x: hidden" class="second-hightlight-wrapper ">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('images/home/parthner-bg.png')}}" style="width: 100%;height: 100%"
                     alt="parthners-vertex-co">
            </div>
        </div>
        <div class="container mb-2">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="description-wrapper" data-aos="zoom-in">
                            Explore<span> More</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search">
                <div class="search-box">
                    <div class="search-field">
                        <input placeholder="Search..." class="input" type="text" id="data-input" list="data-list">
                        <datalist id="data-list" style="width: 100%;">
                            <option value="Edge">
                            <option value="Firefox">
                            <option value="Chrome">
                            <option value="Opera">
                            <option value="Safari">
                        </datalist>
                        <div class="search-box-icon">
                            <button class="btn-icon-content">
                                <i class="search-icon">
                                    <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
                                        <path
                                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
                                            fill="#fff"></path>
                                    </svg>
                                </i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="title-wraper bold black" data-aos="zoom-in">
                Vertex Partnerships
            </div>
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="row">
                            <div class="col-12">
                                <img class="image-first" style="width: 100%;border-radius: 14px;padding: 5px"
                                     id="my-sticky-element"
                                     src="{{asset('images/home/codiffy.jpg')}}" alt="codiffylk">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="row">
                            <div class="col-12">
                                <img class="image-first" style="width: 100%;border-radius: 14px;padding: 5px"
                                     id="my-sticky-element"
                                     src="{{asset('images/home/volex.jpg')}}" alt="volexDigital">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="row">
                            <div class="col-12">
                                <img class="image-first" style="width: 100%;border-radius: 14px;padding: 5px"
                                     id="my-sticky-element"
                                     src="{{asset('images/home/aquos.jpg')}}" alt="aqous">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="row">
                            <div class="col-12">
                                <img class="image-first" style="width: 100%;border-radius: 14px;padding: 5px"
                                     id="my-sticky-element"
                                     src="{{asset('images/home/inovenza.jpg')}}" alt="inovenza">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="overflow-x: hidden" class="second-hightlight-wrapper mb-3 ">
        <div class="container secondBG mt-4">
            <div class="title-wraper bold black" data-aos="zoom-in">
                Infinite.Creative.Synergy.
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="description-wrapper" data-aos="zoom-in">
                                    <h6 class="mt-4" data-textify>
                                        At Vertex Cooperation, we believe in the power of collaboration. Our company has
                                        established strong partnerships with four outstanding organizations, each
                                        bringing a unique set of skills and expertise to the table.
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 contaner">
                                <p>
                                    Vertex Cooperation, we're dedicated to fostering innovation and synergy through
                                    strategic partnerships. Our mission is to bring together the best in software
                                    development, game design, cutting-edge research, and captivating UI design. With our
                                    four trusted partner companies, we offer a diverse range of services and solutions,
                                    ensuring you can achieve your business objectives efficiently and effectively.
                                </p>
                                <hr>
                                <p>
                                    Discover the power of collaboration with Vertex Cooperation. Explore, Sell, and
                                    Collect the rarest innovations that drive success in today's competitive landscape.
                                    Join us on a journey of growth, creativity, and excellence.
                                </p>
                            </div>
                            <div class="col-md-6 contaner">
                                <p>
                                    At Vertex Cooperation, we are committed to further enhancing our network of trusted
                                    partners and delivering pioneering solutions to our esteemed clients. If you are
                                    interested in exploring collaboration opportunities with Vertex Cooperation, we
                                    invite you to contact us. Your success is paramount, and we are dedicated to
                                    contributing to your achievements.
                                </p>
                                <hr>
                                <p>
                                    Our partnerships enable us to harness the latest advancements in software
                                    development, ensuring that our clients receive cutting-edge solutions that drive
                                    efficiency and innovation. Together with our partners, we are able to meet a wide
                                    range of client needs and exceed expectations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="overflow-x: hidden" class="second-hightlight-wrapper-2 ">
        <div class="container mt-1 thirdBg ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 box-one mt-4" >
                        <div class="row">
                            <div class="col-12">
                                <i class="fa fa-users text-white-50" style="font-size: 45px;margin: 0 auto 1rem;" ></i>
                            </div>
                            <div class="col-12">
                                <h3 style="font-size: 18px;padding: 0 20px;margin-bottom: 15px;-webkit-box-flex: 1;">Have An Idea : Build & Deploy With Us</h3>
                            </div>
                            <div class="col-12">
                               <p class="text-white-50">
                                   We transform concepts into reality. Let's collaborate, from idea to execution, for your success.
                               </p>
                            </div>
                            <div class="col-12 mb-3">
                                <a href="https://wa.me/+94718959403" style="font-size: 18px;padding: 0 10px;margin-bottom: 25px;-webkit-box-flex: 1;text-decoration: none">Initiate Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 box-one mt-4" >
                        <div class="row">
                            <div class="col-12">
                                <i class="fa-solid fa-people-group text-white-50" style="font-size: 45px;margin: 0 auto 1rem;" ></i>
                            </div>
                            <div class="col-12">
                                <h3 style="font-size: 18px;padding: 0 20px;margin-bottom: 15px;-webkit-box-flex: 1;">Passionate About Research? Join Forces With Us.</h3>
                            </div>
                            <div class="col-12">
                                <p class="text-white-50">
                                    At Vertex Cooperation, we're driven to explore new horizons. Let's research together and ignite innovation.
                                </p>
                            </div>
                            <div class="col-12 mb-3">
                                <a href="https://wa.me/+94718959403" style="font-size: 18px;padding: 0 20px;margin-bottom: 25px;-webkit-box-flex: 1;text-decoration: none">Reach Out to Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4" >
                        <div class="row">
                            <div class="col-12">
                                <i class="fa-solid fa-object-group text-white-50" style="font-size: 45px;margin: 0 auto 1rem;" ></i>
                            </div>
                            <div class="col-12">
                                <h3 style="font-size: 18px;padding: 0 20px;margin-bottom: 15px;-webkit-box-flex: 1;">Enhance Your Brand : Collaborate With us</h3>
                            </div>
                            <div class="col-12">
                                <p class="text-white-50">
                                    Collaborate with us to unlock new horizons. Together, we'll elevate your brand's presence and success.
                                </p>
                            </div>
                            <div class="col-12 mb-3">
                                <a href="https://wa.me/+94718959403" style="font-size: 18px;padding: 0 10px;margin-bottom: 25px;-webkit-box-flex: 1;text-decoration: none">Contact Us Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
