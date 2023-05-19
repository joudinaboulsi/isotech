@extends('layouts.app')

@section('content')
    <section class="boxed no-padding bg-img " style="background-image: url(/images/bg/bg-contact-2.jpg);">
        <div class="sub-header depen-on-img">
            <img src="/images/bg/bg-about.jpg" class="img-responsive" alt="Image">
            <div class="sub-header-inner center-center">
                <h2>CONTACT US</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home_path') }}">HOME</a>
                    </li>
                    <li class="active">CONTACT</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /subheader -->

    <section class="pdb-0">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3>STAY IN TOUCH</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
                <section class="mgt-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comments-area">
                                    <h2>SEND US A MESSAGE</h2>
                                    {!! Form::open(['route' => 'contact_path', 'id' => 'contact_form', 'class' => 'contact-form']) !!}
                                    <div class="col-md-4 col-sm-6">
                                        <input class="contact-input" placeholder="Name" type="text" name="name"
                                            id="name">
                                        <input class="contact-input" name="phone" id="phone"
                                            placeholder="Phone Number" type="text">
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <input class="contact-input" name="email" id="email" placeholder="E-Mail"
                                            type="email">
                                        <input class="contact-input" name="subject" id="subject" placeholder="Subject"
                                            type="text">
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <textarea class="textarea-contact" rows="4" name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                            <input type="hidden" class="hiddenRecaptcha required show-error-msg"
                                                name="hiddenRecaptcha" id="hiddenRecaptcha">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-4 ">
                                        <button type="submit" class="ot-btn border-dark btn-contact">Send Message</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-top-right w-680"></div>
                </section>
                <div class="mgt-60">
                    <div class="col-md-2 col-xs-6">
                        <div class="icon-box-center">
                            <div class="box-icon">
                                <img src="/images/icon/mail2.png" class="img-responsive" alt="Image">
                            </div>
                            <h5>E-MAIL</h5>
                            <a href="mailto:info@isotechlb.com">info@isotechlb.com</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="icon-box-center">
                            <div class="box-icon">
                                <img src="/images/icon/phone2.png" class="img-responsive" alt="Image">
                            </div>
                            <h5>PHONE</h5>
                            <a href="tel:+9615361393">+961 5 361 393</a><br>
                            <a href="tel:+9615361394">+961 5 361 394</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="icon-box-center">
                            <div class="box-icon">
                                <img src="/images/icon/map2.png" class="img-responsive" alt="Image">
                            </div>
                            <h5>ADDRESS</h5>
                            <p>Qornayel, Lebanon</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="icon-box-center">
                            <div class="box-icon">
                                <img src="/images/icon/map2.png" class="img-responsive" alt="Image">
                            </div>
                            <h5>Working hours</h5>
                            <p>8:00 am to 5:00 pm</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="icon-box-center">
                            <div class="box-icon">
                                <img src="/images/icon/map2.png" class="img-responsive" alt="Image">
                            </div>
                            <h5>BRANCHES</h5>
                            <p>Lebanon , KSA </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-6">
                        <div class="icon-box-center">
                            <div class="box-icon">
                                <img src="/images/icon/socials.png" class="img-responsive" alt="Image">
                            </div>
                            <h5>SOCIALS</h5>
                            <a href="https://www.facebook.com/isotechlb/" target="_blank"><i class="fa fa-facebook"
                                    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;</a>
                            <a href="https://www.instagram.com/isotech_lebanon/" target="_blank"><i
                                    class="fa fa-instagram" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;</a>
                            <a href="https://lb.linkedin.com/company/isotech-co" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>





    <section class="boxed pdb-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.6315653365173!2d35.72496921520969!3d33.84761098066196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f3b014658ff67%3A0x22edd0c604b6e5ef!2sIsotech!5e0!3m2!1sen!2slb!4v1637852707773!5m2!1sen!2slb"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- /contact form -->
@endsection
