@extends('layouts.app')

@section('content')
    <section class="no-padding" style="height:90vh!important">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="slider_2" class="rev_slider slider-home-2" data-version="5.0.7">
            <ul>

                <!-- SLIDE  -->
                <li data-delay="1500">
                    <!-- MAIN IMAGE -->
                    <img src="/images/slider/1.jpg" alt="Isotech Co" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['-50','-50','-50','-150']" data-width="['750','750','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal" data-fontsize="['82','82','41','41']"
                        data-lineheight="['82','82','45','45']"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transform_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1500">
                        <p class="typo-1">Isotech Co.</p>
                    </div>
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['150','150','150','50']" data-width="['550','550','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transfor_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" data-fontsize="['16','16','14','14']"><a href="{{ route('about_path') }}"
                            class="ot-btn border-theme">Know more</a>
                    </div>
                </li>
                <li data-delay="1500">
                    <!-- MAIN IMAGE -->
                    <img src="/images/slider/2.jpg" alt="Aluminum & Glass" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['-50','-50','-50','-150']" data-width="['750','750','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal" data-fontsize="['82','82','41','41']"
                        data-lineheight="['82','82','45','45']"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transform_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1500">
                        <p class="typo-1">Aluminum & Glass</p>
                    </div>
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['150','150','150','50']" data-width="['550','550','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transfor_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" data-fontsize="['16','16','14','14']"><a href="{{ route('products_path') }}"
                            class="ot-btn border-theme">Know more</a>
                    </div>
                </li>
                <li data-delay="1500">
                    <!-- MAIN IMAGE -->
                    <img src="/images/slider/mondrian.jpg" alt="Mondrian Tower" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['-50','-50','-50','-150']" data-width="['750','750','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal" data-fontsize="['82','82','41','41']"
                        data-lineheight="['82','82','45','45']"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transform_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1500">
                        <p class="typo-1">Mondrian Tower</p>
                    </div>
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['150','150','150','50']" data-width="['550','550','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transfor_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" data-fontsize="['16','16','14','14']"><a href="#" data-toggle="modal"
                            data-target="#project-14" class="ot-btn border-theme">Know more</a>
                    </div>
                </li>
                <li data-delay="1500">
                    <!-- MAIN IMAGE -->
                    <img src="/images/slider/tayseer.jpg" alt="Al Tayseer Hotel" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['-50','-50','-50','-150']" data-width="['750','750','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal" data-fontsize="['82','82','41','41']"
                        data-lineheight="['82','82','45','45']"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transform_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1500">
                        <p class="typo-1">Al Tayseer Hotel</p>
                    </div>
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['150','150','150','50']" data-width="['550','550','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transfor_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" data-fontsize="['16','16','14','14']"><a href="#" data-toggle="modal"
                            data-target="#project-1" class="ot-btn border-theme">Know more</a>
                    </div>
                </li>
                <li data-delay="1500">
                    <!-- MAIN IMAGE -->
                    <img src="/images/slider/sultan.jpg" alt="Sultan Villa" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['-50','-50','-50','-150']" data-width="['750','750','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal" data-fontsize="['82','82','41','41']"
                        data-lineheight="['82','82','45','45']"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transform_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1500">
                        <p class="typo-1">Sultan Villa</p>
                    </div>
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['150','150','150','50']" data-width="['550','550','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transfor_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" data-fontsize="['16','16','14','14']"><a href="#" data-toggle="modal"
                            data-target="#project-6" class="ot-btn border-theme">Know more</a>
                    </div>
                </li>
                <li data-delay="1500">
                    <!-- MAIN IMAGE -->
                    <img src="/images/slider/nachard.jpg" alt="Nachard Villa" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['-50','-50','-50','-150']" data-width="['750','750','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal" data-fontsize="['82','82','41','41']"
                        data-lineheight="['82','82','45','45']"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transform_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1500">
                        <p class="typo-1">Nachard Villa</p>
                    </div>
                    <div class="tp-caption" data-x="left" data-hoffset="['15','','','15']" data-y="center"
                        data-voffset="['150','150','150','50']" data-width="['550','550','480','320']"
                        data-transform_idle="o:1;" data-whitespace="normal"
                        data-transform_in="x:-100px;opacity:0;s:600;e:Power3.easeOut;"
                        data-transfor_out="x:-100;opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1900" data-fontsize="['16','16','14','14']"><a href="#" data-toggle="modal"
                            data-target="#project-3" class="ot-btn border-theme">Know more</a>
                    </div>
                </li>
            </ul>
        </div>

    </section>
    <!-- /Slider -->


    <section class="boxed pdb-0">
        <div class="row display-flex">
            @foreach ($featured as $p)
                <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:30px">
                    @include('layouts.project')
                </div>
            @endforeach
        </div>
        <div class="footer-portfolio">
            <p>WANT TO SEE MORE AMAZING PROJECTS? </p>
            <a href="{{ route('portfolio_path') }}" class="ot-btn border-dark">View more</a>
        </div>
    </section>
    <!-- /portfolio -->

    @foreach ($featured as $p)
        @include('layouts.project-details')
    @endforeach

    {{-- <section>
        <div class="container">
            <div class="text-center">
                <h3 class="title-with-sub">OUR PRODUCTS</h3>
                <span class="sub-title color-theme">Top brands, guaranteed quality</span>
            </div>
            <div id="partner-h1" class="owl-partner mgt-30">
                <div class="partner-item">
                    <a href="{{ route('products_path') }}"><img src="/images/products/brand-1.png" class="img-responsive"
                            alt="Cortizo"></a>
                </div>
                <div class="partner-item">
                    <a href="{{ route('products_path') }}"><img src="/images/products/brand-2.png" class="img-responsive"
                            alt="RCN"></a>
                </div>
                <div class="partner-item">
                    <a href="{{ route('products_path') }}"><img src="/images/products/brand-3.png" class="img-responsive"
                            alt="Stacbond"></a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /partner -->

    <div class="clearfix mgt-60"></div>
@endsection
