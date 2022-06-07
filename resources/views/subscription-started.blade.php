@extends('layouts.app')
@section('header_scripts')
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-375468631"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-375468631');
</script>

<!-- Event snippet for Paid Subscriptions conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-375468631/TVK9CLPD6PgCENfkhLMB'}); </script>
@endsection
@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-alerts mt-5">
        <div class="container text-center">
            <div class="circle">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="primary_color_text tag-title m-0 in-center">Subscription</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-2 in-center">Started</h3>
            </div>

            <div class="widget-width text-center">
                <form class="contact-form widget-shadow form-md-padding widget-contact">
                    <div class="c-circle rounded-circle secondary_color_bg d-flex align-items-center m-auto justify-content-center">
                        <img class="img-fluid" src="/images/success.svg" alt="success">
                    </div>
                    <small class="linehight_19 font_16 dark_gray text-center py-4 d-block in-center">Click continue to start your journey of improving your pool business</small>
                    <div class="text-center d-inline-block">
                        <a href="{{env('REDIRECT_DOMAIN')}}admin" type="button" class="btn text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg">Continue</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
