@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-contact position-relative">
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
        </div>
        <div class="form-width text-center">
            <form class="contact-form widget-shadow form-md-padding">
                <img class="img-fluid rounded-circle secondary_color_bg p-2" src="/images/success.svg" alt="success">
                <p class="form-text-color text-center py-4 d-block in-center ">Click continue to start your journey of improving your pool business</p>
                <div class="text-center d-inline-block">
                <button type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg">Continue</button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
