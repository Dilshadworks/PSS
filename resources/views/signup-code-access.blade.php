@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-alerts text-center mt-lg-0 mt-5">
        <div class="container">
            <div class="circle">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-3 pt-lg-2 pt-3 justify-content-center">
                <h3 class="primary_color_text tag-title m-0 in-center">Access</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-2 in-center">Code</h3>
            </div>

            <div class="form-width text-center">
                <form class="contact-form widget-shadow form-md-padding accesscode-form widget-contact">
                    <input type="hidden" name="dvc" class="dvc">
                    <input type="hidden" name="osnm" class="osnm">
                    <input type="hidden" name="eml" value="{{isset($_GET['email'])?$_GET['email']:''}}">
                    <p class="form-text-color text-center pb-4 d-block in-center">Enter the access code we just sent to your e-mail/phone</p>
                    <div class="enter-code">
                        <input type="text" class="form-control text-center error-form accesscode-error" id="exampleInputEmail " name="accesscode" placeholder="Access Code">
                        <div class="accesscode-error erro-dev"></div>
                    </div>
                    <div class="text-center d-inline-block mt-4 mb-lg-4 mb-2">
                        <button type="button" class="btn text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg accesscode-btn">Confirm</button>
                    </div>
                    <h4 class="resend-message"></h4>
                    <p class="form-text-color text-center in-center m-0">Didn’t get the access code?<a href="#" class="primary_color_text ps-1 bold redo-btn">Resend it</a></p>

                </form>
            </div>
            </div>
    </section>
</main>
@endsection
@section('script')
<script type="text/javascript">
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

    var browser = detectBrowser();
    $('.dvc').val(browser);
    var osname = detectWindow();
    $('.osnm').val(osname);
    var website = '<?php echo env('REDIRECT_DOMAIN'); ?>';
    $(document).ready(
        function() {
            $('.error-form').keypress(function(e) {
                var key = e.which;

                if (key == 13) {
                    event.preventDefault();
                    $('.error-form').removeClass('is-invalid');
                    $('.erro-dev').html('');
                    accesscode = $('input[name="accesscode"]').val();

                    if (accesscode == '') {

                        $('input[name="accesscode"]').addClass('is-invalid');
                        $('.accesscode-error').html('<div class="invalid-feedback">Access code is required.</div>');
                        $('.invalid-feedback').show();
                        return false;
                    } else {
                        $('input[name="accesscode"]').addClass('is-valid');
                    }


                    form_data = $('.accesscode-form').serialize();
                    $('.accesscode-btn').html('Loading ..');
                    $.ajax({
                        url: website + "api/confirm-access-code",
                        type: "post",

                        data: form_data,
                        beforeSend: function() {

                        },
                        error: function(response) {
                            console.log(response.message);

                        },
                        success: function(response) {
                            var obj = jQuery.parseJSON(response);
                            $('.accesscode-btn').html('Confirm');
                            if (obj.code == 500) {
                                $('input[name="accesscode"]').removeClass('is-invalid');
                                $('input[name="accesscode"]').addClass('is-invalid');
                                $('.accesscode-error').html('<div class="invalid-feedback">' + obj.message + '</div>');
                                $('.invalid-feedback').show();
                                return false;
                            }
                            window.location.replace("/signup-success-free-plan");
                        }
                    });

                }
            });
            $(document).on('click', '.accesscode-btn', function() {
                $('.error-form').removeClass('is-invalid');
                $('.erro-dev').html('');
                accesscode = $('input[name="accesscode"]').val();


                if (accesscode == '') {

                    $('input[name="accesscode"]').addClass('is-invalid');
                    $('.accesscode-error').html('<div class="invalid-feedback">Access code is required.</div>');
                    $('.invalid-feedback').show();
                    return false;
                } else {
                    $('input[name="accesscode"]').addClass('is-valid');
                }


                form_data = $('.accesscode-form').serialize();
                $('.accesscode-btn').html('Loading ..');
                $.ajax({
                    url: website + "api/confirm-access-code",
                    type: "post",

                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {
                        console.log(response.message);

                    },
                    success: function(response) {
                        var obj = jQuery.parseJSON(response);
                        $('.accesscode-btn').html('Confirm');
                        if (obj.code == 500) {
                            $('input[name="accesscode"]').removeClass('is-invalid');
                            $('input[name="accesscode"]').addClass('is-invalid');
                            $('.accesscode-error').html('<div class="invalid-feedback">' + obj.message + '</div>');
                            $('.invalid-feedback').show();
                            return false;
                        }
                        window.location.replace("/signup-success-free-plan");
                    }
                })

            });
            $(document).on('click', '.redo-btn', function(event) {

                event.preventDefault();
                $('.error-form').removeClass('is-invalid');
                $('.erro-dev').html('');

                form_data = $('.accesscode-form').serialize();
                $('.redo-btn').html('Loading ..');
                $.ajax({
                    url: website + "api/redo-access-code",
                    type: "post",

                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {
                        console.log(response.message);

                    },
                    success: function(response) {
                        var obj = jQuery.parseJSON(response);
                        $('.redo-btn').html('Resend it');
                        if (obj.code == 500) {

                            $('.resend-message').html('<div class="invalid-feedback">' + obj.message + '</div>');
                            $('.vinvalid-feedback').show();
                            return false;
                        }
                        $('.resend-message').html('<div class="valid-feedback">Successfully Sent</div>');
                        $('.valid-feedback').show();
                        //window.location.replace("/signup-success-free-plan");
                    }
                })

            })


        }
    );
</script>
@endsection