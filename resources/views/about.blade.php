@extends('layouts.app')

@section('content')
    <section class="boxed no-padding bg-img " style="background-image: url(/images/bg/bg-about.jpg);">
        <div class="sub-header depen-on-img">
            <img src="/images/bg/bg-about.jpg" class="img-responsive" alt="Image">
            <div class="sub-header-inner center-center">
                <h2>ABOUT US</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home_path') }}">HOME</a>
                    </li>
                    <li class="active">ABOUT US</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /subheader -->
    <section class="pdb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 text-right">
                    <h3 class="title-with-sub">OUR STORY</h3>
                    <span class="sub-title color-theme">History</span>
                </div>
                <div class="col-md-9 col-sm-8 text-justify">
                    <p>
                        Established by Mr.Wajdi N. Al Awar in 1992 after deciding to abandon his latest job as a senior
                        aluminum fabrication & installation supervisor and invest his long vocational years of experience
                        (Since 1983) in his own business.
                    </p>
                    <p>
                        As his business began to grow exponentially, the established single proprietorship was to be
                        upgraded into a fully fledged company in 2004 incrementing gradually blue and white collar staff, in
                        addition to moving into a larger more spacious facility to house the new machinery, warehouse and
                        storage and certainly a more roomy space for offices to accommodate the increasing number of
                        engineers, draftsmen, sales personnel, procurement officers and other management staff.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /history -->
    <section class="timeline no-padding">
        <div class="row">
            <div class="col-4">
                <ol>

                    <li>
                        <div>
                            <time>2004</time> Inception of ISOTECH Glass & Aluminum Co.
                        </div>
                    </li>


                    <li>
                        <div>
                            <time>2012</time> Expanded factory with more office space
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2015</time> Moved to new larger facility
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2016</time> New computerized machinery
                        </div>
                    </li>

                    <li>
                        <div>
                            <time>2018</time> First regional project (KSA)
                        </div>
                    </li>
                </ol>
                <div class="row">
                    <div class="col-3">
                        <ol>

                            <li>
                                <div>
                                    <time>2019</time> Cortizo RCN STAC
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time>2020</time> First project in Kuwait using Cortizo profile
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time>2021</time> ISO 9001-2015 Certification + Expansion of factory
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time>2022</time> ISO Certification: ISO 45001-2018 - ISO 14001-2015
                                </div>
                            </li>

                            <li>
                                <div>
                                    <time>2023</time> To start operation in KSA
                                </div>
                            </li>

                        </ol>


                    </div>

                    <div class="arrows">
                        <button class="arrow arrow__prev disabled" disabled>
                            <img src="/images/icon/arrow_prev.svg" alt="prev timeline arrow">
                        </button>
                        <button class="arrow arrow__next">
                            <img src="/images/icon/arrow_next.svg" alt="next timeline arrow">
                        </button>
                    </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <li class="active">
                            <h4><a href="#Commercial" data-toggle="tab">Wide Experience</a></h4>
                        </li>
                        <li>
                            <h4><a href="#Interior" data-toggle="tab">Highest Quality</a></h4>
                        </li>
                        <li>
                            <h4><a href="#Renovation" data-toggle="tab">Long-term Reliability </a></h4>
                        </li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="Commercial">
                            <p>Based on our wide experience in the aluminum industry and knowledge of the versatile profiles
                                and accessories from multitude worldwide suppliers, in addition to market requirements and
                                changing demands, we are determined to be a reliable source for all your aluminum and glass
                                fabrication needs. By offering turn-key solutions, ISOTECH commences from design assistance
                                in any project size and from the recommendation of the most suitable aluminum profile and
                                glass specifications to supplying, manufacturing and installation of the end products.</p>
                            <div class="clearfix mgt-30"></div>
                            <img src="/images/content/about2.png" class="img-responsive" alt="Wide Experience">
                        </div>
                        <div class="tab-pane fade" id="Interior">
                            <p>Our priority is to insure the highest quality at all times while retaining cost-effective
                                approaches. Since all of our suppliers are globally recognized, reliable and dedicated to
                                quality, we focus our attention to the importance of quality as well as on constant
                                encouragement to our staff to engage in frequent training programs on new emerging systems,
                                machinery, design and manufacturing methods. Our investments extend further to management
                                system to insure our continuous improvement.</p>
                            <div class="clearfix mgt-30"></div>
                            <img src="/images/blog/detail1.png" class="img-responsive" alt="Highest Quality">
                        </div>
                        <div class="tab-pane fade" id="Renovation">
                            <p>At Isotech we merge our experience, know-how and business integrity with every technical
                                ingredient of each project to deliver unmatched quality at un unprecedented scheduled
                                deadline to guarantee long-term reliability and confidence.</p>
                            <div class="clearfix mgt-30"></div>
                            <img src="/images/blog/3.jpg" class="img-responsive" alt="Long-term Reliability">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/content/what-we-do.jpg" class="img-responsive" alt="Image">
                </div>
                <div class="col-md-8">
                    <div class="mgt-30"></div>
                    <h5>OUR VISION</h5>
                    <p>To expand and spread out to new markets and territories, while setting a standard of excellence that
                        raises the bar when it comes to customer service, industry knowledge and craftsmanship.</p>
                    <hr>
                    <div class="mgt-30"></div>
                    <h5>OUR MISSION</h5>
                    <ul style="margin-left:20px">
                        <li>To maintain highest international standards in production, installation and maintenance and
                            continuously seek innovative solutions in Production Methods and improve product lines.</li>
                        <li>Safeguard our integrity and honesty as well as promoting our partnerships with our customers,
                            suppliers, developers and consultants, both locally and internationally.</li>
                        <li>Pursue the pinnade commitment levels in every task we undertake for each business entity we deal
                            with.</li>
                    </ul>
                    <br>
                    <a href="{{ route('contact_path') }}" class="ot-btn border-dark">Contact us</a>
                </div>
            </div>

            <div class="clearfix mgt-60"></div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">OUR VALUES</h3>
                </div>
                <div class="col-md-4">
                    <div class="icon-box-inline">
                        <img src="/images/icon/quality.png" class="img-responsive" alt="Image">
                        <h5>Quality</h5>
                        <p>is one of the most important factors of success thus we sustain the strictest quality control.
                        </p>
                    </div>
                    <div class="icon-box-inline">
                        <img src="/images/icon/reliability.png" class="img-responsive" alt="Image">
                        <h5>Reliability</h5>
                        <p>is achieved when our products perform as intended and function adequately for a long period of
                            time in any environment without failure.</p>
                    </div>
                    <div class="icon-box-inline">
                        <img src="/images/icon/teamwork.png" class="img-responsive" alt="Image">
                        <h5>Teamwork</h5>
                        <p>is an essential ingredient in management and production workflow.</p>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="clearfix mgt-150"></div>
                    <img src="/images/content/values.png" class="img-responsive mg-auto">
                </div>
                <div class="col-md-4">
                    <div class="icon-box-inline">
                        <img src="/images/icon/communication.png" class="img-responsive" alt="Image">
                        <h5>Communication</h5>
                        <p>is essential to well perform from management, all the way to accomplish advanced tasks relating
                            to sales, services, and production.</p>
                    </div>
                    <div class="icon-box-inline">
                        <img src="/images/icon/objective.png" class="img-responsive" alt="Image">
                        <h5>Consciousness</h5>
                        <p>in regularly engaging in regular seminars, conferences and subscribing to training institutions.
                        </p>
                    </div>
                    <div class="icon-box-inline">
                        <img src="/images/icon/world.png" class="img-responsive" alt="Image">
                        <h5>Responsibility</h5>
                        <p>in various aspects such as social, economic, and environmental.</p>
                    </div>
                </div>
                <div class="col-md-4 visible-sm visible-xs">
                    <img src="/images/content/values.png" class="img-responsive">
                </div>
            </div>

            <img src="images/content/about.jpg" class="img-responsive mgt-30" alt="Image">

        </div>
    </section>
    <!-- /Experience Year -->

    <div class="clearfix mgt-60"></div>
@endsection
