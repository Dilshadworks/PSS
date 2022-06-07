@extends('layouts.app')

@section('content')

<!-- ==== Page Faq Main Content Start === -->
<main>
    <section class="page-faq mt-5">
        <div class="secondary_container container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="circle in-center">
                        <img class="img-fluid" src="/images/ellipse.png">
                        <img class="img-fluid" src="/images/ellipse.png">
                        <img class="img-fluid" src="/images/ellipse.png">
                    </div>
                    <div class="d-flex align-items-center pt-2 justify-content-center">
                        <h3 class="primary_color_text tag-title m-0 in-center">FREQUENTLY</h3>
                        <h3 class="secondary_color_text tag-title m-0 ps-2 in-center">ASKED</h3>
                    </div>
                </div>
            </div>
            <!-- ==== FAQ Start === -->
            <section class="faq-main">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer">How are invoice payments sent to my bank?</label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        We use Stripe as our payment merchant. We have a step-by-step walk-through in setting up Stripe with PSS. Stripe charges 2.9% plus 30 cents per transaction. Stripe will bundle several online payments made by your clients on a single day and then send them to your bank account after two business days (for USA based bank accounts).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer2" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer2">
                                What kind of service reports are sent to my clients?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        We have customizable service report templates (for jobs and regular maintenance stops) where you can define your logo, colors, show/hide sections (e.g. tech comments and media items), show/hide readings, dosages, checklist and attention items. You can also decide which service properties receive service reports through email, sms, both or none (in case no service report is to be sent).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer3" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer3">
                                Can I hide client phone numbers from my techs?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        Yes, you optionally hide all your client phone numbers from a particular tech.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer4" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer4">
                                What support is available during and after setup?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        We pride ourselves by the level of support we provide our clients. You can always contact us by clicking on the Contact Support button at the bottom. Also, we have several in-app tutorials for you to walk-through at your own pace. There is a Get Started checklist and Help Center in the app when you log in to help you through the setup. If you can’t find what you are looking for in the in-app resources, then please do not hesitate to reach out!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer5" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer5">
                                Can I track my profit per property?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        Yes, we have various features and tools in the software to give you this insight very quickly and easily (e.g. dosage costs, gas costs, labor costs, etc.)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer6" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer6">
                                How can I enter or transfer my clients into PSS?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        We offer three main ways to enter your client information:
                                            <span class="d-block ps-3 pt-2">i. &nbsp; Manually enter using the client form in the software</span>
                                            <span class="d-block ps-3">ii. &nbsp; CSV file import. We provide a spreadsheet template to fill out
                                            (or copy and paste) with all your client info. Afterwards, the
                                            CSV is uploaded into PSS and all your clients are created!</span>
                                            <span class="d-block ps-3">iii. &nbsp; QuickBooks Online import. We have a QBO integration feature
                                            that makes it very easy and quick to import all your clients into
                                            PSS from QBO.</span>
                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer7" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer7">
                                How can I confirm my techs are doing the work?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        PSS has a feature to geo-locate your techs when they check-in on a service stop. We also geo-locate every camera photo/video they take during the service stop so that you can quickly refer to it later and verify the tech’s work on a map. The tech can also take Before, After and Review photos/videos and you can also track if those photos/videos came from the tech’s camera or gallery on the device.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer8" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer8">
                                Can I use PSS if I am a single poler?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        Absolutely! We have designed PSS with ease-of-use in mind - powerful, yet simple. We have separated features so that you use those that you care about, and ignore the rest. We also have a FREE plan so that you can start with 10 clients or less and give it a whirl! We are always here to help! :)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer9" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer9">
                                Do you offer separate training packages?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        Enterprise customers (300+ clients) that have many employees and require extensive training can purchase a separate training package - please contact support for more details. We’ve successfully onboarded enterprise customers FREE of charge because they only needed 2-3 meetings. So if you have a team that knows a bit about software, you may not need to purchase a training package.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 faq-drawer">
                            <input class="faq-drawer__trigger" id="faq-drawer10" type="checkbox" />
                            <label class="faq-drawer__title primary_color_bg px-4 rounded w-100 py-3 text-white border-0 linehight_19 sm-fonts font_18 fw_500 text-start" for="faq-drawer10">
                                Do you have recurring invoices?
                            </label>
                            <div class="faq-drawer__content-wrapper">
                                <div class="faq-drawer__content">
                                    <p class="card card-body rounded-bottom dark_gray font_14 sm-fonts linehight_19 px-4 pt-2">
                                        Yes, we have recurring invoices and we have added optional features specific to the pool industry (e.g. invoice per service stop, automatically include dosage costs, etc.). With recurring invoices, invoices are automatically created every month (or whatever time interval you define), which will save you a lot of time and money so that you can focus on other things, such as growing your business (or simply enjoying the extra time)!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==== Bottom_Section Start === -->
            <div class="widget-contact position-relative">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="widget-shadow">
                            <h3 class="primary_color_text tag-title">Have Another Question?</h3>
                            <p class="form-text-color">No worries, we got your back, please reach out to our support team</p>
                            <div class="d-inline-block mt-4 mb-4">
                                <a href="/contact-support" class="b-100-radious form-button md-btn secondary_color_bg text-white ms-auto text-decoration-none faq-btn">Contact Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection