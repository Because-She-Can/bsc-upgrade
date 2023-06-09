<!--Volunteer Modal CSS -->
<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        z-index: 1000;

    }

    .select2-container {
        z-index: 1000;
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        color: #000;
    }

    /* The Close Button */
    .close {
        color: #160202;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 760px) {
        #Vol-side-text {
            display: none;
        }

    }

    @media (max-width: 575px) {

        .become-volunteers .inner-form,
        .donation-wrap {
            padding: 2px
        }

        .modal-content {
            padding: 10px !important;
        }

    }
</style>
<!-- Volunteer Modal Css End -->


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <!-- About Us Style Start -->
        <section style="margin-top:20px;position:relative;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5 class="heading-main">
                            <small>We are bridging the gender digital divide, one girl at a time !
                            </small>
                        </h5>


                        <p>

                            Do you have 1 hour a year, 8 hours a week ?
                            Whatever your time commitments, we value you and your time and appreciate your efforts and
                            contributions when you volunteer with us.
                            Do you want to join a team of diverse volunteers with different levels of expertise ?
                            We are an equal opportunity employer and strongly encourage you to apply.


                        </p>

                        <div class="donation-wrap">
                            <form action="/save_volunteer" method="POST">
                            {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>First name <sup class="sup">*</sup></label>

                                            <input type="text" class="form-control" id="name" placeholder="First Name"
                                                name="first_name" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Last name <sup class="sup">*</sup></label>

                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder=" Enter Last Name" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Email Address <sup class="sup">*</sup></label>

                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email" name="email" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Phone Number <sup class="sup">*</sup></label>

                                            <input type="tel" id="tel" class="form-control"
                                                placeholder="Phone number ( Include country code)" maxlength="14" name="phone" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Country <sup class="sup">*</sup></label>

                                            <select
                                                class=" theme-combo donation-select js-example-basic-single form-control"
                                                name="country" style="height: 400pxx; width: 100% !important;">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Zip Code <sup class="sup">*</sup></label>

                                            <input type="text" class="form-control" id="zip" placeholder="Zip Code" name="zip" />
                                        </div>
                                    </div>

                                </div>

                                <h3 class="h3-sm fw-5 txt-blue mb-3 mt-3">Talk To Us</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="min-width: 100%;">
                                            <label for="how-you-know-us"><strong>Which volunteer roles are you
                                                    interested in? </strong> <sup class="sup">*</sup></label>

                                            <select
                                                class=" theme-combo donation-select js-example-basic-single form-control"
                                                id="how-you-know-us" name="role[]" style=" width: 100% !important;"
                                                multiple>
                                                <option value="Fundraising">Fundraising</option>
                                                <option value="Digital_marketing_and_promotion">Digital marketing and
                                                    promotion</option>
                                                <option value="Content_creation_and_social_media">Content creation and
                                                    social media</option>
                                                <option value="Adminstrative_operations">Adminstrative operations
                                                </option>
                                                <option value="Event_planning_and_coordination">Event planning and
                                                    coordination</option>
                                                <option value="Community_and_growth">Community and growth</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="msg"><strong>Please tell us about any work, volunteering,
                                                    personal experience or skills that you have that are relevant to the
                                                    role you are interested in </strong></label>

                                            <textarea class="form-control form-light" rows="5" name="msg"></textarea>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" style="min-width: 100%;">
                                            <label for="how-you-know-us"><strong>Availability - Number of months (Please
                                                    select all available months) </strong><sup class="sup">*</sup></label>

                                            <select
                                                class=" theme-combo donation-select js-example-basic-single form-control"
                                                id="availability" name="availability[]" style=" width: 100% !important;"
                                                multiple>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="Septemeber">Septemeber</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                    </div>





                                    <div class="col-md-6">
                                        <div class="form-group" style="min-width: 100%;">
                                            <label for="how-you-know-us"><strong>Availability - Number of months (Please
                                                    select all available months) </strong><sup class="sup">*</sup></label>

                                            <select
                                                class=" theme-combo donation-select js-example-basic-single form-control"
                                                id="Number_of_hours" name="hours" style=" width: 100% !important;">
                                                <option value="3_hours_a_week">3 hours a week</option>
                                                <option value="4_hours_a_week">4 hours a week</option>
                                                <option value="5_hours_a_week">5 hours a week</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-default">
                                            <i data-feather="heart"></i> Send Request
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- About Us Style Start -->
    </div>

</div>
<!-- End Volunteer Modal Form  -->






 <!-- Volunteer Modal Javascript  -->
 <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>