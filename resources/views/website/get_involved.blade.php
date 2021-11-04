@extends('layouts.master')

@section('title', 'Get Involved')

@section('content')
<style>
    .inner-intro {
        height: 660px;
        display: block;
    }

    .intro-title {
        display: table-cell;
        vertical-align: middle;
        padding-bottom: 30px;

    }

    .bg-1 {
        background: url(images/bg/aboutHeader.jpeg);
        background-clip: initial;
        background-color: rgba(0, 0, 0, 0.144);
        background-origin: initial;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover !important;
        position: relative;
        z-index: 0;
        /*background-attachment: fixed;*/
    }

    .bg-overlay-black-70:before {
        background: rgba(0, 0, 0, 0.411);
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -1;
    }

    @media only screen and (max-width: 600px) {
        .inner-intro {
            height: 410px;
            display: block;
        }

    }

    .owl-carousel .owl-item img {
        display: block;
        width: 100%;
        border-radius: 10px;
    }

    .topPad1 {
        padding-top: 200px;
    }


    .mega-menu.desktopTopFixed .menu-list-items {
        background: #323232;
        padding: 0px 30px 0px 30px;
    }

    .bg-img-6 {
        background-image: url(images/body-images/inclusion-policy.jpg);
        background-repeat: no-repeat;
        background-position: center center;
    }


    @media only screen and (max-width: 767px) {
        h1.heading-main {
            margin-bottom: 45px;
        }
    }

    .breadcrumbs-page {
        background-image: url(images/breadcrumbs.jpeg);
        background-repeat: no-repeat;
        background-position: top center !important;
        max-width: 100%;
        margin: 0 auto;
        z-index: 2;
        position: relative;
        border-radius: 0;
        padding-top: 158px;
    }

    .wide-tb-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .social-space {
        margin-right: 15px;
        cursor: pointer;
    }

    .vl {
        border-left: 1px solid grey;
        height: 100%;
    }

    .causes-wrap .img-wrap img {
        border-radius: 10px 10px 0 0;
        width: 100%;
    }


    .ruu.container {
        max-width: 1316px;

    }


    .heading-main {
        color: #D59B2D;
        font-size: 1.80rem;
        position: relative;
        font-weight: 600;
        z-index: 1;
        margin-bottom: 1rem;
    }

    .inner-title {
        display: table-cell;
        vertical-align: bottom;
        padding-top: 200px;
        text-align: left;
    }

    .icon-fluid {
        width: 37px;
        height: 37px;
        margin: 0;

    }

    .tag {
        float: left;
        position: relative;
        display: table;
        vertical-align: middle;
    }

    .icon-label {
        position: relative;
    }

    .tag {
        padding-right: 19px;
    }

    .tag strong {
        display: table-cell;
        /*    vertical-align: inherit;*/
        position: relative;
    }

    .tag strong {
        line-height: 1.4705882353;
        font-size: 17px;
        padding-left: 11px;
        padding-top: 4px;
    }

    icon-label icon-fluid .tag figure img {
        display: block;
        position: relative;
        width: auto;
        height: auto;
        max-height: 100%;
        max-width: 100%;
    }

    .text h4 {
        line-height: 1.2058823529;
        font-size: 24px;
    }

    .breadcrumbs-page h1 {
        color: #FFF;
        text-transform: capitalize;
        font-size: 3.5rem;
        font-weight: 500;
        line-height: 1.2;
        padding: 10rem 0;
    }

    html {
        scroll-behavior: smooth;
    }

    /* .home-second-donation-form .funds-committed {
        padding-left: 130px;
    } */

    @media only screen and (max-width: 600px) {
        .bg-fixed {
            height: 410px;
            display: block;
        }

        .inner-title {
            padding-top: 0px;
        }

        /*.topPad1 {
            padding-top: 5px;
        }*/

        .breadcrumbs-page h1 {
            color: #FFF;
            text-transform: capitalize;
            font-size: 1.6rem;
            font-weight: 500;
            line-height: 1.2;
            padding: 0rem 0;
        }

        .wide-tb-100 {
            padding-top: 10px;
            padding-bottom: 30px;
        }

    }

    #form-title {
        text-align: center !important;
    }


    .mx-auto2 {
        margin-right: 0 !important;
        margin-left: auto !important;

    }

    .mt-2x {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
    }
</style>
<!-- Page Breadcrumbs Start -->
<section class="breadcrumbs-page-wrap banner-top">
    <div class="bg-fixed pos-rel  breadcrumbs-page">
        <div class="container">
            <h1> Join our growing community of Tech Women
            </h1>
            <!-- <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore Programs</li>
                    </ol>
                </nav> -->
        </div>
    </div>
</section>
<!-- Page Breadcrumbs End -->
<!--=================================
 inner-intro -->


<!-- Donation Style Start -->
<section class="bg-white" id="V-form">
    <div class="ruu container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-lg-last">
                <div class="home-second-donation-form">
                    <div class="funds-committed">
                        <h3 class="h3-sm fw-7 txt-white mb-3" id="form-title" style="">Get Involved -
                            Become A Member </h3>
                    </div>


                    <form method="post" action="save_member" class="form-style">
                        {{csrf_field()}}

                        <div class="input-group">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="firstName"><strong>First Name</strong></label>
                                    <input type="text" class="form-control form-light" name="name"
                                        placeholder="Enter Your First Name">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="last_name"><strong> Last Name</strong></label>
                                    <input type="text" class="form-control form-light" name="last_name"
                                        placeholder="Enter Your Last Name">
                                </div>

                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="number"><strong>Phone Number </strong></label>
                                    <input type="tel" class="form-control form-light" name="phone"
                                        placeholder="eg. +233 12 345 6789" id="tel" maxlength="14" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="Residence"><strong>Country Of Residence </strong></label>
                                    <select class=" theme-combo donation-select js-example-basic-single form-control"
                                        name="state" style=" width: 100% !important;">
                                        <option>Select Country</option>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa
                                        </option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">
                                            Antigua & Barbuda
                                        </option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">
                                            Bosnia & Herzegovina
                                        </option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">
                                            British Indian Ocean Ter
                                        </option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso
                                        </option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands
                                        </option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands
                                        </option>
                                        <option value="Central African Republic">
                                            Central African Republic
                                        </option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands
                                        </option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">
                                            Christmas Island
                                        </option>
                                        <option value="Cocos Island">Cocos Island
                                        </option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands
                                        </option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire
                                        </option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic
                                        </option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">
                                            Dominican Republic
                                        </option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">
                                            Equatorial Guinea
                                        </option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">
                                            Falkland Islands
                                        </option>
                                        <option value="Faroe Islands">Faroe Islands
                                        </option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana
                                        </option>
                                        <option value="French Polynesia">
                                            French Polynesia
                                        </option>
                                        <option value="French Southern Ter">
                                            French Southern Ter
                                        </option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain
                                        </option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein
                                        </option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">
                                            Marshall Islands
                                        </option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands
                                        </option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">
                                            Netherland Antilles
                                        </option>
                                        <option value="Netherlands">
                                            Netherlands (Holland, Europe)
                                        </option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia
                                        </option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island
                                        </option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island
                                        </option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">
                                            Papua New Guinea
                                        </option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island
                                        </option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">
                                            Republic of Montenegro
                                        </option>
                                        <option value="Republic of Serbia">
                                            Republic of Serbia
                                        </option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy
                                        </option>
                                        <option value="St Eustatius">St Eustatius
                                        </option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis
                                        </option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">
                                            St Pierre & Miquelon
                                        </option>
                                        <option value="St Vincent & Grenadines">
                                            St Vincent & Grenadines
                                        </option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American
                                        </option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">
                                            Sao Tome & Principe
                                        </option>
                                        <option value="Saudi Arabia">Saudi Arabia
                                        </option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone
                                        </option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands
                                        </option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa
                                        </option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">
                                            Trinidad & Tobago
                                        </option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan
                                        </option>
                                        <option value="Turks & Caicos Is">
                                            Turks & Caicos Is
                                        </option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom
                                        </option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">
                                            United Arab Emirates
                                        </option>
                                        <option value="United States of America">
                                            United States of America
                                        </option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">
                                            Vatican City State
                                        </option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">
                                            Virgin Islands (Brit)
                                        </option>
                                        <option value="Virgin Islands (USA)">
                                            Virgin Islands (USA)
                                        </option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">
                                            Wallis & Futana Is
                                        </option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="input-group">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="email"><strong>Email Address</strong></label>
                                    <input type="email" class="form-control form-light" name="email"
                                        placeholder="e.g example@sitename.com">
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="Residence"><strong>What stage would you put yourself
                                            in*</strong></label>
                                    <select class=" theme-combo donation-select js-example-basic-single form-control"
                                        name="state" style=" width: 100% !important;">
                                        <option>Select Your Stage</option>
                                        <option value="1">I have established myself in a Tech field (3 + years of
                                            experience)</option>
                                        <option value="2">I literally just started my career in Tech (0-3 years of
                                            experience)</option>
                                        <option value="3">I'm in a tertiary institution studying in a Tech field
                                        </option>
                                        <option value="4">I have a growing interest in Tech
                                        </option>
                                        <option value="5">I have no clue what I'm doing in life</option>
                                        <option value="6">Tech seems cool. I'm curious about what I can learn with BSC
                                        </option>
                                        <option value="7">
                                            I just wanna join this awesome family and spread the word
                                        </option>

                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="msg"><strong>Any Other Thing We Should Know ?</strong></label>
                                    <textarea class="form-control form-light" rows="5" name="msg"></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-default mt-3 btn-block">Send Request</button>

                        </div>

                    </form>
                </div>
            </div>


            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <div class="col-lg-6 col-md-12">
                <div>

                    <h5 class="heading-main">
                        <small>On A Mission To Empower Women</small>
                        Become a BSC member — it’s free!
                    </h5>
                    <p>Joining the Because She Can community means that you are joining a community of like-minded women
                        who care. You are joining a community who is interested in seeing you grow and is willing to
                        lend a hand and a listening ear.
                    </p>
                    <p>
                        As a member you’ll have the opportunity to connect directly with women in the Tech industry who
                        will help you grow professionally. You will learn about the variety of options, careers and
                        knowledge available to you in the world of Technology. Its free to join.

                    </p>
                    <!-- <div class="row my-5 home-second-welcome">
                        <div class="col-sm-6 mb-md-0">
                            <div class="icon-box-1">
                                <i class="charity-volunteer_people"></i>
                                <div class="text">
                                    <h3>3,750 <br> <span>Memebers</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="icon-box-1">
                                <i class="charity-donate_money"></i>
                                <div class="text">
                                    <h3>14,800 <br> <span>Trusted Volunteers</span></h3>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->


        </div>
    </div>
</section>
<!-- Donation Style Start -->



<!--=================================
 our-service -->

<section class="our-service bg-white topPad1 " style="padding-bottom: 50px ;">
    <div class=" ruu container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img class="img-fluid" src="images/body-images/image-grid.png" alt="about-content-image"
                    style="border-radius:7px">
            </div>


            <div class="inner-title col-lg-offset-6 col-lg-6 bg-overlay-black-90 text">
                <h2 style="color: #D59B2D;">We are bridging the gender digital divide one girl at a time ! </h2>
                <p>
                    Whatever your time commitments, we value you and your time and appreciate your efforts and
                    contributions when you volunteer with us.
                    Do you want to join a team of diverse volunteers with different levels of expertise ?
                    We are an equal opportunity employer and strongly encourage you to apply.

                </p>

                <div class="row">
                    <div class="col-lg-10 mx-auto2 welcome-home-first">

                        <div class="text-center mt-2x text-md-right">
                            <a href="javascript:void" class="btn btn-default" id="myBtn">Apply as a volunteer</a>
                        </div>
                        @include('website.volunteer_form')

                    </div>
                </div>
                <!-- <div class="icon-label">
                    <span class="tag">
                        <figure class="icon-fluid">
                            <img class="img-fluid" src="images/body-images/EducationIcon.png" alt="about-content-image">
                        </figure>
                        <strong>Education</strong>

                    </span>


                    <span class="tag">
                        <figure class="icon-fluid">
                            <img class="img-fluid" src="images/body-images/CommunityIcon.png" alt="about-content-image">

                        </figure>
                        <strong>Community</strong>
                    </span>

                    <span class=" tag">
                        <figure class="icon-fluid">
                            <img class="img-fluid" src="images/body-images/ExperiencesIcon.png"
                                alt="about-content-image">

                        </figure>
                        <strong>Community</strong>
                    </span>
                </div> -->
            </div>

        </div>

    </div>

</section>

<!--=================================
   our-service -->

<!--=================================
 our-service -->

<section class=" our-service bg-white topPad " style=" padding-bottom: 50px ;">

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2>Remember starting out in your tech journey ?
                    <br>Did you have a mentor?
                </h2>
                <p>If yes, you probably have a good idea how important having a mentor to guide you in your field is.
                    <br>
                    Volunteer with us as a mentor. Help mentor the next generation of women in tech. <br>
                    Join our on-demand pool of mentors with diverse skills and levels of expertise.

                </p>
            </div>
        </div>
    </div>
    <div class="container three-columns columns-wrap">
        <div class="row" style="text-align: center;">
            <!-- image 1 -->

            <div class="col-12 col-md-4 text-center">
                <figure>
                    <img width="260" height="260" src="images/team/afi.jpeg" class="" alt="" loading="lazy">
                </figure>
                <div class="text">
                    <h4>Share knowledge</h4>
                    <p>Add a new skill to your resume, or change career tracks. </p>
                </div>
            </div>
            <!-- imgae 2 -->
            <div class="col-12 col-md-4 text-center">
                <figure>
                    <img width="260" height="260" src="images/team/otema.jpeg" class="" alt="" loading="lazy">
                </figure>
                <div class="text">
                    <h4>Motivate & support</h4>
                    <p>Learn from a mentor, and connect with other professionals.</p>
                </div>
            </div>
            <!-- image 3 -->
            <div class="col-12 col-md-4 text-center">
                <figure>
                    <img width="260" height="260" src="images/team/samira.jpeg" class="" alt="" loading="lazy">
                </figure>
                <div class="text">
                    <h4>Develop leadership skills</h4>
                    <p>Make your next move. Our Jobs Board has new listings every week.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a class="nav-link btn btn-default ml-3 donate-btn" href="#V-form">Apply to be a mentor</a>
                <!-- <p>Be a part of something great. Membership is free.</p> -->
            </div>
        </div>
    </div>
</section>

<!--=================================
   our-service -->


<!-- Callout to donate Style Start -->
<section class="  bg-scroll bg-img-1 pos-rel callout-style-1" style="padding-top: 100px;padding-bottom:100px; ">
    <div class="bg-overlay black opacity-50"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <h1 class="heading-main light-mode orange" style="font-size: 1.4rem !important;">
                    <small style="color:#D59B2D !important; font-size:14px">Your donations go a long way to ensure we
                        achieve our goal </small>
                    Proceeds from all donations go directly into supporting women in technology through workshops,
                    coding bootcamps and mentorship initiatives and procurement of resources like computers and course
                    vouchers for underprivileged women wanting to make their debut into the tech space.
                </h1>
                <a href="donation" class="btn btn-default">Donate Now</a>
            </div>
        </div>
    </div>
</section>
<!-- Callout  to donate Style End -->


<!-- Images Gallery Style Start -->
<section class="wide-tb-100 bg-white">
    <div class="container">
        <div class="row img-gallery slider-link popup-video">
            <div class="col-lg-4">
                <h1 class="heading-main mb-lg-0">
                    <small>Images Gallery</small>
                    Project We Have Done
                </h1>
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="School Development">
                        <div class="gallery-content">
                            <div class="tag"><span>Jobs Board</span></div>
                            <h3>Discover the job that’s right for you.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Workshops</span></div>
                            <h3>Expand your skillset.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Personal Development</span></div>
                            <h3>Develop your soft skills.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Digital Events</span></div>
                            <h3>Webinars, virtual hackathons and more.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Local Events</span></div>
                            <h3>Find your next hire — or new friend</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Workshops</span></div>
                            <h3>Expand your skillset</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Mentorship</span></div>
                            <h3>Lean on an experienced member.</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Gallery Item -->
                <div class="img-gallery-item">
                    <a href="images/body-images/members/BCG.jpeg" title="Child Welfare">
                        <div class="gallery-content">
                            <div class="tag"><span>Conferences</span></div>
                            <h3>Build your skills — and your community</h3>
                            <div class="img-open">
                                <i data-feather="plus-circle"></i>
                            </div>
                        </div>
                        <img src="images/body-images/members/BCG.jpeg" alt="">
                    </a>
                </div>
                <!-- Gallery Item -->
            </div>

        </div>
    </div>
</section>

<!-- 
<script>
    function inpNum(e) {
        e = e || window.event;
        var charCode = (typeof e.which == "undefined") ? e.keyCode : e.which;
        var charStr = String.fromCharCode(charCode);
        if (!charStr.match(/^[0-9]+$/))
            e.preventDefault();
    }
</script> -->
<!-- Images Gallery Style End -->

@endsection