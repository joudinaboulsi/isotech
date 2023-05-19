@extends('layouts.app')

@section('content')
    <section class="boxed no-padding bg-img " style="background-image: url(/images/bg/bg-about.jpg);">
        <div class="sub-header depen-on-img">
            <img src="/images/bg/bg-about.jpg" class="img-responsive" alt="Image">
            <div class="sub-header-inner center-center">
                <h2>ProductsS</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home_path') }}">HOME</a>
                    </li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="boxed">
        <div class="row display-flex">
            <div class="col-md-4">
                <div class="brand-box">
                    <img src="/images/products/brand-1.png" class="img-responsive mg-auto" alt="Cortizo">
                    <br>
                    <p class="desc">Cortizo stands out for completing the whole manufacturing cycle of aluminum: foundry,
                        extrusion, powder coating, anodizing, chemical brightening, CNC machining, packaging, storage and
                        distribution. CORTIZO, is known for being the first manufacturer and distributor of aluminum and PVC
                        systems for the architecture and industry sectors in Spain, as well as one of the sector's leading
                        companies in Europe. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box">
                    <img src="/images/products/brand-2.png" class="img-responsive mg-auto" alt="RCN">
                    <br>
                    <p class="desc">RCN-lnnovation in Aluminum Systems, Lda is a company dedicated to the creation,
                        development, production and installation of minimalist aluminum systems for architecture, innovative
                        in design and functionality. In 2016, it presented the brand of minimalist systems EXPansion to the
                        market. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="brand-box">
                    <img src="/images/products/brand-3.png" class="img-responsive mg-auto" alt="Stacbond">
                    <br>
                    <p class="desc">Sistemas Tecnicos del Accesorio y Componentes S.L. (STAC® ) is a company specialising
                        in solutions for building envelopes and facades. For more than 18 years STAC® products have been
                        selected by architects, developers and builders all over the world thanks to their quality,
                        commitment and guarantee. This extensive geographical coverage has enriched our product range. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /promotion -->

    <section class="boxed pdb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2">
                    <div class="sidebar">
                        <div class="widget widget_product_categories">
                            <h4 class="widget-title">CATEGORY</h4>
                            <ul class="projectFilter">
                                <li>
                                    <a href="#" data-filter="*" class="current ">All</a>
                                </li>
                                @foreach ($categories as $c)
                                    <li>
                                        <a href="#" data-filter=".{{ $c->category_filter }}"
                                            class="">{{ $c->category }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-10">
                    <div class="products-list list-portfolio-warp products">
                        <div class="grid-sizer col-lg-3 col-md-4 col-sm-6"></div>
                        @foreach ($products as $p)
                            <div class="col-lg-3 col-md-4 col-sm-6 element-item {{ $p->category_filter }}">
                                <div class="product text-center">
                                    <div class="product-images">
                                        <a href="#" data-toggle="modal" data-target="#product-{{ $p->id }}">
                                            <img src="/images/products/{{ $p->image_1 }}" class="img-responsive"
                                                alt="{{ $p->title }}">
                                        </a>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-title"><a href="#" data-toggle="modal"
                                                data-target="#product-{{ $p->id }}">{{ $p->title }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /main shop -->

    <section class="boxed no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">OTHER SUPPLIERS</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/1.png" class="img-responsive" alt="Giesse">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/2.png" class="img-responsive" alt="Geze">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/3.png" class="img-responsive" alt="Dorma">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/4.png" class="img-responsive" alt="Somfy">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/5.png" class="img-responsive" alt="Technal">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/6.png" class="img-responsive" alt="Saint Gobain">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/7.png" class="img-responsive" alt="Guardian Glass">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/8.png" class="img-responsive" alt="Hilti">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/9.png" class="img-responsive" alt="Soudal">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/10.png" class="img-responsive" alt="Dow Corning">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/11.png" class="img-responsive" alt="Glastrosch">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <img src="/images/partner/12.png" class="img-responsive" alt="AGC">
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix mgt-60"></div>

    <!-- Modals -->
    @foreach ($products as $p)
        <div class="modal" id="product-{{ $p->id }}" tabindex="-1" role="dialog"
            aria-labelledby="productModal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header pdb-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="productModal">
                            <div class="row">
                                <div class="col-xs-4 col-sm-3 col-md-2">
                                    @if ($p->brand == 'Cortizo')
                                        <img src="/images/products/brand-1.png" width="100" alt="Cortizo">
                                    @elseif($p->brand == 'RCN')
                                        <img src="/images/products/brand-2.png" width="100" alt="RCN">
                                    @else
                                        <img src="/images/products/brand-3.png" width="100" alt="Stacbond">
                                    @endif
                                </div>
                                <div class="col-xs-7 col-sm-4 col-md-6">
                                    {{ $p->title }}
                                    <h5>{{ $p->category }}</h5>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row display-flex">
                            <div class="col-sm-4 col-xs-12">
                                <img src="/images/products/{{ $p->image_1 }}" class="img-responsive"
                                    alt="{{ $p->title }}">
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <img src="/images/products/{{ $p->image_2 }}" class="img-responsive"
                                    alt="{{ $p->title }}">
                            </div>
                            @if ($p->image_3)
                                <div class="col-sm-4 col-xs-12">
                                    <img src="/images/products/{{ $p->image_3 }}" class="img-responsive"
                                        alt="{{ $p->title }}">
                                </div>
                            @endif
                            <div class="col-xs-12">
                                <div class="mgt-15">
                                    {!! $p->description !!}
                                    <a href="{{ $p->url }}" target="_blank"><span class="ot-btn border-dark">Know
                                            more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
