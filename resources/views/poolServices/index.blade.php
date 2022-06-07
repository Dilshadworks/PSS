@extends('layouts.app')

@section('content')
<!-- ==== Page main_content Content Start === -->
<main class="page-content">
    <!-- ==== Section Banner (Desktop View) === -->
    <section class="desktop-banner d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 t-padding" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="d-flex align-items-center pb-xl-3 pb-lg-0">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <span class="primary_color_text bold font_12 linehight_14">MODERN SOFTWARE</span>
                    </div>
                    <div class="banner-title">
                        <h1 class="primary_color_text rubik-font font_50 fw-500 linehight_60 m-0 pb-0">Easy & Powerful</h1>
                        <h1 class="secondary_color_text rubik-font font_50 fw-500 linehight_60 m-0">All-in-One App</h1>
                        <p class="pt-xl-3 pt-lg-2 m-0 dark_gray linehight_19 font_16">Routes, Jobs, Quotes, Invoices, Dosage Costs & more!</p>
                    </div>
                    <div class="d-lg-flex align-items-center">
                        <form class="m-banner-btn">
                            <a href="#pricing_tables" class="main__banner-btn secondary_color_bg text-white border-0 align_items font_14" type="submit">Sign Up Now </br>
                                <i class="font_12 fst-italic">Free & Paid Plans</i>
                            </a>
                        </form>
                        <div class="py-xl-4 py-lg-3 ps-4 social-icon">
                            <a href="#"><img class="img-fluid icons pe-3" alt="" src="images/window.png"></a>
                            <a href="#"><img class="img-fluid icons pe-3" alt="" src="images/apple.png"></a>
                            <a href="#"><img class="img-fluid icons pe-3" alt="" src="images/android.png"></a>
                        </div>
                    </div>
                    <div id="features"></div>
                </div>
                <div class="col-12 col-lg-7" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="img-fluid d-banner-img d-lg-block" src="images/Otter-in-side.svg" alt="banner image">
                </div>
            </div>
        </div>

    </section>

    <!-- ==== Section Banner (Mobile View) === -->
    <section class="mobile-banner d-block d-lg-none text-center">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="img-fluid" src="images/home-banner-mobile.png" alt="banner image">
                </div>
                <div class="col-12 pt-lg-0 pt-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-left">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <span class="primary_color_text bold font_12 linehight_14">MODERN SOFTWARE</span>
                    </div>
                    <div class="banner-title">
                        <h1 class="primary_color_text rubik-font font_30 fw-500 linehight_43 m-0">Easy & Powerful</h1>
                        <h1 class="secondary_color_text rubik-font font_30 fw-500 linehight_43 m-0">All-in-One App</h1>
                        <p class="pt-3 m-0 dark_gray linehight_19 font_16">Routes, Jobs, Quotes, Invoices, Dosage Costs & more!</p>
                    </div>
                    <div class="py-lg-5 py-4 social-icon">
                        <a href="#"><img class="img-fluid icons pe-3" alt="" src="images/window.png"></a>
                        <a href="#"><img class="img-fluid icons pe-3" alt="" src="images/apple.png"></a>
                        <a href="#"><img class="img-fluid icons pe-3" alt="" src="images/android.png"></a>
                    </div>
                    <form class="d-flex flex-column align-items-center">
                        <a class="button_btn main_btn align_items active linehight_19 font_16" type="submit" href="#pricing_tables">Sign Up</a>
                        <a class="button_btn main_btn align_items linehight_19 font_16 mt-4" href="#getdemo" style="color:#3564AC;">Get Demo</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section Feature's (Desktop View)=== -->
    <section class="features d-lg-block d-none">
        <article class="feature_tabs widget-tabs primary_color_bg">
            <!--- Features Tab's Buttons ---->
            <div class="container">
                <div class="feature-main text-center py-5">
                    <p class="tag-title secondary_color_text m-0 text-center fw-500">We Provide Awesome Features</p>
                    <p class="tag-title text-white m-0 text-center fw-500">to Our Customers</p>
                </div>
                <div class="tab-btn align_items">
                    <button class="tablinks align_items active" onmouseover="features(event, 'routing-tab')">
                        <img class="img-fluid white-icon" src="images/White-Routing.svg" alt="White Routing">
                        <img class="img-fluid blue-icon" src="images/blue-routing.svg" alt="Blue Routing">
                        <p class="text-wrap">Routing</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'job-tab')">
                        <img class="img-fluid white-icon" src="images/Whit-Jobs-Quotes.svg" alt="White Job Qoutes">
                        <img class="img-fluid blue-icon" src="images/blue-Jobs-Quotes.svg" alt="Blue Job Qoutes">
                        <p class="text-wrap">Jobs <br>& Quotes</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'Invoicing-tab')">
                        <img class="img-fluid white-icon" src="images/White-Invoicing.svg" alt="White Invoicing">
                        <img class="img-fluid blue-icon" src="images/blue-Invoicing.svg" alt="Blue Invoicing">
                        <p class="text-wrap">Invoicing <br>& Payments</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'dosage-tab')">
                        <img class="img-fluid white-icon" src="images/White-Control-Center.svg" alt="Reading Dosages">
                        <img class="img-fluid blue-icon" src="images/Control-Center.svg" alt="Blue Reading Dosages">
                        <p class="text-wrap">Control <br>Center</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'track-cost')">
                        <img class="img-fluid white-icon" src="images/White-Visit-task-&-costs.svg" alt="White Visit Tracks Costs">
                        <img class="img-fluid blue-icon" src="images/Visit-task-&-costs.svg" alt="Blue Visit Tracks Costs">
                        <p class="text-wrap">Visit Tracks <br>& Costs</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'shoping-tab')">
                        <img class="img-fluid white-icon" src="images/White-Shopping-List.svg" alt="Shoping">
                        <img class="img-fluid blue-icon" src="images/blue-shopping-list.svg" alt="Blue Shoping List">
                        <p class="text-wrap">Shopping List</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'visit-tab')">
                        <img class="img-fluid white-icon" src="images/White-Visit-report.svg" alt="Visitors Reports">
                        <img class="img-fluid blue-icon" src="images/blue-visit-report.svg" alt="Blue Visit report">
                        <p class="text-wrap">Visit <br>Reports</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'equipment-tab')">
                        <img class="img-fluid white-icon" src="images/white-equipments.svg" alt="Equipments">
                        <img class="img-fluid blue-icon" src="images/blue-equipments.svg" alt="Blue Equipments">
                        <p class="text-wrap">Equipments</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'lsi-tab')">
                        <img class="img-fluid white-icon" src="images/White-LSI-calculator.svg" alt="LSI">
                        <img class="img-fluid blue-icon" src="images/blue-lsi.svg" alt="Blue LSi">
                        <p class="text-wrap">LSI <br>Calculator</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'announcements-tab')">
                        <img class="img-fluid white-icon" src="images/white-announcement.svg" alt="announcement">
                        <img class="img-fluid blue-icon" src="images/blue-announcement.svg" alt="announcement">
                        <p class="text-wrap">Annoucements</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                    <button class="tablinks align_items" onmouseover="features(event, 'gps-tab')">
                        <img class="img-fluid white-icon" src="images/White-GPS.svg" alt="GPS">
                        <img class="img-fluid blue-icon" src="images/blue-gps.svg" alt="GPS">
                        <p class="text-wrap">GPS</p>
                        <img class="img-fluid d-none show-border" src="/images/border.svg" alt="border icon">
                    </button>
                </div>
            </div>
        </article>
        <abbr class="divider"></abbr>
        <!--- Features Tab's ---->
        <div class="feature_tabs widget-tabs">
            <!--- Features Tab's Content detail ---->
            <div class="feature_tabs_detail pb-xl-0 pb-lg-4">
                <!--- Features Tab's Content detail for (Routing) ---->
                <div id="routing-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3 fw-500">Simple & Effective Routes Management</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Optimize routes to save miles, time and gas
                                            cost
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">View and manage estimated work hours in a
                                            day
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Pause and move routes (permanent or
                                            temporary)
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">View miles, gas and dosage costs per stop and per
                                            day
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Easily and quickly create and manage routes</small>
                                    </li>
                                </ul>
                                <div class="logo-routes d-flex justify-content-center align-items-center">
                                    <bold class="pe-2">With</bold>
                                    <img class="img-fluid" alt="icon" src="images/quick-routes.png">
                                </div>
                                <p class="text-center quote py-1">Proprietary Technology</p>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-route.png" alt="feature routing">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail for (Jobs) ---->
                <div id="job-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Simply Handle Quotes & Jobs</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png" alt="">
                                        <small class="font_16 linehight_23 dark_gray">Track and manage quotes and jobs in one simple
                                            way
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png" alt="">
                                        <small class="font_16 linehight_24 dark_gray">Request and track quote approvals</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png" alt="">
                                        <small class="font_16 linehight_24 dark_gray">Easy drag-and-drop job scheduling between stops in
                                            the
                                            day
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png" alt="">
                                        <small class="font_16 linehight_24 dark_gray">Single and multi-day jobs with reports for each
                                            day
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png" alt="">
                                        <small class="font_16 linehight_24 dark_gray">Easily add & track extra items that come up</small>
                                    </li>

                                    <li class="pt-3 d-flex align-items-start">

                                        <img class="img-fluid" src="images/yes.png" alt="">

                                        <small class="font_16 linehight_24 dark_gray">Add photos and videos and include them on the
                                            job’s
                                            invoice!
                                        </small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-jobs.svg" alt="features jobs">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (Ivoicing) ---->
                <div id="Invoicing-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Invoicing Features for the Pool Industry</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray"> Send web invoices & receive online
                                            payments
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Setup clients on AutoPay</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Automatic invoices every month with dosage costs
                                            (optional)
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Send job photos on web invoices (optional)</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Per service visit invoicing is available</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Bulk invoice actions to save time on
                                            invoicing!
                                        </small>
                                    </li>
                                </ul>
                                <div class="logo-routes d-flex justify-content-center align-items-center">
                                    <bold class="pe-2">Works With</bold>
                                    <img class="pe-3" src="images/quickbook-logo.png">
                                    <img class="img-fluid" alt="icon" src="images/stripe-logo.png">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-invocing.svg" alt="feature invocing">
                            </div>
                        </div>
                    </div>
                </div>
                <!--- Features Tab's Content detail (Tack Cost) ---->
                <div id="track-cost" class="tabcontent">
                    <h2 class="text-center heading pb-3">Customize Readings, Dosages & Checklists</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding t-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Create custom readings, dosages and checklist (unit of measure, min/max ranges and more!)
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Configure what is shown and required for service completion</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Configure dosage costs and accurately run reports
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Create custom task views (incl. readings, dosages and checklists) and apply them to one or more properties</small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/Reading-Dosages-Image.svg" alt="features track cost.png">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (Shoping) ---->
                <div id="shoping-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Buy Items Needed & Invoice Your Clients</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Follow items from purchase-to-pay</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Assign items to technicians</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Purchase items for a service stop or the company
                                            stock
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Daily tech reminders for items needed
                                            today!
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Keep track of where to find items in the
                                            inventory
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Bulk actions available to quickly manage shopping
                                            list
                                        </small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-shoping-list.svg" alt="feature shopig list">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (Visitors) ---->
                <div id="visit-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Beautiful & Customizable Reports</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding t-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Show and hide sections on the visit reports</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Decide what readings, dosages and checklist items
                                            to show on the
                                            visit
                                            reports
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Choose your brand colors and logo for a
                                            professional look
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Include the tech's selfie photo for a personal
                                            touch
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Send reports through email and sms</small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-visitor.svg" alt="feature visit report">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (Equipments) ---->
                <div id="equipment-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Store & Easily Reference All Equipment</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="padding-left py-5">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Store equipment details including photos and
                                            videos
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Techs can also view, add and edit equipment
                                            records
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Easily see and track warranty expirations</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Manage all equipment from the web and/or
                                            mobile
                                        </small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-equipment.svg" alt="feature equipment">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (Dosage) ---->
                <div id="dosage-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Control Center</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding t-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Quick and easy one-stop shop for all important events</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Configure the events that matter to your business</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Trigger events on dosage cost, FAC Factor, LSI, reading/dosage values, UP/DOWN trends, and more!</small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Events include reading/dosage issues, tech checks IN/OUT too far away, missed work, late invoices, short/long visits, low inventory, equipment issues, and office notifications!</small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/control-center-Images.svg" alt="feature reading">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (LSI) ---->
                <div id="lsi-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Level Up with LSI Water Balancing</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding t-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">LSI is automatically calculated at every service
                                            stop
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">LSI calculator optionally considers Borates, if
                                            added
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Carryover past readings to calculate the current
                                            stop’s LSI, e.g.
                                            TDS,
                                            CYA, etc.
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Easily know when the water is too corrosive or
                                            scale
                                            forming
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Adjust desired readings and quickly see the LSI
                                            change
                                        </small>
                                    </li>
                                </ul>
                                <span class="w-100 text-center d-block fst-italic font_14 linehight_24 dark_gray">LSI formula is Copyright 2016 by Robert W. Lowry</span>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-ils.svg" alt="feature lsi">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (Announcements) ---->
                <div id="announcements-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Send Announcements To All or Specific Clients</h2>
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="py-xl-5 px-0">
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Send announcements for specific tech routes,
                                            service days, tags,
                                            etc.
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Save message templates to easily reuse next
                                            time
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Define the announcement’s email subject and
                                            reply-to
                                            address
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Personalize announcements with the client's
                                            name
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Send promotions to active and/or inactive
                                            clients
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Quickly inform clients when there is no
                                            service
                                        </small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-announcements.svg" alt="feature announcements">
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Features Tab's Content detail (GPS) ---->
                <div id="gps-tab" class="tabcontent">
                    <h2 class="text-center heading pb-3">Keep Track of Service Stop Activities</h2>
                    <div class="home-container">
                        <div class="row">
                            <div class="col-12 col-md-5 l-padding">
                                <ul class="py-xl-5 px-0">
                                    <!-- <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Keep Track of Service Stop Activities</small>
                                    </li> -->
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Easily see your tech's check-in location relative
                                            to the
                                            property
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Quickly see red flags when a tech’s check-in is too
                                            far
                                            away
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Know the GPS location for every photo/video taken
                                            at the
                                            stop
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Clients never see the tech’s check-in
                                            location
                                        </small>
                                    </li>
                                    <li class="pt-3 d-flex align-items-start">
                                        <img class="img-fluid" alt="icon" src="images/yes.png">
                                        <small class="font_16 linehight_24 dark_gray">Access the tech's check-in location on the web
                                            and/or mobile
                                            apps
                                        </small>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-7 align-items-xl-end align-items-center d-flex">
                                <img class="img-fluid w-100" src="images/feature-gps.png" alt="feature gps">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section Feature's (Mobile View) === -->
    <section class="mobile-features mb-5 d-block d-lg-none" id="mobilefeatures">
        <div class="feature-head text-center">
            <p class="secondary_color_text fw-500 font_18 linehight_19 m-0">We Provide Awesome Features</p>
            <p class="text-white fw-500 font_22 linehight_26 m-0">to Our Customers</p>
        </div>
        <div class="silk-mobile-slider bg-white">
            <!-- Slide_1 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-routing1.png" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Simple & Effective </p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Routes Management</p>
                        </article>
                    </div>
                    <div class="card-body py-2 px-4">
                        <img class="img-fluid m-auto mt-4" src="/images/routes-management-mobile.png" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Optimize routes to save miles, time and gas
                                    cost
                                </small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">View and manage estimated work hours in a
                                    day
                                </small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Pause and move routes (permanent or
                                    temporary)
                                </small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">View miles, gas and dosage costs per stop and
                                    per
                                    day
                                </small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Easily and quickly create and manage
                                    routes</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_2 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-jobs2.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Simply Handle Quotes</p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">& Jobs</p>
                        </article>
                    </div>
                    <div class="card-body py-2 px-4">
                        <img class="img-fluid m-auto" src="/images/photo-2.svg" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Track and manage quotes and jobs in one simple way</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Request and track quote approvals</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Easy drag-and-drop job scheduling between stops in the day</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Single and multi-day jobs with reports for each day</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Easily add & track extra items that come up</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Add photos and videos and include them on the job’s invoice!</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_3 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-invocing3.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Invoicing Features for the</p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Pool Industry</p>
                        </article>
                    </div>
                    <div class="card-body py-2 px-4">
                        <img class="img-fluid m-auto" src="/images/photo-3.svg" alt="routes management">
                        <div class="logo-routes d-flex justify-content-evenly align-items-center">
                            <bold class="font_12 linehight_19 fw-500" style="color: #231F20;">Works With</bold>
                            <img class="img-fluid" src="images/s-quickbook.svg">
                            <img class="img-fluid" alt="icon" src="images/small-strip.svg">
                        </div>
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Send web invoices & receive online payments</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Setup clients on AutoPay</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Automatic invoices every month with dosage costs (optional)</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Send job photos on web invoices (optional)</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Per service visit invoicing is available</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Bulk invoice actions to save time on invoicing!</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_4 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/White-Control-Center-mobile.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Control Center</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto mt-4" src="/images/Contorl-center.svg" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Quick and easy one-stop shop for all important events</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Configure the events that matter to your business</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Trigger events on dosage cost, FAC Factor, LSI, reading/dosage values, UP/DOWN trends, and more!</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Events include reading/dosage issues, tech checks IN/OUT too far away, missed work, late invoices, short/long visits, low inventory, equipment issues, and office notifications!</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_5 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/White-Visit-task-&-costs-mobile.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Customize Reading,</p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Dosages & Checklists</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto my-4" src="/images/photo-8.png" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Create custom readings, dosages and checklist (unit of measure, min/max ranges and more!)</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Configure what is shown and required for service completion</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Configure dosage costs and accurately run reports</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Create custom task views (incl. readings, dosages and checklists) and apply them to one or more properties</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_6 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-shoping6.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Buy Items Needed & </p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Invoice Your Clients</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto" src="/images/photo-5.svg" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Follow items from purchase-to-pay</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Assign items to technicians</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Purchase items for a service stop or the company stock</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Daily tech reminders for items needed today!</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Keep track of where to find items in the inventory</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Bulk actions available to quickly manage shopping list</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_7 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-reports7.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Beautiful & Customizable</p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Reports</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto mt-4" src="/images/photo-6.svg" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Show and hide sections on the visit reports</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Decide what readings, dosages and checklist items to show on the visit reports</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Choose your brand colors and logo for a professional look</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Include the tech's selfie photo for a personal touch</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Send reports through email and sms</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_8 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-equipment8.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Store & Easily Reference </p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">All Equipment</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto my-3" src="/images/photo-7.svg" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Store equipment details including photos and videos</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Techs can also view, add and edit equipment records</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Easily see and track warranty expirations</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Manage all equipment from the web and/or mobile</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_9 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-lsi10.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Level Up with LSI</p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Water Balancing</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto mb-2" src="/images/photo-9.svg" alt="routes management">
                        <span class="fst-italic font_12 linehight_19 dark_gray">LSI formula is Copyright 2016 by Robert W. Lowry</span>
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png"><small class="font_12 linehight_19 dark_gray">LSI is automatically calculated at every service stop</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">LSI calculator optionally considers Borates, if added</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Carryover past readings to calculate the current stop’s LSI, e.g. TDS, CYA, etc.</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Easily know when the water is too corrosive or scale forming</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Adjust desired readings and quickly see the LSI change</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_10 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-annoucment11.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Send Announcements To</p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">All or Specific Clients</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto" src="/images/photo-10.svg" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png"><small class="font_12 linehight_19 dark_gray">Send announcements for specific tech routes, service days, tags, etc.</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Save message templates to easily reuse next time</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Define the announcement’s email subject and reply-to address</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Personalize announcements with the client's name</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Send promotions to active and/or inactive clients</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Quickly inform clients when there is no service</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Slide_11 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-evenly py-3">
                        <img class="img-fluid" src="images/w-gps12.svg" alt="routing icon">
                        <article class="d-flex align-items-center justify-content-center flex-column me-4">
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Keep Track of Service </p>
                            <p class="font_16 linehight_19 fw-500 text-white m-0">Stop Activities</p>
                        </article>
                    </div>
                    <div class="card-body px-4 py-2">
                        <img class="img-fluid m-auto" src="/images/photo-11.png" alt="routes management">
                        <ul class="list-unstyled px-2 m-0">
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png"><small class="font_12 linehight_19 dark_gray">Easily see your tech's check-in location relative to the property</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Quickly see red flags when a tech’s check-in is too far away</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Know the GPS location for every photo/video taken at the stop</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Clients never see the tech’s check-in location</small>
                            </li>
                            <li class="pt-3 d-flex align-items-start">
                                <img class="img-fluid pe-2" src="images/m-yes.png">
                                <small class="font_12 linehight_19 dark_gray">Access the tech's check-in location on the web and/or mobile apps</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section Our Client's (DeskTop view)=== -->
    <section class="we-work d-lg-block d-none">
        <div class="container">
            <div class="row align-items-center mb-5 px-5">
                <div class="col-12 col-md-4">
                    <img class="img-fluid" src="images/rectangle.svg" alt="Border Line">
                    <strong class="primary_color_text tag-title ps-5 linehight_34 fw-500">Works<bold class="secondary_color_text ps-2">with</bold></strong>
                </div>
                <div class="col-12 col-md-8 text-center">
                    <p class="linehight_19 font_16 dark_gray text-center px-5">Explore our integrations below that include expert guidance from Orenda Technologies,
                        LaMotte, Quickbooks and Stripe.</p>
                </div>
            </div>
            <div class="work-history widget-tabs">
                <!-- ==== Section Our Client's Tabs === -->
                <div class="row work-tabs-btn flex-center">
                    <!-- ==== Section Our Client's Tabs_1 === -->
                    <button class="col-12 col-md-3 tablinks wework-links d-flex justify-content-end history-tabs active" onmouseover="weWork(event, 'orenda')">
                        <img class="img-fluid blue-icon" src="images/orenda-logo.svg" alt="orenda logo">
                        <img class="img-fluid white-icon" src="images/w-orenda-logo.svg" alt="orenda logo">
                    </button>
                    <!-- ==== Section Our Client's Tabs_2 === -->
                    <button class="col-12 col-md-3 tablinks wework-links d-flex justify-content-center history-tabs" onmouseover="weWork(event, 'lamottte')">
                        <img class="img-fluid blue-icon" src="images/lamotte-logo.svg" alt="">
                        <img class="img-fluid white-icon" src="images/w-lamotte-logo.svg" alt="">
                    </button>
                    <!-- ==== Section Our Client's Tabs_3 === -->
                    <button class="col-12 col-md-3 tablinks wework-links d-flex justify-content-start history-tabs" onmouseover="weWork(event, 'quickbook')">
                        <img class="img-fluid blue-icon" src="images/quicbook-bottom.svg" alt="">
                        <img class="img-fluid white-icon" src="images/w-Quickbooks-Logo.svg" alt="">
                    </button>
                    <!-- ==== Section Our Client's Tabs_4 === -->
                    <button class="col-12 col-md-3 tablinks wework-links history-tabs" onmouseover="weWork(event, 'group')">
                        <img class="img-fluid blue-icon" src="images/Group.svg" alt="">
                        <img class="img-fluid white-icon" src="images/w-Group.svg" alt="">
                    </button>
                </div>
                <!-- ==== Section Our Client's Tab_content_1 === -->
                <div id="orenda" class="weworktabcontent" style="display: block;">
                    <div class="row align_items orenda">
                        <div class="col-12 col-md-6">
                            <img class="img-fluid" src="images/oranda-group.svg" alt="logo">
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="dark_gray font_14 linehight_19">Submit a ticket from within PSS and quickly receive expert advice and guidance from the Orenda team.</p>
                            <p class="dark_gray font_14 linehight_19">Along with the request, PSS will send the property's recent chemistry details and more so that you and your team can quickly balance that pesky body of water.</p>
                            <p class="dark_gray font_14 linehight_19">Submitting tickets are included in all PSS subscription plans</p>
                            <p class="dark_gray font_14 linehight_19">Experience this unique and seamless offering brought to you by industry and tech leaders</p>
                            <p class="dark_gray font_14 linehight_19 m-0">Easily manage access to this feature from within your PSS settings</p>
                        </div>
                    </div>
                </div>
                <!-- ==== Section Our Client's Tab_content_2 === -->
                <div id="lamottte" class="weworktabcontent" style="display: none;">
                    <div class="row align_items text-center">
                        <div class="col-12 col-md-4">
                            <img class="img-fluid" src="images/image.svg" alt="logo">
                        </div>
                        <div class="col-12 col-md-4">
                            <img class="img-fluid" src="images/image2.png" alt="logo">
                        </div>
                        <div class="col-12 col-md-4 d-flex align-item-start ps-3 pe-0">
                            <ul class="list-unstyled list list-count1">
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">FCL</span>
                                    <span class="gray-item">: Free Chlorine</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">TCL </span>
                                    <span class="gray-item">: Total Chlorine</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">BR </span>
                                    <span class="gray-item">: Bromine</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">PH </span>
                                    <span class="gray-item">: pH</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">ALK </span>
                                    <span class="gray-item">: Alkalinity</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled list list-count2">
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">CYA </span>
                                    <span class="gray-item">: Cyanuric Acid
                                    </span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">IRON </span>
                                    <span class="gray-item">: Iron</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">COPPER </span>
                                    <span class="gray-item">: Copper</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">BOR </span>
                                    <span class="gray-item">: Borate</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">PHOS </span>
                                    <span class="gray-item">: Phosphates</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled list list-count3">
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">CALH </span>
                                    <span class="gray-item">: Calcium Hardness
                                    </span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">SALT </span>
                                    <span class="gray-item">: Salt</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">TDS </span>
                                    <span class="gray-item">: Total Dissolved Solids</span>
                                </li>
                                <li class="d-flex justify-content-end py-2">
                                    <img class="img-fluid" src="/images/blutooth.svg" alt="blutooth icon">
                                    <img class="img-fluid ps-3" src="/images/mobile-icon.svg" alt="mobile icon">
                                </li>
                            </ul>
                        </div>
                        <p class="text-center dark_gray font_14 linehight_19 px-5 w-75">Speed through your service visit stops with accuracy and confidence using either the LaMotte SpinTouch or
                            ColorQ 2x digital meters. Readings are instantly sent to PSS through Bluetooth and the LSI formula is
                            automatically calculated! Save time and get more done in a work day.
                        </p>
                    </div>
                </div>
                <!-- ==== Section Our Client's Tab_content_3 === -->
                <div id="quickbook" class="weworktabcontent" style="display: none;">
                    <div class="row align_items pt-5">
                        <div class="col-12 col-md-6 position-relative">
                            <img class="img-fluid" src="images/qbo-1.svg" alt="">
                            <img class="img-fluid qbc_ss" src="images/qbo-2.svg" alt="">
                        </div>
                        <div class="col-12 col-md-6 pt-4">
                            <p class="dark_gray font_14 linehight_19">Easily get started right away by importing your clients from QuickBooks Online right into PSS</p>
                            <p class="dark_gray font_14 linehight_19">PSS has a complete invoicing solution for your pool business. The invoices created in PSS are sent and
                                linked to QBO invoices. You can receive payments either in PSS or in QBO and ensure both systems are in sync.</p>
                            <p class="dark_gray font_14 linehight_19">Take advantage of PSS as your operation hub to gather all invoicing data and sync that over to QBO</p>
                        </div>
                    </div>
                </div>
                <!-- ==== Section Our Client's Tab_content_4 === -->
                <div id="group" class="weworktabcontent" style="display: none;">
                    <div class="row align_items pt-5">
                        <div class="col-12 col-md-6 d-flex justify-content-center">
                            <img class="img-fluid" src="images/invoicing-web.svg" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="dark_gray font_14 linehight_19">Securely and reliably process invoices with our Stripe integration</p>
                            <p class="dark_gray font_14 linehight_19">Create a new or reuse an existing Stripe account</p>
                            <p class="dark_gray font_14 linehight_19">Bank deposits are typically made within 2 business days into your business bank account</p>
                            <p class="dark_gray font_14 linehight_19">Transaction fees are 2.9% plus 30 cents of the invoice amount paid</p>
                            <article class="d-flex justify-content-end">
                                <img class="img-fluid small-icon" src="/images/bank-icon.svg" alt="bank icon">
                                <img class="img-fluid small-icon me-5" src="/images/cash-icon.svg" alt="cash icon">
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section Our Client's (Mobile view) === -->
    <section class="mobile-we-work text-center d-block d-lg-none">
        <div class="circle">
            <img class="img-fluid" src="images/ellipse.png">
            <img class="img-fluid" src="images/ellipse.png">
            <img class="img-fluid" src="images/ellipse.png">
        </div>
        <div class="d-flex align-items-center justify-content-center py-2">
            <h3 class="secondary_color_text fw-500 font_22 linehight_26">Works</h3>
            <h3 class="primary_color_text fw-500 font_22 linehight_26 ps-2">With</h3>
        </div>
        <p class="dark_gray font_12 linehight_19 px-5 pb-4 m-0">
            Explore our integrations below with LaMotte digital meters, QuickBooks Online sync of customers and invoices, and Stripe for invoice payments!
        </p>
        <div class="silk-mobile-slider">
            <!-- Slide_1 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-center py-3">
                        <img class="img-fluid" src="images/orenda-logo-mobile-version.svg" alt="Orehda image">
                    </div>
                    <div class="card-body p-3">
                        <article class="d-flex align-items-center justify-content-center">
                            <img class="img-fluid py-4" src="/images/orehda-logo-mobile.svg" alt="Orehda">
                        </article>
                        <p class="text-center dark_gray font_12 linehight_19 py-3 m-0">Submit a ticket from within PSS and quickly receive expert advice and guidance from the Orenda team.</p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Along with the request, PSS will send the property's recent chemistry details and more so that you and your team can quickly balance that pesky body of water.</p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Benefit from this unique integration to receive industry and tech leadership together in one seamless experience!</p>
                        <p class="text-center dark_gray font_12 linehight_19 py-3 m-0">Easily manage access to this feature within your PSS settings</p>
                    </div>
                </div>
            </div>
            <!-- Slide_2 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-center py-3">
                        <img class="img-fluid" src="images/m-Lamotte-Logo.svg" alt="lamotte image">
                    </div>
                    <div class="card-body p-3">
                        <article class="d-flex justify-content-evenly" style="height: 120px;">
                            <img class="img-fluid" src="/images/image-icon1.svg" alt="lamotte">
                            <img class="img-fluid" src="/images/image-icon2.png" alt="lamotte">
                        </article>
                        <div class="d-flex align-item-start pe-0">
                            <ul class="list-unstyled list list-count1">
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">FCL</span>
                                    <span class="gray-item">: Free Chlorine</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">TCL </span>
                                    <span class="gray-item">: Total Chlorine</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">BR </span>
                                    <span class="gray-item">: Bromine</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">PH </span>
                                    <span class="gray-item">: pH</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">ALK </span>
                                    <span class="gray-item">: Alkalinity</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled list list-count2">
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">CYA </span>
                                    <span class="gray-item">: Cyanuric Acid
                                    </span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">IRON </span>
                                    <span class="gray-item">: Iron</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">COPPER </span>
                                    <span class="gray-item">: Copper</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">BOR </span>
                                    <span class="gray-item">: Borate</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">PHOS </span>
                                    <span class="gray-item">: Phosphates</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled list list-count3">
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">CALH </span>
                                    <span class="gray-item">: Calcium Hardness
                                    </span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">SALT </span>
                                    <span class="gray-item">: Salt</span>
                                </li>
                                <li class="d-flex list-item fw-500 py-1">
                                    <span class="blue-item">TDS </span>
                                    <span class="gray-item">: Total Dissolved Solids</span>
                                </li>
                                <li class="d-flex justify-content-end">
                                    <img class="img-fluid" src="/images/blutooth.svg" alt="blutooth icon">
                                    <img class="img-fluid ps-2" src="/images/mobile-icon.svg" alt="mobile icon">
                                </li>
                            </ul>
                        </div>
                        <p class="text-center dark_gray font_12 linehight_19 py-3 m-0">Speed through your service visit stops with accuracy and confidence using either the LaMotte SpinTouch or
                            ColorQ 2x digital meters. </p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Readings are instantly sent to PSS through Bluetooth and the LSI formula is
                            automatically calculated! </p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Save time and get more done in a work day. Support the following readings:</p>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Slide_3 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-center py-3">
                        <img class="img-fluid" src="images/quick-book-logo-main.svg" alt="QuickBook Logo">
                    </div>
                    <div class="card-body p-3">
                        <article class="d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="/images/quick-book-logo-featured.svg" alt="QuickBook">
                        </article>
                        <p class="text-center dark_gray font_12 linehight_19 py-3 m-0">Easily get started right away by importing your clients from<br>QuickBooks Online right into PSS</p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">PSS has a complete invoicing solution for your pool business. The invoices created in PSS are sent and linked to QBO invoices. You can receive payments either in PSS or in QBO and ensure both systems are in sync.</p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Take advantage of PSS as your operation hub to gather all invoicing data and sync that over to QBO</p>
                    </div>
                </div>
            </div>
            <!-- Slide_4 -->
            <div class="p-2">
                <div class="slider-card silk-shadow">
                    <div class="card-head secondary_color_bg d-flex align-items-center justify-content-center py-3">
                        <img class="img-fluid" src="images/stripe-logo-main.svg" alt="Stripe Logo">
                    </div>
                    <div class="card-body p-3">
                        <article class="d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="/images/stripe-featured.svg" alt="Stripe">
                        </article>
                        <p class="text-center dark_gray font_12 linehight_19 py-3 m-0">Securely and reliably process invoices with our Stripe integration</p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Create a new or reuse an existing Stripe account</p>
                        <p class="text-center dark_gray font_12 linehight_19 pb-3 m-0">Bank deposits are typically made within 2 business days into your business bank account</p>
                        <p class="text-center dark_gray font_12 linehight_19 py-3 m-0">Transaction fees are 2.9% plus 30 cents of the invoice amount paid</p>
                        <article class="d-flex justify-content-center align-items-center">
                            <img class="img-fluid small-icon me-2" src="/images/cash-icon.svg" alt="cash icon">
                            <img class="img-fluid small-icon" src="/images/bank-icon.svg" alt="bank icon">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section App_Slider  (DeskTop view) === -->
    <section class="app-slider primary_color_bg pt-5 pb-3">
        <div class="app-container container">
            <div class="row text-center">
                <div class="col-12 pb-3 m-0">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                </div>
                <div class="col-12">
                    <h3 class="secondary_color_text tag-title pb-3 m-0 text-center fw-500">App<span class="text-white ps-3 tag-title fw-500">Screenshots</span>
                    </h3>
                    <p class="text-white linehight_19 font_16 text-center pb-4 m-0">Run your service business in the office or on-the-go with these features and many more!</p>
                </div>
            </div>
        </div>
        <section class="app-container container">
            <div class="slider-block__main wrapper">
                <div class="ui-slider js-slider" id="slider">
                    <div class="ui-slider__arrows arrows-1 js-slider-arrows">
                    </div>
                    <div class="ui-slider__all">
                        <div class="ui-slider__list-wrap js-slider-loader loaded">
                            <div class="ui-slider__list js-slider-list">
                                <!-- Slide_1 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-1.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Track readings and dosages - quickly tap in the last value</p>
                                    </div>
                                </div>
                                <!-- Slide_2 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-2.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Use the LSI legend to help balance the water</p>
                                    </div>
                                </div>
                                <!-- Slide_3 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-3.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Powerful LSI calculator with desired levels and history (borates are optional)</p>
                                    </div>
                                </div>
                                <!-- Slide_4 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-4.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Manage your clients and see who is late on payment</p>
                                    </div>
                                </div>
                                <!-- Slide_5 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-5.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Add one or more properties per client to manage all service work</p>
                                    </div>
                                </div>
                                <!-- Slide_6 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-6.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Manage equipments, extra items, and shopping items used for each property</p>
                                    </div>
                                </div>
                                <!-- Slide_7 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-7.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">All company service visits at your fingertips - quickly see exceptions</p>
                                    </div>
                                </div>
                                <!-- Slide_8 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-8.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">See your tech’s check-in and photo locations on the map</p>
                                    </div>
                                </div>
                                <!-- Slide_9 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-9.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Manage all repair work and quick see approval and scheduling status</p>
                                    </div>
                                </div>
                                <!-- Slide_10 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-10.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">See the dosage history during the service stop</p>
                                    </div>
                                </div>
                                <!-- Slide_11 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-11.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Manage shopping list items for your company, service routes and jobs</p>
                                    </div>
                                </div>
                                <!-- Slide_12 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-12.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Send quotes, review job history and manage jobs</p>
                                    </div>
                                </div>
                                <!-- Slide_13 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-13.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">See if closed jobs have an invoice attached (bill icon)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- ==== Section App_Slider  (Mobile view) === -->
    <section class="mobile-app-slider primary_color_bg text-center py-5 app-slider">
        <div class="circle pb-2">
            <img class="img-fluid" src="images/ellipse.png">
            <img class="img-fluid" src="images/ellipse.png">
            <img class="img-fluid" src="images/ellipse.png">
        </div>
        <div class="d-flex align-items-center justify-content-center pb-4">
            <h3 class="secondary_color_text fw-500 font_22 linehight_26 m-0">App</h3>
            <h3 class="text-white fw-500 font_22 linehight_26 ps-2 m-0">Screenshots</h3>
        </div>
        <p class="text-white font_12 linehight_19 pb-4 m-0 px-5">
            Run your service business in the office or on-the-go with these features and many more!
        </p>
        <div class="fade-slider">
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-1.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Track readings and dosages - quickly tap in the last value</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-2.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Use the LSI legend to help balance the water</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-3.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Powerful LSI calculator with desired levels and history (borates are optional)</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-4.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Manage your clients and see who is late on payment</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-5.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Add one or more properties per client to manage all service work</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-6.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Manage equipments, extra items, and shopping items used for each property</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-7.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">All company service visits at your fingertips - quickly see exceptions</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-8.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">See your tech’s check-in and photo locations on the map</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-9.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Manage all repair work and quick see approval and scheduling status</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-10.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">See the dosage history during the service stop</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-11.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Manage shopping list items for your company, service routes and jobs</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-12.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">Send quotes, review job history and manage jobs</p>
            </div>
            <div><img class="img-fluid m-auto w-50" src="images/app-slider-12.svg" alt="App Slider" />
                <p class="text-white text-center pt-3 font_12 linehight_19 m-0 px-4">See if closed jobs have an invoice attached (bill icon)</p>
            </div>
        </div>
    </section>
    <!-- === Section Pricing Table === -->
    <section class="pricing-table pt-5" id="pricing_tables">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 pb-3 m-0">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                </div>
                <div class="col-12">
                    <h3 class="primary_color_text tag-title pb-2 m-0 text-center fw-500">Subscription<span class="secondary_color_text tag-title ps-1 text-center">Plans</span></h3>
                    <p class="linehight_19 font_16 dark_gray text-center m-0">No Contract. No Commitments. Cancel Anytime.</p>
                    <p class="linehight_19 font_16 dark_gray text-center m-0 p-0">Annual plans are available with a 10% discount</p>
                </div>
            </div>
            <div class="row mt-5">
                <!-- (Pricing Table_1) -->
                <div class="col-6 col-md-6 col-lg-3 text-center price position-relative mb-5">
                    <a href="/free-signup">
                        <div class="pricing_card mb-4">
                            <div class="position-relative">
                                <span class="priving-card__header position-absolute">
                                    <h3 class="subtitle m-0 text-white fw_500">Free</h3>
                                </span>
                                <img src="/images/pricing-head.svg" class="img-fluid w-100" alt="Pricing Head">
                            </div>
                            <div class="card-body px-xl-3 px-lg-1 py-4">
                                <h4 class="p-subtitle grey text-center fw-500 my-3">Free Plan</h4>
                                <input type="text" id="got_to_pricing" class="got_to_pricing" />
                                <ul class="list-unstyled my-3">
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck1">Up to 10* Clients</small>
                                    </li>
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="flexCheckDefault2">All Features Included</small>
                                    </li>
                                </ul>
                                <a href="/free-signup" class="button_btn text-decoration-none pricing-btn align_items m-auto my-3">Sign
                                    Up</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- (Pricing Table_2) -->
                <div class="col-6 col-md-6 col-lg-3 text-center price position-relative mb-5">
                    <a href="/company-signup">
                        <div class="pricing_card mb-4">
                            <div class="position-relative">
                                <span class="priving-card__header position-absolute">
                                    <h3 class="subtitle m-0 text-white fw_500">$49.50</h3>
                                    <p class="per-month text-white fw_500 m-0">Per Month</p>
                                </span>
                                <img src="/images/pricing-head.svg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-body px-xl-3 px-lg-1 py-4">
                                <h4 class="p-subtitle grey text-center fw-500 my-3">Startup Plan</h4>
                                <ul class="list-unstyled my-3">
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck3">11 to 40* Clients</small>
                                    </li>
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck4">All Features Included</small>
                                    </li>
                                </ul>
                                <a href="/company-signup" class="button_btn text-decoration-none pricing-btn align_items m-auto my-3">Sign
                                    Up</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- (Pricing Table_3) -->
                <div class="col-6 col-md-6 col-lg-3 text-center price position-relative mb-5">
                    <a href="/company-signup">
                        <div class="pricing_card mb-4">
                            <div class="position-relative">
                                <span class="priving-card__header position-absolute">
                                    <h3 class="subtitle m-0 text-white fw_500">$99</h3>
                                    <p class="per-month m-0 text-white fw_500">Per Month</p>
                                </span>
                                <img src="/images/pricing-head.svg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-body px-xl-3 px-lg-1 py-4">

                                <h4 class="p-subtitle grey text-center fw-500 my-3">Standard Plan</h4>
                                <ul class="list-unstyled my-3">
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck5">41 to 300* Clients</small>
                                    </li>
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck6">All Features Included</small>
                                    </li>
                                </ul>
                                <a href="/company-signup" class="button_btn text-decoration-none pricing-btn align_items m-auto my-3">Sign
                                    Up</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- (Pricing Table_4) -->
                <div class="col-6 col-md-6 col-lg-3 text-center price position-relative mb-5">
                    <a href="/company-signup">
                        <div class="pricing_card mb-4">
                            <div class="position-relative">
                                <span class="priving-card__header position-absolute">
                                    <h3 class="subtitle m-0 text-white fw_500">${{env('Per_Client_Price')}}</h3>
                                    <p class="per-month text-white fw_500 m-0">Per Client / Per Month</p>
                                </span>
                                <img src="/images/pricing-head.svg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-body px-xl-3 px-lg-1 py-4">

                                <h4 class="p-subtitle grey text-center fw-500 my-3">Enterprise Plan</h4>
                                <ul class="list-unstyled my-3">
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck7">301+ Clients</small>
                                    </li>
                                    <li class="text-start ps-xl-4 px-lg-2">
                                        <img class="img-fluid" src="images/yes.png" alt="select icon">
                                        <small class="font_16 linehight_34 dark_gray" for="defaultCheck8">All Features Included</small>
                                    </li>
                                </ul>
                                <a href="/company-signup" class="button_btn text-decoration-none pricing-btn align_items m-auto my-3">Sign Up</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <p class="linehight_19 font_16 dark_gray text-center p-text mb-0">*Plan pricing range is considering one property per client. A property is any body of water to track.</p>
            <p class="linehight_19 font_16 dark_gray text-center p-text m-0">Please <a href="/contact-support" class="primary_color_text bold">contact us</a> for detailed information and we’ll be happy to help.</p>
        </div>
    </section>

    <!-- === Section Customer Support (Desktop View) === -->
    <section class="customer-support">
        <div class="secondary_container container">
            <div class="row box-shadow">
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" src="images/customer-suport.svg" alt="Customer Support">
                </div>
                <div class="col-12 col-md-8 pt-5">
                    <h3 class="primary_color_text tag-title m-0 fw-500">World-Class</h3>
                    <h3 class="secondary_color_text tag-title m-0 fw-500">Customer Support</h3>
                    <p class="font_16 linehight_19 pt-3 m-0 rubik-font dark_gray">We want to make sure PSS is always providing real value to your business. If you have any questions or doubts then please don’t hesitate! We are here to help and pride ourselves by the level of support we provide our customers.
                    </p>
                    <a href="/contact-support" class="button_btn text-decoration-none see-more secondary_color_bg text-white align_items mt-4">Contact Support</a>
                </div>
            </div>
        </div>
    </section>

    <!-- === Section Customer Support (Mobile View) === -->
    <section class="mobile-customer-support text-center pb-5">
        <div class="container">
            <h3 class="primary_color_text m-tag-title m-0 fw-500">World-Class</h3>
            <h3 class="secondary_color_text m-tag-title m-0 fw-500">Customer Support</h3>
            <img class="img-fluid" src="images/mobile-customer-suport.svg" alt="Customer Support">
            <p class="font_12 linehight_19 m-0 dark_gray mt-4 mb-2 px-5">We want to make sure PSS is always providing real value to your business.
            </p>
            <p class="font_12 linehight_19 m-0 dark_gray mb-2 px-5">If you have any questions or doubts then please don’t hesitate!</p>
            <p class="font_12 linehight_19 m-0 dark_gray mb-4 px-5">We are here to help and pride ourselves by the level of support we provide our customers.</p>
            <a href="/contact-support" class="button_btn text-decoration-none see-more secondary_color_bg text-white align_items m-auto">Contact Support</a>
        </div>
    </section>

    <!-- === Section See What Other Story (Desktop View) === -->
    <section class="we-work customer-reviews">
        <div class="secondary_container container">
            <div class="row align-items-center mb-5 py-4">
                <div class="col-12 col-sm-1">
                    <img class="img-fluid" src="images/rectangle.svg" alt="Border Line">
                </div>
                <div class="col-12 col-sm-6">
                    <strong class="secondary_color_text tag-title fw-500">See What</strong>
                    <strong class="primary_color_text tag-title fw-500 ps-2">Others Say</strong>
                </div>
                <div class="col-12 col-sm-5 d-flex justify-content-center">
                    <a href="/testimonial" class="button_btn text-decoration-none see-more secondary_color_bg text-white align_items">See More Reviews</a>
                </div>
            </div>
    </section>

    <!--- Customer Cards (Desktop View) --->
    <section class="customer-cards">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                            <p class="linehight_19 font_14 dark_gray m-0">PSS has been a game changer for my business. It has allowed me to become way more organized, stay on top of billing and to effortlessly communicate with my clients. My techs and I enjoy using the user-friendly interface. I’ve been on several platforms and PSS is the first that I have truly enjoyed using</p>
                            <strong class="font_18 linehight_19 fw-500 grey">Dean Ouellette (Arizona)</br>Big Family Pools</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center blue-bg">
                            <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                            <p class="linehight_19 font_14 dark_gray m-0">PSS is amazing. I was looking for an app like this one. I was doing all my work on a paper, even chemical readings and dosages. Also I was sending text messages to clients when they were late, now I don’t have to worry about anything. It makes my life easier and what I like is how the PSS team is always improving the app. I have been using it for a while now. Thank you!</p>
                            <strong class="font_18 linehight_19 fw-500 grey">Adonis (Georgia)</br>Adonis Pool Service</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                            <p class="linehight_19 font_14 dark_gray m-0">We've tried other apps, but PSS is our last.
                                It is so easy to use with our employees, customers & tracking.
                                Customer service is exceptional & quick.
                            </p>
                            <strong class="font_18 linehight_19 fw-500 grey">Richard & Terri Schwenzer (Hawaii)<br />Blue Water Pool & Spa</strong>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="dapp"></div>
    </section>

    <!-- === Section See What Other Story & Customer Cards (Mobile View) === -->
    <section class="mobile-customer-card text-center mb-5">
        <div class="container">
            <div class="circle pb-2">
                <img class="img-fluid" src="images/ellipse.png">
                <img class="img-fluid" src="images/ellipse.png">
                <img class="img-fluid" src="images/ellipse.png">
            </div>
            <strong class="secondary_color_text m-tag-title fw-500">See What</strong>
            <strong class="primary_color_text m-tag-title fw-500 ps-1">Others Say</strong>
            <div class="card my-4">
                <div class="card-body p-0">
                    <img class="img-fluid" src="images/stars.svg" alt="Stars">
                    <p class="linehight_19 font_10 dark_gray m-0 py-4">Love it!<br>
                        Moved my entire company from PTPM to PSS. So glad I did! Their customer service is TOP NOTCH. Software improvements come out faster than others I’ve tried over the last few years. And they take every suggestion for feature or tweaks to heart and see if it’ll will for the overall experience. You won’t be disappointed.
                    </p>
                    <h6 class="font_12 linehight_14 fw-500 grey m-0">Dean Ouellette (Arizona)</h6>
                    <h6 class="font_12 linehight_14 fw-500 grey m-0">Big Family Pools</h6>
                </div>
            </div>
            <div class="col-12 col-sm-5 d-flex justify-content-center m-auto">

                <a href="/testimonial" class="button_btn text-decoration-none see-more secondary_color_bg text-white align_items">See More Reviews</a>
            </div>

        </div>

    </section>

    <!-- === Section Get_App (Desktop View) === -->

    <section class="get-app primary_color_bg pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="img-fluid app-ipad" src="images/app-ipad.svg" alt="Ipad Image">
                    <img class="img-fluid mobile-equipment" src="images/mobile-equipment.svg" alt="Mobile Equipment">
                </div>
                <div class="col-12 col-md-6">
                    <div class="circle pt-5">
                        <img class="img-fluid" src="images/ellipse.png">
                        <img class="img-fluid" src="images/ellipse.png">
                        <img class="img-fluid" src="images/ellipse.png">
                    </div>
                    <div class="d-flex align-items-center pb-3 pt-2">
                        <h3 class="text-white tag-title m-0 fw-500">Get The App</h3>
                        <h3 class="secondary_color_text tag-title m-0 ps-2 fw-500">Now !</h3>
                    </div>
                    <p class="text-white rubik-font linehight_19 font_16">PSS supports both tablet and smartphone devices that are built on Apple iOS or Google Android.</p>
                    <p class="text-white rubik-font linehight_19 font_16">Don’t leave your business behind in the Stone Age. Efficiently run your business and delight your customers!</p>
                    <div class="download-app pt-2">
                        <a href="https://itunes.apple.com/us/app/pool-service-software/id986000636?ls=1&mt=8" target="_blank"><img class="img-fluid button_btn" src="images/download-app-aple.svg" alt="Download Apple App"></a>
                        <a href="https://play.google.com/store/apps/details?id=com.poolserviceusa.poolserviceusa" target="_blank"><img class="img-fluid button_btn" src="images/google-play.svg" alt="Download Android App"></a>
                    </div>
                </div>
            </div>
    </section>

    <!-- === Section Get_App (Mobile View) === -->
    <section class="mobile-get-app primary_color_bg text-center p-5" id="dapp">
        <div class="circle pb-2">
            <img class="img-fluid" src="images/ellipse.png">
            <img class="img-fluid" src="images/ellipse.png">
            <img class="img-fluid" src="images/ellipse.png">
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <h3 class="text-white m-tag-title m-0 fw-500">Get The App</h3>
            <h3 class="secondary_color_text m-tag-title m-0 ps-1 fw-500">Now !</h3>
        </div>
        <img class="img-fluid py-4" src="images/get-app-m.svg" alt="Get App">
        <p class="linehight_19 font_12 text-white">PSS supports both tablet and smartphone devices that are built on Apple iOS or Google Android.</p>
        <p class="linehight_19 font_12 text-white">Don’t leave your business behind in the Stone Age. Efficiently run your business and delight your customers!</p>
        <div class="download-app pt-2">
            <a href="https://itunes.apple.com/us/app/pool-service-software/id986000636?ls=1&mt=8" target="_blank"><img class="img-fluid button_btn" src="images/download-app-aple.svg" alt="Download Apple App"></a>
            <a href="https://play.google.com/store/apps/details?id=com.poolserviceusa.poolserviceusa" target="_blank"><img class="img-fluid button_btn" src="images/google-play.svg" alt="Download Android App"></a>
        </div>
    </section>

    <!-- === Section Contact Us === -->
    <section class="contact-us" id="getdemo">
        <div class="container">
            <div class="row widget-shadow widget-contact">
                <div class="col-12 col-md-6">
                    <div class="circle pb-2">
                        <img class="img-fluid" src="images/ellipse.png">
                        <img class="img-fluid" src="images/ellipse.png">
                        <img class="img-fluid" src="images/ellipse.png">
                    </div>
                    <div class="d-flex align-items-center get-demo">
                        <h3 class="secondary_color_text tag-title m-0 fw-500">Get</h3>
                        <h3 class="primary_color_text tag-title m-0 ps-2 fw-500">Demo</h3>
                    </div>
                    <p class="dark_gray font_16 linehight_19 pe-5">Please complete and submit this form to receive an email with our demo video. 
                    </p>
                    <p class="dark_gray font_16 linehight_19 pe-5">If you have any questions, please do not hesitate to reach out to our support team. You can also request for a demo session with one of our Customer Success team members.
                    </p>
                    <div class="download-app pt-2 text-center">
                        <img class="img-fluid d-lg-block d-none m-auto" src="images/demo.svg" alt="Get Demo Icon">
                        <img class="img-fluid d-block d-lg-none m-auto" src="images/ottr-home-mobile.svg" alt="Get Demo Icon">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5">
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
                            <button type="button" class="btn text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg create-ticket get-demo-submit in-center">Request Demo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('script')
<script>
    var got_to_pricing = '<?php echo isset($_GET['got_to_pricing']) ? $_GET['got_to_pricing'] : ''; ?>';


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

            if (got_to_pricing != '') {
                setTimeout(function() {

                    $("#got_to_pricing").focus();

                }, 1000);
                setTimeout(function() {


                    $("#got_to_pricing").hide();
                }, 1000);

            }
            setTimeout(function() {


                $("#got_to_pricing").hide();
            }, 2000);

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
                    window.scrollTo(1000, 6000);
                    return false;
                } else {
                    $('input[name="FNAME"]').addClass('is-valid');
                }
                if (LNAME == '') {
                    $('input[name="LNAME"]').addClass('is-invalid');
                    $('.LNAME-error').html('<div class="invalid-feedback" id="">Last Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6000);
                    return false;
                } else {
                    $('input[name="LNAME"]').addClass('is-valid');
                }
                if (email == '') {
                    $('input[name="EMAIL"]').addClass('is-invalid');
                    $('.EMAIL-error').html('<div class="invalid-feedback" id="">Email is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6100);
                    return false;
                }
                if (!email.match(mailformat)) {
                    $('input[name="EMAIL"]').addClass('is-invalid');
                    $('.EMAIL-error').html('<div class="invalid-feedback" id="">Add a correct email address.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6100);
                    return false;
                } else {
                    $('input[name="EMAIL"]').addClass('is-valid');
                }
                if (COMPNAME == '') {
                    $('input[name="COMPNAME"]').addClass('is-invalid');
                    $('.COMPNAME-error').html('<div class="invalid-feedback" id="">Business Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6200);
                    return false;
                } else {
                    $('input[name="COMPNAME"]').addClass('is-valid');
                }
                if (PHONE == '') {
                    $('input[name="PHONE"]').addClass('is-invalid');
                    $('.PHONE-error').html('<div class="invalid-feedback" id="">Phone is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6200);
                    return false;
                }
                if (!phone.match(phoneformat)) {
                    $('input[name="PHONE"]').addClass('is-invalid');
                    $('.PHONE-error').html('<div class="invalid-feedback" id="">Enter a valid Phone.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6200);
                    return false;
                } else {
                    $('input[name="PHONE"]').addClass('is-valid');
                }

                if (CLIENTCNT == '-2') {
                    $('select[name=CLIENTCNT]').addClass('is-invalid set-icon');
                    $('.CLIENTCNT-error').html('<div class="invalid-feedback" id="">Client Count is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6200);
                    return false;

                } else {
                    $('select[name=CLIENTCNT]').addClass('is-valid');
                }

                if (SOURCE == '-2') {
                    $('select[name=SOURCE]').addClass('is-invalid');
                    $('.SOURCE-error').html('<div class="invalid-feedback" id="">Source is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 6200);
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
