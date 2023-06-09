@extends('layouts.master')

@section('title', 'Donate Now')

@section('content')

<style>
    .heading-main {
        color: #D59B2D;
        font-size: 1.80rem;
        position: relative;
        font-weight: 600;
        z-index: 1;
        margin-bottom: 3rem;
    }

    .faqs-sidebar {
        background: url(../images/man_with_hand.jpg) no-repeat center center;
        background-size: cover;
        padding: 1.8rem;
        border-radius: 10px;
        overflow: hidden;
    }
    .wide-tb-20 {
    padding-top: 20px;
    padding-bottom: 20px;
}
</style>

<script src="https://checkout.flutterwave.com/v3.js"></script>
<!-- <script src="https://js.paystack.co/v1/inline.js"></script>  -->
    <script>
        function makePayment() {
            var x = $("form").serializeArray();
            var vals=[];

            $.each(x, function(i, field) {
                vals[field.name]=field.value;
            });

             if(vals['email']!==''){
                 FlutterwaveCheckout({
                     public_key: "FLWPUBK-7c1d70351f180c452e677da44cdc13de-X",
                     tx_ref: new Date().getTime(),// vals['email'],
                     amount: vals['amount'],
                     currency: "GHS",
                     country: "GH",
                     payment_options: "card, mobilemoneyghana, ussd",
                     customer: vals,
                     callback: function (data) {
                         console.log(data);      
                     },
                     onclose: function() {
                         // close modal
                     },
                     customizations: {
                         title: "Because She Can",
                         description: "Please make your donations",
                         logo: "{{asset('assets/images/flutterlogo.jpeg')}}",
                     },
                 });
             }
            //if(vals["email"] !== "") {
                //let handler = PaystackPop.setup({
                    //key: "pk_live_9ba21ef45b5fa9701f368aa25f64283e1feb8c36", // Replace with your public key
                    //email: vals["email"],
                    //amount: vals["amount"] * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                    //currency: "GHS", // Use GHS for Ghana Cedis or USD for US Dollars
                    //ref: new Date().getTime(), // Replace with a reference you generated
                    //callback: function(response) {
                        //this happens after the payment is completed successfully
                        //var reference = response.reference;
                        //alert('Payment complete! Reference: ' + reference);
                        // Make an AJAX call to your server with the reference to verify the transaction
                    //},
                    //onClose: function() {
                        //alert('Transaction was not completed, window closed.');
                    //},
                //});
                //handler.openIframe();
            //}
        }
    </script>
</head>

    <main id="body-content" class="banner-top">
    <div class="container">
	<div class="row">
	<div class="alert  alert-dismissible" role="alert">
  <!-- <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> -->
  <!-- <strong><i class="fa fa-warning"></i> Danger!</strong>  -->
  <h4><p style="font-family: Impact; font-size: 18pt">Make Mobile Money Donations To <strong style="color:#477763">050 690 0543</strong></p></h4>
  <small>Network: <strong style="color:red">Vodafone</strong></small>
  <small>Name: <strong style="color:#477763">Because She Can LBG</strong></small>
  <small>NB:<strong style="color:#477763">Available to all networks</strong></small>
</div>
	</div>
</div>
        <!-- About Us Style Start -->
        <section class="wide-tb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h6 class="heading-main">
                            <small>Donation</small>
                            Thank you for supporting passionate women in Tech by donating to Because She Can
                        </h6>

                        <p>
                            This December, Because She Can is raising funds for The December for Women Who Code project.
                            This is an annual fundraising event organised to support women in Tech. This year, we are
                            procuring laptops for women/girls who are coding with phones/faulty laptops to support them
                            in excelling in their Tech careers. Your donation will make a huge difference in the life of
                            an aspiring woman in Tech.

                        </p>

                        <div class="donation-wrap">
                            <h3 class="h3-sm fw-5 txt-blue mb-3">
                                Select Your Donation Amount
                            </h3>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First name <sup class="sup">*</sup></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="donate_name"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <label>Last name <sup class="sup">*</sup></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="donate_last_name"
                                                required=""/>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Email Address <sup class="sup">*</sup></label>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="donate_email"  required=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone Number <sup class="sup">*</sup></label>

                                        <div class="form-group">
                                            <input id="tel" type="tel" class="form-control" name="donate_zip" required
                                            placeholder="eg +000 123 456 789" maxlength="14" name="phone" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Country <sup class="sup">*</sup></label>
                                        <div class="form-group">

                                            <select
                                                required=""
                                                class=" theme-combo donation-select js-example-basic-single form-control"
                                                name="state" style="height: 400px">
                                                <option value="">Select Country</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
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
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">
                                                    Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">
                                                    Christmas Island
                                                </option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
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
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
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
                                                <option value="Great Britain">Great Britain</option>
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
                                                <option value="Liechtenstein">Liechtenstein</option>
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
                                                <option value="Midway Islands">Midway Islands</option>
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
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">
                                                    Papua New Guinea
                                                </option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
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
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
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
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">
                                                    Sao Tome & Principe
                                                </option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
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
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">
                                                    Turks & Caicos Is
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
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
                                    <div class="col-md-6">
                                        <label>Amount <sup class="sup">*</sup></label>

                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="amount" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <script src="https://checkout.flutterwave.com/v3.js"></script>

                                    <button class="btn btn-default" type="button" onclick="makePayment()">
                                        <i data-feather="heart"></i> Donate Now
                                    </button>
                                </div>

                            </form>


                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- About Us Style Start -->
    </main>


    @endsection