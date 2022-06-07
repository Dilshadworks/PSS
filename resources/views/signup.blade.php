@extends('layouts.app');
<!-- Event snippet for Paid Subscriptions conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-375468631/TVK9CLPD6PgCENfkhLMB'}); </script>
@section('content')
<!-- ==== Page Sign_Up Start === -->
<main>
    <article class="page-sign-up mt-4">
        <main class="signup-tab-form">
            <div class="container">
                <div class="circle">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                </div>
                <div class="d-flex align-items-center pb-4 pt-2 justify-content-center justify-content-lg-start">
                    <h3 class="primary_color_text tag-title m-0 in-center">Sign</h3>
                    <h3 class="secondary_color_text tag-title m-0 ps-1 in-center">Up</h3>
                </div>
                <!-- ==== Page Sign_Up(Tabs_Button) Start === -->
                <ul class="nav nav-pills signup-tab my-4 d-flex justify-content-between signup-form-width tilt-line" id="pills-tab" role="tablist">
                    <li class="nav-item border__item border__item-1" role="presentation">
                        <article class="nav-item--button">
                        <button class="nav-link active1 rounded-circle dark_gray widget-subtitle" id="pills-home-tab" data-bs-toggle="pill"  type="button" role="tab" aria-controls="pills-home" aria-selected="true" data-plan="pills-home">1</button>
                        <p class="b-text linehight_19 font_16 mobile-font text-center dark_gray pt-3 d-block fw-bold active">Setting Up Your Account</p>
                        </article>
                    </li>
                    <li class="nav-item border__item border__item-2" role="presentation">
                    <article class="nav-item--button">
                        <button class="nav-link rounded-circle dark_gray widget-subtitle" id="pills-profile-tab" data-bs-toggle="pill"  type="button" role="tab" aria-controls="pills-profile" aria-selected="false" data-plan="pills-profile">2</button>
                        <p class="b-text linehight_19 font_16 text-center dark_gray pt-3 d-block fw-bold mobile-font">Choose <br />Your Plan</p>
                    </article>
                    </li>
                    <li class="nav-item " role="presentation">
                    <article class="nav-item--button">
                        <button class="nav-link rounded-circle dark_gray widget-subtitle" id="pills-contact-tab" data-bs-toggle="pill"  type="button" role="tab" aria-controls="pills-contact" aria-selected="false" data-plan="pills-contact">3</button>
                        <p class="b-text linehight_19 font_16 text-center dark_gray pt-3 d-block fw-bold mobile-font">Payment</p>
                    </article>
                    </li>
                </ul>
                <!-- ==== Page Sign_Up(Tabs_Content) Start === -->
                <form class="basic-info-form">
                    <div class="tab-content mt-5" id="pills-tabContent">

                        <!-- ==== Page Sign_Up(tabs_content_1) Start === -->

                        {{ csrf_field() }}
                        <input type="hidden" class="planid" name="planid" value="startupspecial_dev">
                        <input type="hidden" name="zip" id="postcode">
                        <input type="hidden" name="secret" class="secret">
                        <input type="hidden" name="planname" class="planname">
                        <input type="hidden" name="plan_cycle" class="plan_cycle" value="month">
                        <input type="hidden" name="coupon" class="coupon_verified" value="no">
                        <input type="hidden" name="amount" class="amount">
                        <input type="hidden" name="device" class="device">
                        <input type="hidden" name="osname" class="osname">
                        <input type="hidden" name="utcoffset" class="utcoffset">
                        <div class="alert alert-danger error-message"></div>
                        <div class="tab-pane fade show active w-50 width-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="contact-form widget-shadow widget-contact">
                                <div class="loading-text"></div>
                                <div class="row">
                                    <!-- (First_Name) -->
                                    <div class="col-6 col-md-6 mb-4">
                                        <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3">First Name</label>
                                        <input required type="text" class="form-control linehight_19 font_16  ps-3 erro-class" id="exampleInputFirstName" aria-describedby="NameHelp" name="fname" placeholder="First Name">
                                        <div class="fname-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Last_Name) -->
                                    <div class="col-6 col-md-6 mb-4">
                                        <label for="exampleInputLastName" class="form-label linehight_19 font_16 grey ps-3 ">Last Name</label>
                                        <input required type="text" class="form-control linehight_19 font_16  ps-3 erro-class" id="exampleInputLastName" name="lname" placeholder="Last Name">
                                        <div class="lname-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Business_Name) -->
                                    <div class="col-12 mb-4">
                                        <label for="exampleInputBusiness" class="form-label linehight_19 font_16 grey ps-3">Business Name</label>
                                        <input required type="text" class="form-control linehight_19 font_16 font_16 ps-3 erro-class" id="exampleInputBusiness" name="cmpname" placeholder="Business Name">
                                        <div class="cmpname-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Address) -->
                                    <div class="col-12 mb-4">
                                        <label for="exampleInputaddress" class="form-label linehight_19 font_16 grey ps-3">Address</label>
                                        <input required type="text" class="form-control linehight_19 font_16 font_16 ps-3 controls erro-class" id="pac-input" name="address" placeholder="Street Address" autocomplete="off">
                                        <div class="address-error erro-dev ps-3"></div>

                                    </div>
                                    <!-- (City) -->
                                    <div class="col-6 col-md-6 mb-4">
                                        <label for="exampleInputCity" class="form-label linehight_19 font_16 grey ps-3">City</label>
                                        <input required type="text" class="form-control linehight_19 font_16 font_16 ps-3 erro-class" id="locality" aria-describedby="NameHelp" name="city" placeholder="City">
                                        <div class="city-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (State/Province) -->
                                    <div class="col-6 col-md-6 mb-4">
                                        <label for="exampleInputState" class="form-label linehight_19 font_16 grey ps-3">State/Province</label>
                                        <input required type="text" class="form-control linehight_19 font_16 font_16 ps-3 erro-class erro-class" id="state" aria-describedby="NameHelp" name="state" placeholder="State/Province">
                                        <div class="state-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Country) -->
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Country</label>
                                            <input required type="text" class="form-control linehight_19 font_16 font_16 ps-3 erro-class" id="country" aria-describedby="NameHelp" name="country" placeholder="Country">
                                            <div class="country-error erro-dev ps-3"></div>
                                        </div>
                                    </div>
                                    <!-- (Mobile_Number) -->
                                    <div class="col-6 col-md-6 mb-4">
                                        <label for="exampleInputPhone" class="form-label linehight_19 font_16 grey ps-3">Mobile Phone</label>
                                        <input required type="text" class="form-control linehight_19 font_16 font_16 ps-3 erro-class" id="exampleInputPhone" aria-describedby="PhoneHelp" name="mobphone" placeholder="Mobile Phone">
                                        <div class="mobphone-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Client_Count) -->
                                    <div class="col-6 col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Client Count</label>
                                            <input type="text" class="form-control clients ps-3 erro-class" id="exampleInputPhone" aria-describedby="PhoneHelp" name="clientcount" placeholder="Client Count">
                                            <div class="clientcount-error erro-dev ps-3"></div>
                                        </div>
                                    </div>
                                    <!-- (Inline_Border) -->
                                    <div class="user-or-pass d-flex align-items-center justify-content-between pt-3 pb-4">
                                        <img class="img-fluid" src="images/line.svg" alt="line">
                                        <small class="linehight_19 font_16 grey fw-500 mobile-font font_1240-center">Username and Password</small>
                                        <img class="img-fluid" src="images/line.svg" alt="line">
                                    </div>
                                    <!-- (Email) -->
                                    <div class="col-12 mb-4">
                                        <label for="exampleInputEmail" class="form-label linehight_19 font_16 grey ps-3">Email</label>
                                        <input required type="email" class="form-control llinehight_19 font_16 font_16 ps-3 erro-class" name="email" id="exampleInputEmail" placeholder="This Will Be Your Username">
                                        <input type="hidden" class="email_exist" name="email_exist">
                                        <div class="email-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Password) -->
                                    <div class="col-12 mb-4">
                                        <label for="exampleInputPassword" class="form-label linehight_19 font_16 grey ps-3">Password</label>
                                        <input required type="password" class="form-control linehight_19 font_16 ps-3  password-taker erro-class" id="exampleInputPassword" name="password" placeholder="Password">
                                        <div class="password-error erro-dev ps-3"></div>
                                    </div>
                                    <!-- (Form-Footer) Desktop -->
                                    <div class="d-lg-flex d-none align-items-center justify-content-between py-4">
                                        <p class="linehight_19 font_16 grey text-center in-center m-0 font_1240-center">Already have an Account?<a href="{{env('REDIRECT_DOMAIN')}}login" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></p>
                                        <button type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg get-basic-info">Next Step</button>
                                    </div>
                                    <!-- (Form-Footer) for Mobile -->
                                    <div class="d-block d-lg-none">
                                        <a href="#" class="text-decoration-none secondary_color_bg text-white get-basic-info b-100-radious next-btn m-auto justify-content-center d-flex align-items-center">Next Step
                                            <!-- <img src="images/next-icon.svg" class="img-fluid caret-icon" alt="User icon"> -->
                                        </a>
                                        <p class="linehight_19 font_16 grey text-center in-center m-0 pt-3">Already have an Account?<a href="{{env('REDIRECT_DOMAIN')}}login" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ==== Page Sign_Up(Tabs_Content_2) Start === -->
                        <div class="tab-pane fade second-tab" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="contact-form widget-shadow widget-contact">
                                <div class="loading-text"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-7">
                                        <h6 class="grey signup-subtitle linehight_34 font_30 fw-500 m-heading in-center font_1240 m-0">1. Choose the plan that’s right for you</h6>
                                        <ul class="p-0 m-0 tab-list">
                                            <li class="d-flex align-items-center">
                                                <img class="img-fluid" src="/images/yes.png" alt="">
                                                <p class=" linehight_19 font_16 grey fst-italic m-0 in-center">No contracts, no commitments</p>
                                            </li>
                                            <li class="d-flex align-items-center pt-3">
                                                <img class="img-fluid" src="/images/yes.png" alt="">
                                                <p class=" linehight_19 font_16 grey fst-italic m-0 in-center">Change or cancel your plan anytime
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- ==== Page Sign_Up(Tabs_Monthly_Anually) Start === -->
                                    <div class="col-sm-12 col-lg-5 d-flex justify-content-lg-end justify-content-center align-items-end">
                                        <div class="button-group">
                                            <ul class="nav nav-pills d-flex justify-content-between align-items-center" id="pills-tab" role="tablist">
                                                <li class="nav-item w-50 cycle_selector" role="presentation" data-cycle="month">
                                                    <button class="nav-link active button left grey font_20 linehight_19 sm-fonts selector-style" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</button>
                                                </li>
                                                <li class="nav-item w-50 cycle_selector" role="presentation cycle_selector" data-cycle="year">
                                                    <button class="nav-link selector-style button right grey font_20 linehight_19 sm-fonts" id="pills-anually-tab" data-bs-toggle="pill" data-bs-target="#" type="button" role="tab" aria-controls="pills-anually" aria-selected="false">Annual</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- ==== Page Sign_Up(Tabs_Content) Tabs_Monthly_Anually Start === -->
                                <div class="tab-content mt-5" id="pills-tabContent">
                                    <!-- ==== Page Sign_Up(Tabs_Content) Monthly Start === -->
                                    <div class="tab-pane fade show active widget-height" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                        <!-- ******** Planing tabs ********* -->
                                        <div class="planing-tabs mb-lg-5 md-0">
                                            <ul class="nav nav-pills d-flex align-items-center justify-content-end mt-lg-5 mt-3" id="pills-tab" role="tablist">
                                                <li class="nav-item tab-item d-flex align-items-center justify-content-end " role="presentation">
                                                    <button class="nav-link active widget-subtitle grey rounded triangle plan-name" id="startup-tab" data-bs-toggle="pill" data-bs-target="#startup" type="button" role="tab" aria-controls="startup" aria-selected="true" data-plan="Startup">Startup</button>
                                                </li>
                                                <li class="nav-item tab-item d-flex align-items-center justify-content-end " role="presentation">
                                                    <button class="nav-link widget-subtitle grey rounded triangle plan-name" id="standard-tab" data-bs-toggle="pill" data-bs-target="#standard" type="button" role="tab" aria-controls="standard" aria-selected="false" data-plan="Standard">Standard</button>
                                                </li>
                                                <li class="nav-item tab-item d-flex align-items-center justify-content-end " role="presentation">
                                                    <button class="nav-link widget-subtitle grey rounded triangle plan-name" id="enterprise-tab" data-bs-toggle="pill" data-bs-target="#enterprise" type="button" role="tab" aria-controls="enterprise" aria-selected="false" data-plan="Enterprise">Enterprise</button>
                                                </li>
                                            </ul>
                                            <!-- ******** Planing tabs Content ********* -->
                                            <div class="tab-content" id="pills-tabContent">
                                                <!-- ** Planing tabs Content_Startup_1 ** -->
                                                <div class="public tab-pane fade show active price-calculation-area" id="startup" role="tabpanel" aria-labelledby="startup-tab">
                                                    <div class="d-flex align-items-center justify-content-between py-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Monthly Price</span></h4>
                                                    </div>
                                                    <div class="data">
                                                        <div class="d-flex justify-content-start d-none d-lg-block">
                                                            <small class="linehight_19 font_16 grey fw-500 ps-5 monthly-price-text">Monthly Price</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <small class="item1 text-center inehight_19 font_16 grey d-block monthly-old"></small>
                                                                <small class="item1 text-center widget-subtitle grey d-block monthly-current">$49.50</small>
                                                                <small class="item1 text-center inehight_19 font_16 grey d-block monthly-text widget-subtitle"></small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="text-center inehight_19 font_16 grey d-block monthly-standarad-old"></small>
                                                                <small class="text-center widget-subtitle grey d-block monthly-standarad-current">$99.00</small>
                                                                <small class="text-center inehight_19 font_16 grey d-block monthly-standarad-text widget-subtitle"></small>

                                                            </div>
                                                            <div class="data--table">
                                                                <small class="text-center widget-subtitle grey d-block w-100">${{env('Per_Client_Price')}} Cents</small>
                                                                <small class="text-center widget-subtitle inehight_19 font_16 grey d-block">Per Client</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between py-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Clients/Properties</span></h4>
                                                    </div>
                                                    <div class="data lighten-gray">
                                                        <div class="d-flex justify-content-start d-none d-lg-block">
                                                            <small class="inehight_19 font_16 grey fw-500 ps-5 ">Clients/Properties</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <small class="item1 linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">11 - 40</small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">41 - 300</small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">301+</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between pt-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Features Included:</span></h4>
                                                    </div>
                                                    <small class="inehight_19 font_12 solid_color  d-block w-100 m-auto text-center py-3 d-block d-lg-none">
                                                        Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                    All software upgrades included</small>
                                                    <div class="data">
                                                        <div class="d-flex justify-content-start flex-column d-none d-lg-block">
                                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                                            <small class="inehight_19 font_16 grey d-block w-xl-75 w-100  ps-5">
                                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                            All software upgrades included</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label class="item2" for="checkbox11"></label>
                                                                </div>
                                                            </div>
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label for="checkbox12"></label>
                                                                </div>
                                                            </div>
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label for="checkbox13"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ** Planing tabs Content_standard_2 ** -->
                                                <div class="public tab-pane price-calculation-area fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                                    <div class="d-flex align-items-center justify-content-between py-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Monthly Price</span></h4>
                                                    </div>
                                                    <div class="data">
                                                        <div class="d-flex justify-content-start d-none d-lg-block">
                                                            <small class="linehight_19 font_16 grey fw-500 ps-5 monthly-price-text">Monthly Price</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <small class="text-center inehight_19 font_16 grey d-block monthly-old"></small>
                                                                <small class="text-center widget-subtitle grey d-block monthly-current">$49.50</small>
                                                                <small class="text-center inehight_19 font_16 grey d-block monthly-text widget-subtitle"></small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="item1 text-center inehight_19 font_16 grey d-block monthly-standarad-old"></small>
                                                                <small class="item1 text-center widget-subtitle grey d-block monthly-standarad-current">$99.00</small>
                                                                <small class="item1 text-center widget-subtitle inehight_19 font_16 grey d-block monthly-standarad-text"></small>

                                                            </div>
                                                            <div class="data--table">
                                                                <small class=" text-center widget-subtitle grey d-block">${{env('Per_Client_Price')}} Cents</small>
                                                                <small class="text-center widget-subtitle inehight_19 font_16 grey d-block widget-subtitle">Per Client</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between py-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Clients/Properties</span></h4>
                                                    </div>
                                                    <div class="data lighten-gray">
                                                        <div class="d-flex justify-content-start d-none d-lg-block">
                                                            <small class="inehight_19 font_16 grey fw-500 ps-5 ">Clients/Properties</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <small class="linehight_19 font_16 grey widget-subtitle text-center d-block fw-500">11 - 40</small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="item1 linehight_19 font_16 grey text-center widget-subtitle d-block fw-500">41 - 300</small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">301+</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between pt-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>All Features Included:</span></h4>
                                                    </div>
                                                    <small class="solid_color inehight_19 font_12 d-block w-100 m-auto text-center py-3 d-block d-lg-none">
                                                        Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                    All software upgrades included</small>
                                                    <div class="data">
                                                        <div class="d-flex justify-content-start flex-column d-none d-lg-block">
                                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                                            <small class="inehight_19 font_16 grey d-block w-xl-75 w-100 ps-5">
                                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                            All software upgrades included</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label for="checkbox15"></label>
                                                                </div>
                                                            </div>
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label class="item2" for="checkbox16"></label>
                                                                </div>
                                                            </div>
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label for="checkbox17"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ** Planing tabs Content_Enterprise_3 ** -->
                                                <div class="public tab-pane price-calculation-area fade" id="enterprise" role="tabpanel" aria-labelledby="enterprise-tab">
                                                    <div class="d-flex align-items-center justify-content-between py-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Monthly Price</span></h4>
                                                    </div>
                                                    <div class="data">
                                                        <div class="d-flex justify-content-start d-none d-lg-block">
                                                            <small class="linehight_19 font_16 grey fw-500 ps-5 monthly-price-text">Monthly Price</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <small class="text-center inehight_19 font_16 grey d-block monthly-old"></small>
                                                                <small class="text-center widget-subtitle grey d-block monthly-current">$49.50</small>
                                                                <small class="text-center inehight_19 font_16 grey d-block monthly-text widget-subtitle"></small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class=" text-center inehight_19 font_16 grey d-block monthly-standarad-old"></small>
                                                                <small class=" text-center widget-subtitle grey d-block monthly-standarad-current">$99.00</small>
                                                                <small class=" text-center inehight_19 font_16 grey d-block monthly-standarad-text widget-subtitle"></small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="item1 text-center widget-subtitle grey d-block">${{env('Per_Client_Price')}} Cents</small>
                                                                <small class="item1 text-center inehight_19 font_16 grey d-block widget-subtitle">Per Client</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between py-4 d-block d-lg-none">
                                                        <h4 class="horizontal-border"><span>Clients/Properties</span></h4>
                                                    </div>
                                                    <div class="data lighten-gray">
                                                        <div class="d-flex justify-content-start d-none d-lg-block">
                                                            <small class="inehight_19 font_16 grey fw-500 ps-5 ">Clients/Properties</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">
                                                            <div class="data--table">
                                                                <small class="linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">11 - 40</small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">41 - 300</small>
                                                            </div>
                                                            <div class="data--table">
                                                                <small class="item1 linehight_19 font_16 grey text-center d-block fw-500 widget-subtitle">301+</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between pt-4 d-block d-lg-none">
                                                        <img class="img-fluid" src="images/small-line.png" alt="line">
                                                        <h4 class="horizontal-border"><span>All Features Included:</span></h4>
                                                        <img class="img-fluid" src="images/small-line.png" alt="line">
                                                    </div>
                                                    <small class="solid_color inehight_19 font_12 d-block w-100 m-auto text-center py-3 d-block d-lg-none">
                                                        Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                    All software upgrades included</small>
                                                    <div class="data">
                                                        <div class="d-flex justify-content-start flex-column d-none d-lg-block">
                                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                                            <small class="inehight_19 font_16 grey d-block w-xl-75 w-100 ps-5">
                                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                            All software upgrades included</small>
                                                        </div>
                                                        <div class="d-flex justify-content-lg-end align-items-center justify-content-between">

                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label for="checkbox18"></label>
                                                                </div>
                                                            </div>
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label for="checkbox19"></label>
                                                                </div>
                                                            </div>
                                                            <div class="data--table">
                                                                <div class="round">
                                                                    <label class="item2" for="checkbox111"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Enterprise Bottom Blue Section (Desktop view) --->
                                                    <div class="d-none d-lg-block p-4 mt-4 primary_color_bg ms-auto d-lg-flex d-block align-items-center justify-content-between rounded widget-last">
                                                        <div class="widget-blue">
                                                            <h5 class="text-white linehight_19 font_16 mb-3 fw-bold mobile-font">Enterprise Client Count</h5>
                                                            <p class="text-white linehight_19 font_16 m-0 mobile-font">Enterprise plans are purchased in increments
                                                            </p>
                                                        </div>
                                                        <div class="form-group w-25 position-relative package-option-desktop" id="categeory">
                                                            <select class="js-example-placeholder-single form-control package-options ps-3 erro-class" name="package-option" style="width: 100%">
                                                                <option value="-2"></option>
                                                                <option value="301">301 Clients <span class="primary_color_text">${{301*env('Per_Client_Price')}}<span></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Enterprise Bottom Blue Section (Mobile view) --->
                                                        <div class="selected-plain primary_color_bg rounded py-4 mt-5 text-center d-block d-lg-none">
                                                            <h5 class="text-white linehight_14 font_12 fw-bold">Enterprise Client Count</h5>
                                                            <p class="text-white in-center pb-2">Enterprise plans are purchased in increments</p>
                                                            <div class="form-group w-75 position-relative m-auto package-option-mobile" id="categeory">
                                                                <select class="js-example-placeholder-single form-control package-options ps-3 erro-class" name="package-option" style="width: 100%">
                                                                    <option value="-2"></option>
                                                                    <option value="301">301 Clients <span class="primary_color_text">${{301*env('Per_Client_Price')}}<span></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <p class="linehight_19 font_16 grey text-end pt-3 d-block d-none d-sm-blcok">Please<a href="/contact-support" class="text-decoration-none primary_color_text bold ps-1">contact us</a> for details and we’ll be
                                                            happy to help.</p>
                                                            <div class="row mt-lg-5 mt- mb-2">
                                                        {{-- <div class="col-12 pb-5 d-block">
                                                <h6 class="grey pb-4 linehight_34 font_30 fw-500 m-0">2. Choose your setup training
                                                </h6>
                                                <p class="linehight_19 font_16 grey s-italic m-0 ps-4">Get tailored and professional help from one of our Onboarding Specialist.</p>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                        <p class="widget-subtitle p-0 m-0 ">Without Setup Training</p>
                                                        <p class="widget-subtitle p-0 m-0 ">$0</p>
                                                    </a>
                                                    <div class="text lighten-gray">
                                                        <p class="font_16 grey" style="line-height: 26px;">
                                                            So you want to go at it alone... not to fear, you can always reach out to our Customer Support team for specific help needs FREE of charge
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                        {{-- <div class="col-sm-12 col-md-6 ">
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item list-group-item-action header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                            <p class="widget-subtitle p-0 m-0 ">One-Time Setup & Training</p>
                                                            <p class="widget-subtitle p-0 m-0 ">$50</p>
                                                        </a>
                                                        <div class="text lighten-gray">
                                                            <p class="font_16 grey" style="line-height: 26px;">Get tailored and professional help from one of our Onboarding Specialist. Including, but not limited to:</p>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Import clients and create routes</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2"> Setup tech’s task items and dosage costs</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Setup recurring invoices and jobs</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Setup visit report templates (email/sms)</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Answer questions and provide guidance, etc.</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">... and more to make you successful with PSS!</p>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==== Page Sign_Up(Tabs_Content) Anually Start === -->
                    <div class="tab-pane fade" id="pills-anually" role="tabpanel" aria-labelledby="pills-anually-tab">
                        <!-- ******** Planing tabs ********* -->
                        <div class="planing-tabs mb-lg-5 mb-0">
                            <ul class="nav nav-pills d-flex align-items-center justify-content-end mt-5" id="pills-tab" role="tablist">
                                <li class="nav-item tab-item d-flex align-items-center justify-content-end" role="presentation">
                                    <button class="nav-link active widget-subtitle grey rounded triangle" id="startup-anually-tab" data-bs-toggle="pill" data-bs-target="#startup-anually" type="button" role="tab" aria-controls="startup" aria-selected="true">Startup</button>
                                </li>
                                <li class="nav-item tab-item d-flex align-items-center justify-content-end" role="presentation">
                                    <button class="nav-link widget-subtitle grey rounded triangle" id="standard-anually-tab" data-bs-toggle="pill" data-bs-target="#standard-anually" type="button" role="tab" aria-controls="standard" aria-selected="false">Standard</button>
                                </li>
                                <li class="nav-item tab-item d-flex align-items-center justify-content-end" role="presentation">
                                    <button class="nav-link widget-subtitle grey rounded triangle" id="enterprise-anually-tab" data-bs-toggle="pill" data-bs-target="#enterprise-anually" type="button" role="tab" aria-controls="enterprise" aria-selected="false">Enterprise</button>
                                </li>
                            </ul>
                            <!-- ******** Planing tabs Content ********* -->
                            <div class="tab-content" id="pills-tabContent">
                                <!-- ** Planing tabs Content_Startup_1 ** -->
                                <div class="tab-pane fade show active" id="startup-anually" role="tabpanel" aria-labelledby="startup-anually-tab">
                                    <div class="data d-flex align-items-center">
                                        <div class="d-flex justify-content-start ">
                                            <small class="linehight_19 font_16 grey fw-500 ps-5">Anually Price</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$49.50</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$44.55</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$99</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$89.1</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center widget-subtitle grey d-block w-100">${{env('Per_Client_Price')}} Cents</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per client</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center lighten-gray">
                                        <div class="d-flex justify-content-start">
                                            <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center">
                                        <div class="d-flex justify-content-start">
                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                            <small class="inehight_19 font_16 grey d-block w-xl-75 w-100 ps-5">
                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                            All software upgrades included</small>
                                        </div>
                                        <div class="data--table">
                                            <div class="round"> <label for="checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round"> <label for="checkbox1"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round" ><label for="checkbox2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ** Planing tabs Content_standard_2 ** -->
                                <div class="tab-pane fade" id="standard-anually" role="tabpanel" aria-labelledby="standard-anually-tab">
                                    <div class="data d-flex align-items-center">
                                        <div class="d-flex justify-content-start ">
                                            <small class="linehight_19 font_16 grey fw-500 ps-5">Anually Price</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$49.50</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$44.55</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$99</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$89.1</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center widget-subtitle grey d-block w-100">${{env('Per_Client_Price')}} Cents</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per client</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center lighten-gray">
                                        <div class="d-flex justify-content-start">
                                            <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center">
                                        <div class="d-flex justify-content-start">
                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                            <small class="inehight_19 font_16 grey d-block w-xl-75 w-100 ps-5">
                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                            All software upgrades included</small>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <label for="checkbox3"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round"> <label for="checkbox4"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round"> <label for="checkbox5"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ** Planing tabs Content_Enterprise_3 ** -->
                                <div class="tab-pane fade" id="enterprise-anually" role="tabpanel" aria-labelledby="enterprise-anually-tab">
                                    <div class="data d-flex align-items-center">
                                        <div class="d-flex justify-content-start ">
                                            <small class="linehight_19 font_16 grey fw-500 ps-5">Anually Price</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$49.50</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$44.55</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$99</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$89.1</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center widget-subtitle grey d-block w-100">${{env('Per_Client_Price')}} Cents</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per client</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center lighten-gray">
                                        <div class="d-flex justify-content-start">
                                            <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center">
                                        <div class="d-flex justify-content-start">
                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                            <small class="inehight_19 font_16 grey d-block w-xl-75 w-100 ps-5">
                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                            All software upgrades included</small>
                                        </div>
                                        <div class="data--table">
                                            <div class="round" ><label for="checkbox6"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round"> <label for="checkbox7"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round" ><label for="checkbox8"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-75 primary_color_bg ms-auto d-flex align-items-center justify-content-between px-5 py-4 mt-3 rounded">
                                        <div class="widget-blue">
                                            <h5 class="text-white linehight_19 font_16 mb-3 fw-bold">Enterprise Client Count</h5>
                                            <p class="text-white linehight_19 font_16 m-0">Enterprise plans are purchased in increments
                                            </p>
                                        </div>
                                        <div class="form-group w-25">
                                            <span class="form-input">
                                                <select class="form-control linehight_19 font_16 font_16 ps-3" id="">
                                                    <option>Choose One</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                                <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                            </span>
                                        </div>

                                    </div>
                                    <small class="linehight_19 font_16 grey text-end pt-3 d-block">Please<a href="/contact-support" class="text-decoration-none primary_color_text bold ps-1">contact us</a> for detail information and we’ll be
                                    happy to help.</small>
                                    <div class="row mt-5">
                                        <div class="col-12 pb-5 d-block">
                                            <h6 class="grey pb-4 linehight_34 font_30 fw-500 m-0">2. Choose your setup training
                                            </h6>
                                            <p class="linehight_19 font_16 grey s-italic m-0 ps-4">Get tailored and professional help from one of our Onboarding Specialist.</p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action active header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                    <p class="widget-subtitle p-0 m-0 ">Without Setup Training</p>
                                                    <p class="widget-subtitle p-0 m-0 ">$0</p>
                                                </a>
                                                <div class="text lighten-gray">
                                                    <p class="font_16 grey" style="line-height: 26px;">
                                                        So you want to go at it alone... not to fear, you can always reach out to our Customer Support team for specific help needs FREE of charge
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 ">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                    <p class="widget-subtitle p-0 m-0 ">One-Time Setup & Training</p>
                                                    <p class="widget-subtitle p-0 m-0 ">$50</p>
                                                </a>
                                                <div class="text lighten-gray">
                                                    <p class="font_16 grey" style="line-height: 26px;">Get tailored and professional help from one of our Onboarding Specialist. Including, but not limited to:</p>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Import clients and create routes</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2"> Setup tech’s task items and dosage costs</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Setup recurring invoices and jobs</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Setup visit report templates (email/sms)</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Answer questions and provide guidance, etc.</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">... and more to make you successful with PSS!</p>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center pt-5 d-lg-flex d-none">
                <a href="#" class="back-to-basic">
                    <img src="images/pre-btn.svg" class="img-fluid" alt="">
                </a>
                <a href="#" class="text-decoration-none form-button md-btn secondary_color_bg text-white ms-auto check-plans b-100-radious">Next Step
                    <img src="images/next-icon.svg" class="img-fluid caret-icon" alt="User icon">
                </a>
            </div>
            <div class="d-lg-none h-25 d-flex">
                <a href="#" class="text-decoration-none secondary_color_bg text-white check-plans b-100-radious next-btn m-auto justify-content-center d-flex align-items-center">Next Step
                    <!-- <img src="images/next-icon.svg" class="img-fluid caret-icon" alt="User icon"> -->
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ==== Page Sign_Up(tabs_content_3) Start === -->
<div class="tab-pane fade p-payment" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="contact-form p-0 widget-contact">
        <div class="loading-text"></div>
        <div class="row">
            <div class="col-sm-12 col-lg-7 p-sm-0">
                <article class="grey-shade px-lg-5">
                    <h6 class="widget-subtitle grey pb-5 m-0 fw_500 in-center">Payment Method</h6>
                    <div class="brand-logos pb-4 align-items-md-left align-items-center d-flex justify-content-center justify-content-lg-start">
                        <img class="img-fluid" src="images/visa.svg" alt="">
                        <img class="img-fluid" src="images/master.svg" alt="">
                        <img class="img-fluid" src="images/express.svg" alt="">
                        <img class="img-fluid" src="images/discover.svg" alt="">
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey px-4">Name On Card</label>
                                <input required type="text" class="form-control linehight_19 font_16 px-4 erro-class" id="exampleInputFirstName" aria-describedby="NameHelp" name="cardname" placeholder="Name On Card" required>
                                <div class="cardname-error erro-dev ps-3"></div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputCard" class="form-label linehight_19 font_16 grey px-4">Card Number</label>
                                <span class="form-group position-relative d-block">
                                    <input required type="text" class="form-control linehight_19 font_16 px-4 cardnum-class erro-class" id="exampleInputCardNumber" name="cardnum" required data-keeper-lock-id="" placeholder="Card Number">
                                    <img src="images/passcard.svg" class="img-fluid card-icon" alt="User icon">
                                    <div class="cardnum-error erro-dev ps-3"></div>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <div class="form-group" id="categeory">
                                    <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-4">Expiration
                                    Date</label>
                                    <select class="js-example-placeholder-single form-control erro-class" id="" name="cardexpmonth" style="width: 100%">
                                        <option value="-1">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                    <div class="cardexpmonth-error erro-dev ps-3"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey px-4">Year</label>
                                    <input required type="text" class="form-control linehight_19 font_16 px-4 erro-class" id="exampleInputFirstName" aria-describedby="NameHelp" name="cardexpyear" placeholder="YYYY" required>
                                    <div class="cardexpyear-error erro-dev ps-3"></div>
                                </div>
                            </div>
                            <div class="col-12  col-md-4 mb-3">
                                <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey px-4">CVV</label>
                                <input required type="text" class="form-control px-4 erro-class" id="exampleInputFirstName" aria-describedby="NameHelp" name="cardcvv" placeholder="CVV" required>
                                <div class="cardcvv-error erro-dev ps-3"></div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label linehight_19 font_16 grey px-4 pricing-label">VAT Number (optional)</label>
                                <input required type="text" class="form-control px-4" id="" name="vat" placeholder="VAT Number">
                            </div>
                        </div>
                    </form>
                    <div class="primary-padding mt-5 d-flex align-items-center justify-content-between d-lg-flex d-none">
                        <img class="img-fluid" src="images/stripe.svg" alt="">
                        <img class="img-fluid" src="images/aes.svg" alt="">
                        <img class="img-fluid" src="images/safe.svg" alt="">
                        <img class="img-fluid" src="images/guaranteed.svg" alt="">
                    </div>
                    <a href="#" class="back-to-palns d-lg-block d-none"><img src="images/pre-btn.svg" class="img-fluid" alt=""></a>
                </article>
            </div>
            <div class="col-sm-12 col-lg-5 p-sm-0">
                <div class="matrix-blue px-sm-5">
                    <h6 class="widget-subtitle text-white pb-5 m-0 fw_500 in-center">Order Summary</h6>
                    <div class="row d-flex align-items-center mb-5 summary-top">
                        <div class="col-8 col-md-8">
                            <h6 class="linehight_19 font_20 grey text-white bold plan-container sm-fonts">Start Up Plan</h6>
                            <p class="linehight_19 font_16 grey text-white m-0 clientss-container mobile-font">10-40 Clients</p>
                        </div>
                        <div class="col-4 col-md-4 text-end">
                            <h6 class=" linehight_19 font_20 grey text-white bold m-0 amount-contain sm-fonts">$49.50</h6>
                        </div>
                    </div>
                    <hr>
                    <h6 class="widget-subtitle text-white pb-3 m-0 in-center">Coupon Code</h6>
                    <form class="coupon-code d-flex align-items-center justify-content-lg-between justify-content-evenly coupon_check position-relative">
                        {{ csrf_field() }}
                        <input required type="text" class="ps-3 form-control coupon-field erro-class" id="code" name="coupon" placeholder="" required>
                        <br>
                        <div class="coupon-error erro-dev ps-3"></div>
                        <a href="#" class="text-decoration-none sm-fonts linehight_19 font_16 grey coupon-btn secondary_color_bg text-white d-flex align-items-center justify-content-center apply-coupon">Apply</a>
                    </form>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between pb-2">
                        <p class=" linehight_19 font_20 grey text-white sm-fonts">Subtotal</p>
                        <p class=" linehight_19 font_16 grey text-white amount-contain sm-fonts">$99.50</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class=" linehight_19 font_20 grey text-white sm-fonts m-0">Discount</p>
                        <p class=" linehight_19 font_16 grey text-white discount-contain m-0"> - </p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between pb-3">
                        <h6 class="widget-subtitle text-white bold">Total</h6>
                        <h6 class="widget-subtitle text-white bold amount-contain total-amount-contain">$99.50</h6>
                    </div>
                    <p class="font_14 text-white py-5 sm-fonts m-0 summary-bottom">All subscription plans will be automatically renewed using the payment method you provide today. You may cancel at anytime to avoid future charges. By clicking “Pay & Create Account”, you agree to Pool Service
                        Software
                        <span class="bold">Terms of Use</span> and
                        <span class="bold">Privacy Statement</span>.
                    </p>
                    <span class="form-input d-flex justify-content-center">
                        <a href="#" class="position-relative text-decoration-none pay-btn ps-4 secondary_color_bg text-white m-heading linehight_19 font_16 grey bold d-flex align-items-center justify-content-center flex-direction-columns pay-create-account sm-fonts">Pay
                            & Create Account
                            <span class="pay-text text-white m-0">100% Secure Checkout</span>
                            <img src="images/lock.svg" class="img-fluid lock-icon" alt="User icon">
                        </a>
                    </span>
                    <div class="align-items-md-left align-items-center d-flex justify-content-evenly justify-content-lg-start d-block d-lg-none pt-5">
                        <img class="imag-fluid" src="/images/stripe1.svg" alt="summary logo">
                        <img class="imag-fluid" src="/images/aes2.svg" alt="summary logo">
                        <img class="imag-fluid" src="/images/safe-and-secure3.svg" alt="summary logo">
                        <img class="imag-fluid" src="/images/satisfaction4.svg" alt="summary logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</form>
</div>
</main>
</article>
</main>
<div id="map"></div>

@endsection
@section('script')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBasphxbX9wLvunNdz479Ux8281cgUTyA8&callback=initAutocomplete&libraries=places&v=weekly" async></script>

<script>
    let autocomplete;
    let address1Field;
    let address2Field;
    let postalField;

    function initAutocomplete() {
        address1Field = document.querySelector("#pac-input");
        address2Field = document.querySelector("#address2");
        postalField = document.querySelector("#postcode");
        // Create the autocomplete object, restricting the search predictions to
        // addresses in the US and Canada.
        autocomplete = new google.maps.places.Autocomplete(address1Field, {

        });
        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener("place_changed", fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let address1 = "";
        let postcode = "";

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        // place.address_components are google.maps.GeocoderAddressComponent objects
        // which are documented at http://goo.gle/3l5i5Mr
        for (const component of place.address_components) {
            const componentType = component.types[0];

            switch (componentType) {
                case "street_number": {
                    address1 = `${component.long_name} ${address1}`;
                    break;
                }

                case "route": {
                    address1 += component.short_name;
                    break;
                }

                case "postal_code": {
                    postcode = `${component.long_name}${postcode}`;
                    break;
                }

                case "postal_code_suffix": {
                    postcode = `${postcode}-${component.long_name}`;
                    break;
                }
                case "locality":
                document.querySelector("#locality").value = component.long_name;
                break;
                case "administrative_area_level_1": {
                    document.querySelector("#state").value = component.short_name;
                    break;
                }
                case "country":
                document.querySelector("#country").value = component.long_name;
                break;
            }
        }

        address1Field.value = address1;
        postalField.value = postcode;
        // After filling the form with address components from the Autocomplete
        // prediction, set cursor focus on the second address line to encourage
        // entry of subpremise information such as apartment, unit, or floor number.

    }


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

    function SHA256(s) {
        var chrsz = 8;
        var hexcase = 0;

        function safe_add(x, y) {
            var lsw = (x & 0xFFFF) + (y & 0xFFFF);
            var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
            return (msw << 16) | (lsw & 0xFFFF);
        }

        function S(X, n) {
            return (X >>> n) | (X << (32 - n));
        }

        function R(X, n) {
            return (X >>> n);
        }

        function Ch(x, y, z) {
            return ((x & y) ^ ((~x) & z));
        }

        function Maj(x, y, z) {
            return ((x & y) ^ (x & z) ^ (y & z));
        }

        function Sigma0256(x) {
            return (S(x, 2) ^ S(x, 13) ^ S(x, 22));
        }

        function Sigma1256(x) {
            return (S(x, 6) ^ S(x, 11) ^ S(x, 25));
        }

        function Gamma0256(x) {
            return (S(x, 7) ^ S(x, 18) ^ R(x, 3));
        }

        function Gamma1256(x) {
            return (S(x, 17) ^ S(x, 19) ^ R(x, 10));
        }

        function core_sha256(m, l) {
            var K = new Array(0x428A2F98, 0x71374491, 0xB5C0FBCF, 0xE9B5DBA5, 0x3956C25B, 0x59F111F1, 0x923F82A4, 0xAB1C5ED5, 0xD807AA98, 0x12835B01, 0x243185BE, 0x550C7DC3, 0x72BE5D74, 0x80DEB1FE, 0x9BDC06A7, 0xC19BF174, 0xE49B69C1, 0xEFBE4786, 0xFC19DC6, 0x240CA1CC, 0x2DE92C6F, 0x4A7484AA, 0x5CB0A9DC, 0x76F988DA, 0x983E5152, 0xA831C66D, 0xB00327C8, 0xBF597FC7, 0xC6E00BF3, 0xD5A79147, 0x6CA6351, 0x14292967, 0x27B70A85, 0x2E1B2138, 0x4D2C6DFC, 0x53380D13, 0x650A7354, 0x766A0ABB, 0x81C2C92E, 0x92722C85, 0xA2BFE8A1, 0xA81A664B, 0xC24B8B70, 0xC76C51A3, 0xD192E819, 0xD6990624, 0xF40E3585, 0x106AA070, 0x19A4C116, 0x1E376C08, 0x2748774C, 0x34B0BCB5, 0x391C0CB3, 0x4ED8AA4A, 0x5B9CCA4F, 0x682E6FF3, 0x748F82EE, 0x78A5636F, 0x84C87814, 0x8CC70208, 0x90BEFFFA, 0xA4506CEB, 0xBEF9A3F7, 0xC67178F2);
            var HASH = new Array(0x6A09E667, 0xBB67AE85, 0x3C6EF372, 0xA54FF53A, 0x510E527F, 0x9B05688C, 0x1F83D9AB, 0x5BE0CD19);
            var W = new Array(64);
            var a, b, c, d, e, f, g, h, i, j;
            var T1, T2;

            m[l >> 5] |= 0x80 << (24 - l % 32);
            m[((l + 64 >> 9) << 4) + 15] = l;

            for (var i = 0; i < m.length; i += 16) {
                a = HASH[0];
                b = HASH[1];
                c = HASH[2];
                d = HASH[3];
                e = HASH[4];
                f = HASH[5];
                g = HASH[6];
                h = HASH[7];

                for (var j = 0; j < 64; j++) {
                    if (j < 16) W[j] = m[j + i];
                    else W[j] = safe_add(safe_add(safe_add(Gamma1256(W[j - 2]), W[j - 7]), Gamma0256(W[j - 15])), W[j - 16]);

                    T1 = safe_add(safe_add(safe_add(safe_add(h, Sigma1256(e)), Ch(e, f, g)), K[j]), W[j]);
                    T2 = safe_add(Sigma0256(a), Maj(a, b, c));

                    h = g;
                    g = f;
                    f = e;
                    e = safe_add(d, T1);
                    d = c;
                    c = b;
                    b = a;
                    a = safe_add(T1, T2);
                }

                HASH[0] = safe_add(a, HASH[0]);
                HASH[1] = safe_add(b, HASH[1]);
                HASH[2] = safe_add(c, HASH[2]);
                HASH[3] = safe_add(d, HASH[3]);
                HASH[4] = safe_add(e, HASH[4]);
                HASH[5] = safe_add(f, HASH[5]);
                HASH[6] = safe_add(g, HASH[6]);
                HASH[7] = safe_add(h, HASH[7]);
            }
            return HASH;
        }

        function str2binb(str) {
            var bin = Array();
            var mask = (1 << chrsz) - 1;
            for (var i = 0; i < str.length * chrsz; i += chrsz) {
                bin[i >> 5] |= (str.charCodeAt(i / chrsz) & mask) << (24 - i % 32);
            }
            return bin;
        }

        function Utf8Encode(string) {
            string = string.replace(/\r\n/g, '\n');
            var utftext = '';

            for (var n = 0; n < string.length; n++) {

                var c = string.charCodeAt(n);

                if (c < 128) {
                    utftext += String.fromCharCode(c);
                } else if ((c > 127) && (c < 2048)) {
                    utftext += String.fromCharCode((c >> 6) | 192);
                    utftext += String.fromCharCode((c & 63) | 128);
                } else {
                    utftext += String.fromCharCode((c >> 12) | 224);
                    utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                    utftext += String.fromCharCode((c & 63) | 128);
                }

            }

            return utftext;
        }

        function binb2hex(binarray) {
            var hex_tab = hexcase ? '0123456789ABCDEF' : '0123456789abcdef';
            var str = '';
            for (var i = 0; i < binarray.length * 4; i++) {
                str += hex_tab.charAt((binarray[i >> 2] >> ((3 - i % 4) * 8 + 4)) & 0xF) +
                hex_tab.charAt((binarray[i >> 2] >> ((3 - i % 4) * 8)) & 0xF);
            }
            return str;
        }

        s = Utf8Encode(s);
        return binb2hex(core_sha256(str2binb(s), s.length * chrsz));
    }

    var website = '<?php echo env('REDIRECT_DOMAIN'); ?>';
    var numbers = /^[0-9]+$/;
    $(document).ready(function() {

        var x = window.matchMedia("(max-width: 700px)")

        if (x.matches) {
            $('.package-option-desktop').html('');
        } else {

           $('.package-option-mobile').html('');
       }

       $("#exampleInputEmail").focusout(function() {
        var useremail = $(this).val();
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        $('.erro-dev').html('');
        $('.erro-class').removeClass('is-invalid');

        if (useremail == '') {
            $('input[name="email"]').addClass('is-invalid');
            $('.email-error').html('<div class="invalid-feedback" id="">Email is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;

        }

        if (!useremail.match(mailformat)) {

            $('input[name="email"]').addClass('is-invalid');
            $('.email-error').html('<div class="invalid-feedback" id="">Please enter a valid email.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;

        }

        $.ajax({
            url: website + "api/isemailexist",
            type: "post",
            data: {
                secret: 'websitereg',
                email: useremail
            },
            beforeSend: function() {

            },
            success: function(response) {
                console.log(response);
                var obj = jQuery.parseJSON(response);

                if (obj.data == 1) {
                    $('input[name="email"]').addClass('is-invalid');
                    $('.email-error').html('<div class="invalid-feedback" id="">Email is already taken.</div>');
                    $('.invalid-feedback').show();
                    $('.email_exist').val('yes');

                    return false;
                } else {
                    $('input[name="email"]').addClass('is-valid');
                    $('.email_exist').val('no');
                }
            }
        })

    })

       $('.error-message').hide();
       secret = SHA256('websitereg');
       $('.secret').val('websitereg')
       $('.device').val(detectBrowser());
       $('.osname').val(detectWindow());
       var date1 = new Date();
       date1 = date1.getTimezoneOffset();
       var date1 = utcformat(date1);
       $('.utcoffset').val(date1);


       $(document).on('click', '.apply-coupon', function(e) {
        e.preventDefault();
        $('.erro-dev').html('');
        $('.erro-class').removeClass('is-invalid');
        form_data = $('.coupon_check').serialize();

        $.ajax({
            url: "/check-coup",
            type: "post",
            data: form_data,
            beforeSend: function() {

            },
            error: function(response) {


                $('.coupon-field').addClass('is-invalid');
                $('.coupon-field').val('');
                $('.coupon-error').html('<div class="invalid-feedback" id="">Coupon is not valid.</div>');
                $('.invalid-feedback').show();
                $('.discount-contain').html('');
                $('.coupon-field').removeClass('is-valid');
                amount = $('.amount').val();
                $('.coupon_verified').val('no');
                $('.total-amount-contain').html(amount);

                setTimeout(function() {


                    $('.coupon-field').removeClass('is-invalid');
                    $('.coupon-error').html('');
                }, 3000);
                return false;


            },
            success: function(response) {
                if (response.success == 1) {
                    $('.coupon-field').removeClass('is-invalid');
                    $('.coupon-field').addClass('is-valid');
                    amount = $('.amount').val();
                    percent_off = parseFloat(response.percent_off);

                    dsicount = parseFloat((amount / 100) * percent_off);
                    amount = parseFloat(amount - dsicount);
                    $('.total-amount-contain').html('$' + amount.toFixed(2));
                    $('.discount-contain').html('$' + dsicount.toFixed(2));
                    $('.coupon_verified').val($('.coupon-field').val());
                }
            }
        });

    });
       $(document).on('click', '.plan-name', function(e) {

        var plan_name = $(this).data('plan');
        $('.planname').val(plan_name);
    });
       $(document).on('click', '.cycle_selector', function(e) {
        var cycle = $(this).data('cycle');
        $('.plan_cycle').val(cycle);
        var plan_name = $('.plan-name.active').data('plan');
        $('.planname').val(plan_name);
        clients = $('.clients').val();
        if (clients > 300) {
            $('.loading-text').html('<div class="alert alert-info">Loading..</div>');
            form_data = $('.basic-info-form').serialize();
            $.ajax({
                url: "/make-plan",
                type: "post",
                data: form_data,
                beforeSend: function() {

                },
                error: function(response) {
                            //console.log(response.message);
                            console.log(response);
                        },
                        success: function(response) {
                            $('.package-options').html(response);
                            $('.loading-text').html('');
                        }
                    });
        }
        if (cycle == 'year') {
            $('.monthly-old').html('<del>$49.50</del>');
            $('.monthly-standarad-old').html('<del>$99.00</del>');
            $('.monthly-current').html('$44.55');
            $('.monthly-standarad-current').html('$89.10');
            $('.monthly-text').html('per month');
            $('.monthly-standarad-text').html('per month');
            $('.monthly-price-text').html('Annual Price');
        } else {
            $('.monthly-old').html('');
            $('.monthly-standarad-old').html('');
            $('.monthly-current').html('$49.50');
            $('.monthly-standarad-current').html('$99.00');
            $('.monthly-text').html('');
            $('.monthly-standarad-text').html('');
            $('.monthly-price-text').html('Monthly Price');
        }
    });
       $(document).on('click', '.get-basic-info', function(e) {

        $('.erro-dev').html('');
        $('.erro-class').removeClass('is-invalid');
        name = $('input[name="fname"]').val();
        lname = $('input[name="lname"]').val();
        cmpname = $('input[name="cmpname"]').val();
        address = $('input[name="address"]').val();
        country = $('input[name="country"]').val();
        mobphone = $('input[name="mobphone"]').val();
        clientcount = $('input[name="clientcount"]').val();
        email = $('input[name="email"]').val();
        password = $('input[name="password"]').val();
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var phoneformat = /^\+?(\d{1,3}[\s-]?)?(\d[\s-]?)?[\(\[\s-]{0,2}?\d{2,4}[\)\]\s-]{0,2}?\d{3,4}[\s-]?(\d{3,5})?$/i;

        if (name == '') {

            $('input[name="fname"]').addClass('is-invalid');
            $('.fname-error').html('<div class="invalid-feedback" id="">First Name is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 400);
            return false;
        } else {
            $('input[name="fname"]').addClass('is-valid');
        }
        if (lname == '') {

            $('input[name="lname"]').addClass('is-invalid');
            $('.lname-error').html('<div class="invalid-feedback" id="">Last Name is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 400);
            return false;
        } else {
            $('input[name="lname"]').addClass('is-valid');
        }
        if (cmpname == '') {
            $('input[name="cmpname"]').addClass('is-invalid');
            $('.cmpname-error').html('<div class="invalid-feedback" id="">Business Name is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 500);
            return false;
        } else {
            $('input[name="cmpname"]').addClass('is-valid');
        }
        if (address == '') {
            $('input[name="address"]').addClass('is-invalid');
            $('.address-error').html('<div class="invalid-feedback" id="">Enter the address with street number.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 600);
            return false;

        } else {
            $('input[name="address"]').addClass('is-valid');
        }
        if (country == '') {
            $('input[name="country"]').addClass('is-invalid');
            $('.country-error').html('<div class="invalid-feedback" id="">Country is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 700);
            return false;

        } else {
            $('input[name="country"]').addClass('is-valid');
        }
        if (mobphone == '') {
            $('input[name="mobphone"]').addClass('is-invalid');
            $('.mobphone-error').html('<div class="invalid-feedback" id="">Mobile Phone is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 800);
            return false;

        }
        if (!mobphone.match(phoneformat)) {

            $('input[name="mobphone"]').addClass('is-invalid');
            $('.mobphone-error').html('<div class="invalid-feedback" id="">Please enter a valid phone number.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 800);
            return false;

        } else {
            $('input[name="mobphone"]').addClass('is-valid');
        }
        if (clientcount == '') {
            $('input[name="clientcount"]').addClass('is-invalid');
            $('.clientcount-error').html('<div class="invalid-feedback" id="">Client Count is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 800);
            return false;

        }

        if (clientcount.match(numbers)) {

            $('input[name="clientcount"]').addClass('is-valid');

        } else {

            $('input[name="clientcount"]').addClass('is-invalid');
            $('.clientcount-error').html('<div class="invalid-feedback" id="">Client Count should be a number.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 800);
            return false;
        }
        if (email == '') {
            $('input[name="email"]').addClass('is-invalid');
            $('.email-error').html('<div class="invalid-feedback" id="">Email is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;

        }

        if (!email.match(mailformat)) {

            $('input[name="email"]').addClass('is-invalid');
            $('.email-error').html('<div class="invalid-feedback" id="">Please enter a valid email.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;

        }
        if ($('.email_exist').val() == 'yes') {
            $('input[name="email"]').addClass('is-invalid');
            $('.email-error').html('<div class="invalid-feedback" id="">Email is already taken.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;
        }
        if (password == '') {
            $('input[name="password"]').addClass('is-invalid');
            $('.password-error').html('<div class="invalid-feedback" id="">Password is required.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;
        }
        if (password.length < 6) {
            $('input[name="password"]').addClass('is-invalid');
            $('.password-error').html('<div class="invalid-feedback" id="">Password should be minimum of 6  characters.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 900);
            return false;

        } else {
            $('input[name="password"]').addClass('is-valid');
        }






        $('.error-message').hide();
        clients = $('.clients').val();
        if (clients > 40) {
            $('.widget-subtitle').removeClass('active');
            $('.price-calculation-area').removeClass('active');
            $('.border__item-1').addClass('active');
            $('.price-calculation-area').removeClass('show');
            $('.planid').val('subscribe69');
            if (clients > 300) {
                $('.loading-text').html('<div class="alert alert-info">Loading..</div>');
                $('#enterprise-tab').addClass('active');
                $('#enterprise').addClass('active show');
                $('.planid').val('');
                form_data = $('.basic-info-form').serialize();
                $.ajax({
                    url: "/make-plan",
                    type: "post",
                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {
                            //console.log(response.message);
                            console.log(response);
                        },
                        success: function(response) {
                            $('.package-options').html(response);
                            $('.loading-text').html('');
                        }
                    });

            } else {
                $('.border__item-1').addClass('active');
                $('#standard-tab').addClass('active');
                $('#standard').addClass('active show');

            }
        }
        window.scrollTo(1000, 100);

        $('#pills-home').removeClass('show');
        $('#pills-home').removeClass('active');
        $('#pills-home-tab').removeClass('active1');
        $('#pills-profile').addClass('show active');
        $('#pills-profile-tab, #pills-home-tab').addClass('active1');
        $("#pills-profile-tab").scroll();
        var plan_name = $('.plan-name.active').data('plan');
        $('.planname').val(plan_name);
    });
$(document).on('click', '.back-to-palns', function(e) {
    $('#pills-contact').removeClass('show');
    $('.border__item-2').removeClass('active');
    $('#pills-contact').removeClass('active');
    $('#pills-contact-tab').removeClass('active1');
    $('#pills-profile').addClass('show active');
    $('pills-profile-tab').addClass('active1');
});

$(document).on('click', '.back-to-basic', function(e) {

    $('.border__item-1').removeClass('active');
    $('#pills-profile').removeClass('show');
    $('#pills-profile').removeClass('active');
    $('#pills-profile-tab').removeClass('active1');
    $('#pills-home').addClass('show active');
    $('#pills-home-tab').addClass('active1');
});
$(document).on('click', '.check-plans', function(e) {
    var plan_name = $('.plan-name.active').data('plan');
    clientcount = $('input[name="clientcount"]').val();
    if (plan_name == 'Enterprise' && clientcount < 300) {
        $('input[name="clientcount"]').val('301');
    }
    if (plan_name == 'Enterprise') {
        $('input[name="clientcount"]').val('300');
    }
    form_data = $('.basic-info-form').serialize();
    $('.loading-text').html('<div class="alert alert-info">Loading..</div>');
    $.ajax({
        url: "/check-plan",
        type: "post",
        data: form_data,
        beforeSend: function() {

        },
        error: function(response) {

            console.log("I am here");
        },
        success: function(response) {
            var amount = parseFloat(response.amount);
            var plan_cyle = $('.plan_cycle').val();
            plan_cyle = (plan_cyle == 'month') ? 'Monthly' : 'Annual';
            amount = amount.toFixed(2);
            $('.loading-text').html('');
            $('#pills-profile').removeClass('show');
            $('#pills-profile').removeClass('active');
            $('#pills-profile-tab').removeClass('active1');
            $('#pills-contact').addClass('show active');
            $('.border__item-2').addClass('active');
            $('#pills-contact-tab, #pills-profile-tab').addClass('active1');
            $('.planid').val(response.plan_id);
            $('.amount-contain').html('$' + amount);
            $('.amount').val(amount);
            $('.plan-container').html($('.planname').val() + ' Plan ' + plan_cyle);
            $('.clientss-container').html('Up to ' + response.clients + ' Clients');
        }
    })

});
$(document).on('click', '.pay-create-account', function(e) {
    e.preventDefault();
    $('.erro-dev').html('');
    $('.erro-class').removeClass('is-invalid');
    name = $('input[name="fname"]').val();
    lname = $('input[name="lname"]').val();
    cmpname = $('input[name="cmpname"]').val();
    address = $('input[name="address"]').val();
    country = $('input[name="country"]').val();
    mobphone = $('input[name="mobphone"]').val();
    clientcount = $('input[name="clientcount"]').val();
    email = $('input[name="email"]').val();
    password = $('input[name="password"]').val();
    cardname = $('input[name="cardname"]').val();
    cardnum = $('input[name="cardnum"]').val();
    cardexpmonth = $('select[name=cardexpmonth] option').filter(':selected').val();
    cardcvv = $('input[name="cardcvv"]').val();
    cardexpyear = $('input[name="cardexpyear"]').val();

    if (cardname == '') {
        $('input[name="cardname"]').addClass('is-invalid');
        $('.cardname-error').html('<div class="invalid-feedback" id="">Card Name is required.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 400);
        return false;

    } else {
        $('input[name="cardname"]').addClass('is-valid');
    }
    if (cardnum == '') {
        $('input[name="cardnum"]').addClass('is-invalid');
        $('.cardnum-error').html('<div class="invalid-feedback" id="">Card Number is required.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 500);
        return false;
    } else {
        $('input[name="cardnum"]').addClass('is-valid');
    }
    if (cardexpmonth == '') {
        $('select[name=cardexpmonth]').addClass('is-invalid set-icon');
        $('.cardexpmonth-error').html('<div class="invalid-feedback" id="">Card Expire Month is required.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 600);
        return false;

    }
    let date = new Date().getFullYear();
    if (cardexpyear == date) {
        var n = new Date().getMonth();
        if (cardexpmonth < n) {
            $('select[name=cardexpmonth]').addClass('is-invalid set-icon');
            $('.cardexpmonth-error').html('<div class="invalid-feedback" id="">Month is expired.</div>');
            $('.invalid-feedback').show();
            window.scrollTo(1000, 600);
            return false;
        }
    } else {
        $('select[name=cardexpmonth]').addClass('is-valid');
    }

    if (cardexpyear == '') {
        $('input[name="cardexpyear"]').addClass('is-invalid');
        $('.cardexpyear-error').html('<div class="invalid-feedback" id="">Card Expire Year is required.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 600);
        return false;

    }
    if (cardexpyear < date) {

        $('input[name="cardexpyear"]').addClass('is-invalid');
        $('.cardexpyear-error').html('<div class="invalid-feedback" id="">Year is expired.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 600);
        return false;

    } else {
        $('input[name="cardexpyear"]').addClass('is-valid');
    }
    if (cardcvv == '') {
        $('input[name="cardcvv"]').addClass('is-invalid');
        $('.cardcvv-error').html('<div class="invalid-feedback" id="">Card CVV is required.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 600);
        return false;

    }
    if (!cardcvv.match(numbers)) {
        $('input[name="cardcvv"]').addClass('is-invalid');
        $('.cardcvv-error').html('<div class="invalid-feedback" id="">Card CVV should be a number.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 600);
        return false;

    }
    if (cardcvv.length < 3 || cardcvv.length > 4) {
        $('input[name="cardcvv"]').addClass('is-invalid');
        $('.cardcvv-error').html('<div class="invalid-feedback" id="">Card CVV length should be 3 or 4 digits.</div>');
        $('.invalid-feedback').show();
        window.scrollTo(1000, 600);
        return false;

    } else {
        $('input[name="cardcvv"]').addClass('is-valid');
    }



    password = SHA256(password);
    $('input[name="password"]').val(password);
    form_data = $('.basic-info-form').serialize();
    $('.pay-create-account').html('Loading Please Wait..');
    $.ajax({
        url: website + "api/subscribe",
        type: "post",
        data: form_data,
        beforeSend: function() {

        },
        error: function(response) {
                    //console.log(response.message);
                    console.log("I am here");
                },
                success: function(response) {
                    $('.loading-text').html('');
                    window.location.replace("/subscription-started");
                }
            })

});
});
</script>
@endsection
