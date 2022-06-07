@extends('layouts.app')
<!-- Event snippet for Get Demo Lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-375468631/73T7CMHL5vgCENfkhLMB'}); </script>
@section('content')
<!-- ==== Page main_content Content Start === -->
<main class="mt-3 page-get-demo">
    <section id="contact-us">
        <div class="container">
            <div class="contact-form widget-shadow c_support widget-contact">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="circle">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                        </div>
                        <div class="d-flex align-items-center justify-content-lg-start justify-content-center pb-4 pt-2">
                            <h3 class="secondary_color_text tag-title m-0 fw-500 in-center">Get</h3>
                            <h3 class="primary_color_text tag-title m-0 ps-2 fw-500 in-center">Demo</h3>
                        </div>
                        <div class="paragraph-desktop">
                            <p class="dark_gray font_16 linehight_19 pe-5 roboto in-center">Please complete and submit this form to receive an email with our demo video. 
                            </p>
                            <p class="dark_gray font_16 linehight_19 pe-5 roboto in-center">If you have any questions, please do not hesitate to reach out to our support team. You can also request for a demo session with one of our Customer Success team members.
                            </p>
                        </div>
                        <img src="/images/get-demo-web-ottr.svg" class="img-fluid m-auto desktop-ottr" alt="attr">
                        <img src="/images/otter-get-demo-mobile.svg" class="img-fluid m-auto mobile-ottr" alt="attr mobile">
                        <div class="paragraph-mobile pt-5">
                            <p class="dark_gray font_16 linehight_19 pe-5 roboto in-center pb-4">Please complete and submit this form to receive an email with our demo video.  
                            </p>
                            <p class="dark_gray font_16 linehight_19 pe-5 roboto in-center">If you have any questions, please do not hesitate to reach out to our support team. You can also request for a demo session with one of our Customer Success team members.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-md-5 mt-3">
                        <form class="mt-5 get-demo-form">
                            {{ csrf_field() }}
                            <input type="hidden" name="DEVICE" class="DEVICE">
                            <input type="hidden" name="UTCOFFSET" class="UTCOFFSET">
                            <div class="row g-2">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputFirstName" class="form-label grey font_16 linehight_19 ps-4 ">First Name</label>
                                    <input type="text" class="form-control ps-4 erro-class" id="exampleInputFirstName" aria-describedby="NameHelp" name="FNAME" placeholder="First Name" required>
                                    <div class="FNAME-error erro-dev ps-3"></div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputLastName" class="form-label grey font_16 linehight_19 ps-4 erro-class">Last Name</label>
                                    <input type="text" class="form-control ps-4 erro-class" id="exampleInputLastName" name="LNAME" placeholder="Last Name" required>
                                    <div class="LNAME-error erro-dev ps-3"></div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputEmail" class="form-label grey font_16 linehight_19 ps-4 erro-class">Email</label>
                                    <input type="email" class="form-control ps-4 erro-class" id="exampleInputEmail" name="EMAIL" placeholder="Email" required>
                                    <div class="EMAIL-error erro-dev ps-3"></div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputBusiness" class="form-label grey font_16 linehight_19 ps-4">Business Name</label>
                                    <input type="text" class="form-control ps-4 erro-class" id="exampleInputBusiness" name="COMPNAME" placeholder="Business Name" required>
                                    <div class="COMPNAME-error erro-dev ps-3"></div>
                                </div>

                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputPhone" class="form-label grey font_16 linehight_19 ps-4">Mobile Phone</label>
                                    <input type="text" class="form-control ps-4 erro-class" id="exampleInputPhone" aria-describedby="PhoneHelp" name="PHONE" placeholder="Mobile Phone" required>
                                    <div class="PHONE-error erro-dev ps-3"></div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group" id="categeory">
                                        <label for="exampleInputClient" class="form-label grey font_16 linehight_19 ps-4">Client Count</label>
                                        <select class="js-example-placeholder-single form-control erro-class" id="" name="CLIENTCNT" style="width: 100%">
                                            <option value="-2"></option>
                                            <option value="0-20">0-20</option>
                                            <option value="21-40">21-40</option>
                                            <option value="41-80">41-80</option>
                                            <option value="81-200">81-200</option>
                                            <option value="200+">200+</option>
                                        </select>
                                        <div class="CLIENTCNT-error erro-dev ps-3"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group" id="categeory">
                                        <label for="review" class="form-label ps-3 grey font_16 linehight_19 ps-4">How Did You Hear About Us</label>
                                        <select class="js-example-placeholder-single form-control erro-class" id="exampleInputPhone" name="SOURCE" style="width: 100%">
                                            <option value="-2"></option>
                                            <option value="Search Engine">Business Contact</option>
                                            <option value="Family & Friends">Family & Friends</option>
                                            <option value="Flyers">Flyers</option>
                                            <option value="Podcast">Podcast</option>
                                            <option value="Search Engine">Search Engine</option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Video Sharing">Video Sharing</option>
                                            <option value="Other">Other </option>
                                        </select>


                                        <div class="SOURCE-error erro-dev ps-3"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4 d-flex align-items-center justify-content-md-end justify-content-center">
                                <button type="button" class="btn text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg create-ticket get-demo-submit ">Request Demo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('script')
<script>
    function detectWindow() {
        var detectOS = "Unknown OS";

        if (navigator.appVersion.indexOf("Win") != -1)
            detectOS = "Windows";

        if (navigator.appVersion.indexOf("Mac") != -1)
            detectOS = "MacOS";

        if (navigator.appVersion.indexOf("Linux") != -1)
            detectOS = "Linux";
        return detectOS;

    }

    function detectBrowser() {
        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
            return 'Opera';
        } else if (navigator.userAgent.indexOf("Chrome") != -1) {
            return 'Chrome';
        } else if (navigator.userAgent.indexOf("Safari") != -1) {
            return 'Safari';
        } else if (navigator.userAgent.indexOf("Firefox") != -1) {
            return 'Firefox';
        } else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) {
            return 'IE'; //crap
        } else {
            return 'Unknown';
        }
    }
    $(document).ready(
        function() {

            $('.DEVICE').val(detectWindow());

            var date1 = new Date();
            date1 = date1.getTimezoneOffset();
            var date1 = utcformat(date1);
            $('.UTCOFFSET').val(date1);

            $(document).on('click', '.get-demo-submit', function() {

                $('.erro-dev').html('');
                $('.erro-class').removeClass('is-invalid');

                FNAME = $('input[name="FNAME"]').val();
                LNAME = $('input[name="LNAME"]').val();
                email = $('input[name="EMAIL"]').val();
                COMPNAME = $('input[name="COMPNAME"]').val();
                PHONE = $('input[name="PHONE"]').val();
                phone = $('input[name="PHONE"]').val();
                CLIENTCNT = $('select[name=CLIENTCNT] option').filter(':selected').val();
                SOURCE = $('select[name=SOURCE] option').filter(':selected').val();
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var phoneformat = /^\+?(\d{1,3}[\s-]?)?(\d[\s-]?)?[\(\[\s-]{0,2}?\d{2,4}[\)\]\s-]{0,2}?\d{3,4}[\s-]?(\d{3,5})?$/i;
                if (FNAME == '') {
                    $('input[name="FNAME"]').addClass('is-invalid');
                    $('.FNAME-error').html('<div class="invalid-feedback" id="">First Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 100);
                    return false;
                } else {
                    $('input[name="FNAME"]').addClass('is-valid');
                }
                if (LNAME == '') {
                    $('input[name="LNAME"]').addClass('is-invalid');
                    $('.LNAME-error').html('<div class="invalid-feedback" id="">Last Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 100);
                    return false;
                } else {
                    $('input[name="LNAME"]').addClass('is-valid');
                }
                if (email == '') {
                    $('input[name="EMAIL"]').addClass('is-invalid');
                    $('.EMAIL-error').html('<div class="invalid-feedback" id="">Email is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 200);
                    return false;
                }
                if (!email.match(mailformat)) {
                    $('input[name="EMAIL"]').addClass('is-invalid');
                    $('.EMAIL-error').html('<div class="invalid-feedback" id="">Add a correct email address.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="EMAIL"]').addClass('is-valid');
                }
                if (COMPNAME == '') {
                    $('input[name="COMPNAME"]').addClass('is-invalid');
                    $('.COMPNAME-error').html('<div class="invalid-feedback" id="">Business Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 100);
                    return false;
                } else {
                    $('input[name="COMPNAME"]').addClass('is-valid');
                }
                if (PHONE == '') {
                    $('input[name="PHONE"]').addClass('is-invalid');
                    $('.PHONE-error').html('<div class="invalid-feedback" id="">Phone is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 400);
                    return false;
                }
                if (!phone.match(phoneformat)) {
                    $('input[name="PHONE"]').addClass('is-invalid');
                    $('.PHONE-error').html('<div class="invalid-feedback" id="">Enter a valid Phone.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 400);
                    return false;
                } else {
                    $('input[name="PHONE"]').addClass('is-valid');
                }

                if (CLIENTCNT == '-2') {
                    $('select[name=CLIENTCNT]').addClass('is-invalid set-icon');
                    $('.CLIENTCNT-error').html('<div class="invalid-feedback" id="">Client Count is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 600);
                    return false;

                } else {
                    $('select[name=CLIENTCNT]').addClass('is-valid');
                }

                if (SOURCE == '-2') {
                    $('select[name=SOURCE]').addClass('is-invalid');
                    $('.SOURCE-error').html('<div class="invalid-feedback" id="">Source is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 600);
                    return false;

                } else {
                    $('select[name=SOURCE]').addClass('is-valid');
                }
                $('.get-demo-submit').html('Loading...');
                form_data = $('.get-demo-form').serialize();
                $.ajax({
                    url: "/mailchimp-suscribe",
                    type: "post",
                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {

                    },
                    success: function(response) {

                        window.location.replace("/getdemo-confirmation");

                    }
                });

            })
        }
    );
</script>
@endsection