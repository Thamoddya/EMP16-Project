@extends('layout.mainLayout')
@section('main_content')
<section style="overflow-x: hidden" class="first-hightlight-wrapper mt-5">
    <div class="container">
        <div class="title-wraper bold black mt-4" data-aos="zoom-in">
            Our Projects
        </div>
        <div class="links-wrapper">
            <ul>
                <li><a href="">Make Yours</a></li>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto">
                <img class="img-fluid" src="{{asset("images/home/neel2.svg")}}" alt="">
            </div>
            <div class="col-auto mt-3">
                <img src="{{asset("images/home/tcbt.png")}}" alt="">
            </div>
        </div>
    </div>
</section>

<section>
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
</section>
@endsection