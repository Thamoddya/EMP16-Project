@extends('layout.mainLayout')
@section('main_content')
    <section style="overflow-x: hidden" class="first-hightlight-wrapper mt-5">
        <div class="container">
            <div class="title-wraper bold black mt-4" data-aos="zoom-in">
                Our Branding Process
            </div>
            <div class="links-wrapper">
                <ul>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="img-fluid img-thumbnail" src="{{ asset('images/home/brandingimg.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="description-wrapper text-white" data-aos="zoom-in">
                        Brand recognition
                        <h6 class="mt-4 text-secondary" data-textify>We tailor the web development process to your
                            <span>unique</span>
                            Consistency is crucial for better brand recognition. Having your customers recognize your brand
                            and its most prominent elements is a surefire way to stay on top.
                            <br>
                            <span>Strong website branding can help customers see far beyond the services or products. It can
                                help them easily recognize your brand in a sea full of competitors, making you their
                                preferred choice.</span>
                            <br>
                        </h6>
                        <hr>
                        <h6 class="mt-1 text-secondary" data-textify>
                            We offer creative and user-centric design services, ensuring that the software products not only
                            function effectively but also provide an aesthetically pleasing and intuitive interface.
                            We have a research center in our company, with a dedicated research center, Vertex Cooperation
                            is
                            committed to staying at the forefront of technological advancements. The research team explores
                            emerging technologies, industry trends, and potential innovations that can be integrated into
                            the
                            company's offerings.
                        </h6>
                        <h6 class="mt-1 text-white-50" data-textify>
                            The global leader in Reliable innovations, Cutting edge Software Development,
                            and revolutionary technology-based researchers
                        </h6>
                        <h6 class="mt-2 text-white-50" data-textify>
                            <span class="text-primary">First things first</span> - defining your purpose. No profitable website works efficiently without a
                            goal to guide it through the turbulence of the market world.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
