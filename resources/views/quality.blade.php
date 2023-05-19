@extends('layouts.app')

@section('content')
    <section class="boxed no-padding bg-img " style="background-image: url(/images/bg/bg-services2.jpg);">
        <div class="sub-header depen-on-img">
            <img src="/images/bg/bg-services2.jpg" class="img-responsive" alt="Image">
            <div class="sub-header-inner center-center">
                <h2>QUALITY</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home_path') }}">HOME</a>
                    </li>
                    <li class="active">QUALITY</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /subheader -->

    <section class="boxed pdb-0">
        <article class="services-post">
            <div class="col-md-5 bg-image bg-image-post"
                style="background-image: url(/images/services/quality.png); background-position: center; background-repeat: no-repeat; background-size: contain;">
                <img src="/images/services/quality.png" class="img-responsive" alt="Image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="desc">
                            <div class="title-block-number">
                                <span class="big-number">01</span>
                                <h2 class="title-with-sub">QUALITY CONTROL</h2>
                            </div>
                            <p>
                                Quality control is an unbound ongoing process at ISOTECH that is initiated from the moment
                                we decide to acquire raw materials from a specific supplier, all the way through the
                                manufacturing process and way down finally to installation and delivery. Throughout the
                                lifecycle of any fabricated product till it is delivered, each stage is checked and double
                                checked to ensure a trustworthy, reliable and resilient output is received at an excellent
                                condition by the end user.
                            </p>
                            <p>
                                Our ISO 9001:2015 has adopted the following policies and associated objectives as we believe
                                in collective success and thus, each department periodically reviews its objectives and
                                goals in order to continually improve overall performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="services-post">
            <div class="col-md-5 col-md-push-7 bg-image bg-image-post"
                style="background-image: url(/images/services/safety.png); background-position: center; background-repeat: no-repeat; background-size: contain;">
                <img src="/images/services/safety.png" class="img-responsive" alt="Image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="desc">
                            <div class="title-block-number">
                                <span class="big-number">02</span>
                                <h2 class="title-with-sub">SAFETY AND HEALTH</h2>
                            </div>
                            <p>
                                Safety is a very intricate issue that we handle seriously at ISOTECH. We emphasize and
                                encourage safety precautions and requirements and strive to enforce it at every stage of
                                operation. Consequently, safety measures are applied and monitored throughout all operation
                                phases, from warehouse to factory to transportation and installation without any compromise.
                                The ISO 45001- 2018 Certification for Occupational Health & Safety will be issued to ISOTECH
                                during 2022.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="services-post">
            <div class="col-md-5 bg-image bg-image-post"
                style="background-image: url(/images/services/environmental.png); background-position: center; background-repeat: no-repeat; background-size: contain;">
                <img src="/images/services/environmental.png" class="img-responsive" alt="Image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="desc">
                            <div class="title-block-number">
                                <span class="big-number">03</span>
                                <h2 class="title-with-sub">ENVIRONMENTAL CONCERNS</h2>
                            </div>
                            <p>
                                At ISOTECH we strive to pursue most environmentally safe approaches within our reach and
                                constantly seeking raw materials and production processes with the least ecological impacts.
                                We are always concerned about the environment and tend to maintain most regulation and
                                encourage more eco-friendly methods. From investing in less power hungry electrical
                                equipment to selecting products and consumables that render less waste, less harmful
                                emissions and less contaminants. We care for our neighborhood, country and planet alike.
                            </p>
                            <p>
                                The ISO 14001:2015 specifies the requirements for an environmental management system that
                                ISOTECH can utilize to enhance its environmental performance will be issued during 2022.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="services-post">
            <div class="col-md-7 col-md-push-5 bg-image bg-image-post"
                style="background-image: url(/images/services/iso.jpg); background-position: center; background-repeat: no-repeat; background-size: contain;">
                <img src="/images/services/iso.jpg" class="img-responsive" alt="Image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="desc">
                            <div class="title-block-number">
                                <span class="big-number">04</span>
                                <h2 class="title-with-sub">ISO CERTIFICATION</h2>
                            </div>
                            <p>
                                ISOTECH received the ISO 9001:2015 certification number LB001902 on the 10th of June 2021
                                from Bureau Veritas for Quality Management System.
                            </p>
                            <div class="clearfix mgt-150"></div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </section>
    <!-- /article Post -->
@endsection
