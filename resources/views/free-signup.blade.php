@extends('layouts.app')
<!-- Event snippet for Get Demo Lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-375468631/73T7CMHL5vgCENfkhLMB'}); </script>
@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="page-free-signup widget-contact position-relative mt-4">
        <div class="container">
            <div class="circle text-center">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="primary_color_text tag-title m-0 fw-500 in-center">Sign</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-2 fw-500 in-center">Up</h3>
            </div>
            <div class="free-signup m-auto w-50">
                <form class="contact-form widget-shadow free-signup-form">
                    <input type="hidden" name="dvc" class="device">
                    <input type="hidden" name="osname" class="osname">
                    <input type="hidden" name="utcoffset" class="utcoffset">
                    <div class="row">
                        <!-- (First_Name) -->
                        <div class="col-6 col-sm-6 mb-4">
                            <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3">First Name</label>
                            <input required="" type="text" class="form-control linehight_19 font_16 error-form ps-3" id="exampleInputFirstName" aria-describedby="NameHelp" name="fname" placeholder="First Name">
                            <div class="fname-error erro-dev ps-3"></div>
                        </div>
                        <!-- (Last_Name) -->
                        <div class="col-6 col-sm-6 mb-4">
                            <label for="exampleInputLastName" class="form-label linehight_19 font_16 grey ps-3">Last Name</label>
                            <input required="" type="text" class="form-control linehight_19 font_16 error-form ps-3" id="exampleInputLastName" name="lname" placeholder="Last Name">
                            <div class="lname-error erro-dev ps-3"></div>
                        </div>
                        <!-- (Business_Name) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputBusiness" class="form-label linehight_19 font_16 grey ps-3">Business Name</label>
                            <input required="" type="Business" class="form-control linehight_19 font_16 error-form ps-3" id="exampleInputBusiness" name="cnm" placeholder="Business Name">
                            <div class="cnm-error erro-dev ps-3"></div>
                        </div>
                        <!-- (Address) -->
                        <div class="col-12 mb-4">
                            <label for="" class="form-label linehight_19 font_16 grey ps-3">Address</label>
                            <input type="address" class="form-control linehight_19 font_16 ps-3 error-form" id="pac-input" name="address" placeholder="Street Address" required>
                            <div class="address-error erro-dev ps-3"></div>
                        </div>
                        <!-- (City) -->
                        <div class="col-6 col-md-6 mb-4">
                            <label for="" class="form-label linehight_19 font_16 grey ps-3">City</label>
                            <input type="city" class="form-control linehight_19 font_16 ps-3 error-form" id="locality" aria-describedby="NameHelp" name="city" placeholder="City" required>
                            <div class="city-error erro-dev ps-3"></div>
                        </div>
                        <!-- (State/Province) -->
                        <div class="col-6 col-md-6 mb-4">
                            <label for="" class="form-label linehight_19 font_16 grey ps-3">State/Province</label>
                            <input type="state" class="form-control linehight_19 font_16 ps-3 error-form" id="state" aria-describedby="NameHelp" name="state" placeholder="State/Province" required>
                            <div class="state-error erro-dev ps-3"></div>
                        </div>
                        <!-- (Country) -->
                        <div class="col-12 mb-4">
                            <div class="form-group position-relative">
                                <label for="" class="form-label linehight_19 font_16 grey ps-3">Country</label>
                                <input type="state" class="form-control linehight_19 font_16 ps-3 error-form" id="country" aria-describedby="NameHelp" name="country" placeholder="Country" required>
                                <div class="country-error erro-dev ps-3"></div>
                            </div>
                        </div>
                        <!-- (Mobile_Number) -->
                        <div class="col-6 col-sm-6 mb-4">
                            <label for="exampleInputPhone" class="form-label linehight_19 font_16 grey ps-3">Mobile Phone</label>
                            <input required="" type="text" class="form-control linehight_19 font_16 error-form ps-3" id="exampleInputPhone" aria-describedby="PhoneHelp" name="phn" placeholder="Mobile Phone">
                            <div class="phn-error erro-dev ps-3"></div>
                        </div>
                        <!-- (Client_Count) -->
                        <div class="col-6 col-sm-6 mb-4">
                            <div class="form-group" id="categeory">
                                <label for="" class="form-label linehight_19 font_16 grey ps-3">Client Count</label>
                                <select class="js-example-placeholder-single form-control erro-class" id="" name="size" style="width: 100%">
                                    <option value="-2"></option>
                                    <option value="0-20">0-20</option>
                                    <option value="21-40">21-40</option>
                                    <option value="41-80">41-80</option>
                                    <option value="81-200">81-200</option>
                                    <option value="200+">200+</option>
                                </select>
                                <div class="size-error erro-dev ps-3"></div>
                            </div>
                        </div>
                        <!-- (Inline_Border) -->
                        <div class="user-or-pass d-flex align-items-center justify-content-between pt-3 pb-4">
                            <img class="img-fluid" src="images/line.svg" alt="line">
                            <small class="linehight_19 font_16 grey fw-500">Username and Password</small>
                            <img class="img-fluid" src="images/line.svg" alt="line">
                        </div>
                        <!-- (Email) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputEmail" class="form-label linehight_19 font_16 grey ps-3">Email</label>
                            <input required="" type="email" class="form-control linehight_19 font_16 error-form ps-3" id="exampleInputEmail" placeholder="This Will Be Your Username" name="eml">
                            <div class="eml-error erro-dev"></div>
                        </div>
                        <!-- (Password) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputPassword" class="form-label linehight_19 font_16 grey ps-3">Password</label>
                            <input required="" type="password" class="form-control linehight_19 font_16 error-form ps-3" id="exampleInputPassword" placeholder="Password" name="password">
                            <input type="hidden" name="pwd">
                            <div class="pwd-error erro-dev ps-3"></div>
                        </div>
                        <!-- (Form-Footer) -->
                        <!-- (Form-Footer) Desktop -->
                        <div class="d-lg-flex d-none align-items-center justify-content-between py-4">
                            <p class="linehight_19 font_16 grey text-center in-center m-0">Already have an Account?<a href="{{env('REDIRECT_DOMAIN')}}/login" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></p>
                            <button type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg free-signup-btn">Next Step</button>
                        </div>
                        <!-- (Form-Footer) for Mobile -->
                        <div class="d-block d-lg-none">
                            <a href="#" class="text-decoration-none secondary_color_bg text-white b-100-radious next-btn m-auto justify-content-center d-flex align-items-center free-signup-btn">Next Step
                            </a>
                            <p class="linehight_19 font_16 grey text-center in-center m-0 pt-3">Already have an Account?<a href="{{env('REDIRECT_DOMAIN')}}/login" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></p>
                        </div>

                        <!-- <div class="d-lg-flex align-items-center py-4 flex-lg-column-reverse in-center">
                            <button type="button" class="btn m-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg free-signup-btn">Next Step</button>
                            <p class="linehight_19 font_16 grey text-center in-center">Already have an Account?<a href="https://beta.poolservice.software/login" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></p>
                        </div> -->
                    </div>
                    <input type="hidden" name="dvc" class="dvc">
                    <input type="hidden" name="osnm" class="osnm">
                    <input type="hidden" name="email_exist" class="email_exist" value="yes">
                    <input type="hidden" name="zip" id="postcode">
                </form>
            </div>
    </section>
</main>
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
    var browser = detectBrowser();
    $('.dvc').val(browser);
    var osname = detectWindow();
    $('.osnm').val(osname);

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




    $(document).ready(
        function() {

            var website = '<?php echo env('REDIRECT_DOMAIN'); ?>';

            $('.device').val(detectBrowser());

            $('.osname').val(detectWindow());

            var date1 = new Date();
            date1 = date1.getTimezoneOffset();
            var date1 = utcformat(date1);
            $('.utcoffset').val(date1);

            $("#exampleInputEmail").focusout(function() {
                var useremail = $(this).val();
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                $('.erro-dev').html('');
                $('.error-form').removeClass('is-invalid');

                if (useremail == '') {
                    $('input[name="eml"]').addClass('is-invalid');
                    $('.eml-error').html('<div class="invalid-feedback" id="">Email is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 900);
                    return false;

                }

                if (!useremail.match(mailformat)) {

                    $('input[name="eml"]').addClass('is-invalid');
                    $('.eml-error').html('<div class="invalid-feedback" id="">Please enter a valid email.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 900);
                    return false;

                }

                $.ajax({
                    url: website+"api/isemailexist",
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
                            $('input[name="eml"]').addClass('is-invalid');
                            $('.eml-error').html('<div class="invalid-feedback" id="">Email is already taken.</div>');
                            $('.invalid-feedback').show();
                            $('.email_exist').val('yes');
                            return false;
                        } else {
                            $('input[name="eml"]').addClass('is-valid');
                            $('.email_exist').val('no');
                        }
                    }
                })

            })
            $(document).on('click', '.free-signup-btn', function() {
                $('.error-form').removeClass('is-invalid');
                $('.erro-dev').html('');
                fname = $('input[name="fname"]').val();
                lname = $('input[name="lname"]').val();
                cnm = $('input[name="cnm"]').val();
                phn = $('input[name="phn"]').val();
                eml = $('input[name="eml"]').val();
                pwd = $('input[name="password"]').val();
                country = $('input[name="country"]').val();
                address = $('input[name="address"]').val();
                state = $('input[name="state"]').val();
                city = $('input[name="city"]').val();
                size = $('select[name=size] option').filter(':selected').val();

                if (fname == '') {

                    $('input[name="fname"]').addClass('is-invalid');
                    $('.fnam-error').html('<div class="invalid-feedback">First Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="fname"]').addClass('is-valid');
                }
                if (lname == '') {

                    $('input[name="lname"]').addClass('is-invalid');
                    $('.lname-error').html('<div class="invalid-feedback">Last Name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 200);
                    return false;
                } else {

                    $('input[name="lname"]').addClass('is-valid');
                }
                if (cnm == '') {

                    $('input[name="cnm"]').addClass('is-invalid');
                    $('.cnm-error').html('<div class="invalid-feedback">Bussiness name is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 300);
                    return false;
                } else {
                    $('input[name="cnm"]').addClass('is-valid');
                }


                if (address == '') {

                    $('input[name="address"]').addClass('is-invalid set-icon');
                    $('.address-error').html('<div class="invalid-feedback">Enter the address with street number.</div>');
                    $('.invalid-feedback').show();
                     window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="address"]').addClass('is-valid');
                }
                if (city == '') {

                    $('input[name="city"]').addClass('is-invalid set-icon');
                    $('.city-error').html('<div class="invalid-feedback">city  is required.</div>');
                    $('.invalid-feedback').show();
                     window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="city"]').addClass('is-valid');
                }
                if (state == '') {

                    $('input[name="state"]').addClass('is-invalid set-icon');
                    $('.city-error').html('<div class="invalid-feedback">city  is required.</div>');
                    $('.invalid-feedback').show();
                     window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="state"]').addClass('is-valid');
                }
                if (country == '') {

                    $('input[name="country"]').addClass('is-invalid set-icon');
                    $('.country-error').html('<div class="invalid-feedback">country  is required.</div>');
                    $('.invalid-feedback').show();
                     window.scrollTo(1000, 200);
                    return false;
                } else {
                    $('input[name="country"]').addClass('is-valid');
                }
                if (phn == '') {

                    $('input[name="phn"]').addClass('is-invalid');
                    $('.phn-error').html('<div class="invalid-feedback">Phone is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 300);
                    return false;
                } else {
                    $('input[name="phn"]').addClass('is-valid');
                }
                if (size == '-2') {
                    $('select[name=size]').addClass('is-invalid set-icon');
                    $('.size-error').html('<div class="invalid-feedback" id="">Client Count is required.</div>');
                    $('.invalid-feedback').show();
                    window.scrollTo(1000, 400);
                    return false;

                } else {
                    $('select[name=size]').addClass('is-valid');
                }

                if (eml == '') {

                    $('input[name="eml"]').addClass('is-invalid');
                    $('.eml-error').html('<div class="invalid-feedback">Email is required.</div>');
                    $('.invalid-feedback').show();
                    return false;
                }
                if ($('.email_exist').val() == 'yes') {
                    $('input[name="eml"]').addClass('is-invalid');
                    $('.eml-error').html('<div class="invalid-feedback">Email already Exist.</div>');
                    $('.invalid-feedback').show();
                    return false;
                } else {
                    $('input[name="eml"]').addClass('is-valid');
                }
                if (pwd == '') {

                    $('input[name="password"]').addClass('is-invalid');
                    $('.pwd-error').html('<div class="invalid-feedback">Password is required.</div>');
                    $('.invalid-feedback').show();
                    return false;
                } else {
                    $('input[name="pwd"]').addClass('is-valid');
                }
                password = SHA256(pwd);
            $('input[name="pwd"]').val(password);
                form_data = $('.free-signup-form').serialize();
                $('.free-signup-btn').html('Loading ..');
                $.ajax({
                    url: website+"/api/new-company-reg",
                    type: "post",

                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {
                        console.log(response.message);
                        console.log("I am here");
                    },
                    success: function(response) {
                        window.location.replace("/signup-code-access?email=" + eml);
                    }
                })

            })
        }
    );
</script>
@endsection
