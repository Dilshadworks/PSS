@extends('layouts.app')
<!-- Event snippet for Contact Support conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-375468631/MkM7CJHI5vgCENfkhLMB'}); </script>
@section('content')
<!-- ==== Page main_content Content Start === -->
<main class="mt-3 get-support">
    <section class="widget-contact position-relative" id="contact-us">
        <div class="container">
            <div class="contact-form widget-shadow c_support">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="circle ">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                        </div>
                        <div class="d-flex align-items-center justify-content-lg-start justify-content-center pb-4 pt-2">
                            <h3 class="secondary_color_text tag-title m-0 fw-500 in-center">Contact</h3>
                            <h3 class="primary_color_text tag-title m-0 ps-2 fw-500 in-center">Support</h3>
                        </div>
                        <div class="paragraph-desktop">
                            <p class="linehight_19 font_16 grey pe-5 roboto in-center">Please fill out this form and one of our customer support agents will follow-up and promptly assist you.</p>
                            <p class="linehight_19 font_16 grey pe-5 roboto in-center">You will receive an email from our support system after you submit this form. Once you receive the acknowledgement email, you can reply to that email and continue the conversation with the support agent.</p>
                        </div>
                        <img src="/images/content-s-attr.svg" class="img-fluid m-auto desktop-ottr" alt="attr">
                        <img src="/images/ottr-get-demo-mobile.svg" class="img-fluid m-auto mobile-ottr" alt="attr mobile">
                        <div class="paragraph-mobile pt-5">
                            <p class="linehight_19 font_16 grey pe-5 roboto in-center m-color">Please fill out this form and one of our customer support agents will follow-up and promptly assist you.</p>
                            <p class="linehight_19 font_16 grey pe-5 roboto in-center m-color">You will receive an email from our support system after you submit this form. Once you receive the acknowledgement email, you can reply to that email and continue the conversation with the support agent.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-md-5 mt-3">
                        <form class="mt-5 get-support-form">
                            {{ csrf_field() }}
                            <div class="row g-2">
                                <div class="col-12 mb-3">
                                    <label for="exampleInputFulltName" class="form-label linehight_19 font_16 grey ps-4">Full
                                        Name</label>
                                    <input type="Fname" class="form-control ps-4 erro-class" id="exampleInputFulltName" aria-describedby="NameHelp" name="first_name" placeholder="Full Name" required>
                                    <div class="erro-dev ps-4  first_name-error"></div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputEmail" class="form-label linehight_19 font_16 grey ps-4 erro-class">Email</label>
                                    <input type="email" class="form-control ps-4 erro-class" id="exampleInputEmail" name="email" placeholder="Email" required>
                                    <div class="erro-dev  email-error ps3"></div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputPhone" class="form-label linehight_19 font_16 grey ps-4">Mobile
                                        Phone</label>
                                    <input type="text" class="form-control ps-4 erro-class" id="exampleInputPhone" aria-describedby="PhoneHelp" placeholder="Mobile Phone" name="mobile" required>
                                    <div class="erro-dev  mobile-error ps3"></div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group" id="categeory">
                                        <label for="exampleInputfrequency" class="form-label linehight_19 font_16 grey ps-4">Frequency</label>
                                        <select class="js-example-placeholder-single form-control erro-class" id="" name="frequency" style="width: 100%">
                                            <option value="-2"></option>
                                            <option value="easily_reproducible">Easily Reproducible</option>
                                            <option value="one-time">One Time</option>
                                            <option value="sometimes">Intermittent</option>
                                            <option value="not_applicable">Not Applicable</option>
                                        </select>
                                        <div class="frequency-error erro-dev ps-3"></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="form-label linehight_19 font_16 grey ps-4">Description</label>
                                        <textarea class="form-control p-4 erro-class" id="exampleFormControlTextarea1" rows="5" name="description" placeholder="Description"></textarea>
                                        <div class="description-error erro-dev ps-3"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-md-end justify-content-center">
                                <button type="button" class="btn text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg create-ticket">Create Ticket</button>
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
    $(document).ready(
        function() {



            $(document).on('click', '.create-ticket', function() {



                $('.erro-dev').html('');
                $('.erro-class').removeClass('is-invalid');
                first_name = $('input[name="first_name"]').val();
                frequency = $('select[name=frequency] option').filter(':selected').val();
                mobile = $('input[name="mobile"]').val();
                email = $('input[name="email"]').val();
                description = $('textarea[name="description"]').val();

                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var phoneformat = /^\+?(\d{1,3}[\s-]?)?(\d[\s-]?)?[\(\[\s-]{0,2}?\d{2,4}[\)\]\s-]{0,2}?\d{3,4}[\s-]?(\d{3,5})?$/i;
                if (first_name == '') {
                    $('input[name="first_name"]').addClass('is-invalid');
                    $('.first_name-error').html('<div class="invalid-feedback" id="">Full Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 100);
                    return false;
                } else {
                    $('input[name="first_name"]').addClass('is-valid');
                }

                if (email == '') {
                    $('input[name="email"]').addClass('is-invalid');
                    $('.email-error').html('<div class="invalid-feedback" id="">Email is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 200);
                    return false;
                }
                if (!email.match(mailformat)) {
                    $('input[name="email"]').addClass('is-invalid');
                    $('.email-error').html('<div class="invalid-feedback" id="">Add a correct email address.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="email"]').addClass('is-valid');
                }

                if (mobile == '') {
                    $('input[name="mobile"]').addClass('is-invalid');
                    $('.mobile-error').html('<div class="invalid-feedback" id="">Phone is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 400);
                    return false;
                }
                if (!mobile.match(phoneformat)) {
                    $('input[name="mobile"]').addClass('is-invalid');
                    $('.mobile-error').html('<div class="invalid-feedback" id="">Enter a valid Phone.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 400);
                    return false;
                } else {
                    $('input[name="mobile"]').addClass('is-valid');
                }

                if (frequency == '-2') {
                    $('select[name=frequency]').addClass('is-invalid set-icon');
                    $('.frequency-error').html('<div class="invalid-feedback" id="">Frequency is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 600);
                    return false;

                } else {
                    $('select[name=frequency]').addClass('is-valid');
                }

                if (description == '') {
                    $('input[name=description]').addClass('is-invalid');
                    $('.description-error').html('<div class="invalid-feedback" id="">Description is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 600);
                    return false;

                } else {
                    $('input[name=description]').addClass('is-valid');
                }
                $('.create-ticket').html('Loading..');
                form_data = $('.get-support-form').serialize();
                $.ajax({
                    url: "/add-ticket",
                    type: "post",
                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {
                        // window.location.replace("/contact-support-confirmation");
                    },
                    success: function(response) {

                        window.location.replace("/contact-support-confirmation");

                    }
                });

            })
        }
    );
</script>
@endsection
