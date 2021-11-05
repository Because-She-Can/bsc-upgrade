<!--Volunteer modal2 CSS -->
<style>
    /* The modal2 (background) */
    .modal2 {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 200px;
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

    /* modal2 Content */
    .modal2-content {
        background-color: #fefefe;
        margin: auto;
        padding: 2px 5px;
        border: 1px solid #888;
        width: 20%;
        color: #000;
    }

    /* The close Button */
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

        .modal2-content {
            padding: 10px !important;
        }

    }
</style>
<!-- Volunteer modal2 Css End -->


<!-- The modal2 -->
<div id="mymodal2" class="modal2">

    <!-- modal2 content -->
    <div class="modal2-content">
        <span id="close" class="close">&times;</span>
        <!-- About Us Style Start -->
        <section style="margin-top:20px;position:relative;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <p style="color:#477763;"> Your request has been sent successfully, <br> Because She Can will
                            contact you via email or phone</p>


                    </div>

                </div>

            </div>
        </section>
        <!-- About Us Style Start -->
    </div>

</div>
<!-- End Volunteer modal2 Form  -->


<!-- Volunteer modal2 Javascript  -->
<script>
    // Get the modal2
    var modal2 = document.getElementById("mymodal2");

    var closemodal = document.getElementById("mymodal2");

    // Get the button that opens the modal2
    var btn = document.getElementById("my_success_modal2");

    // Get the <span> element that closes the modal2
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal2
    // btn.onclick = function () {
    //     modal2.style.display = "block";
    // }
    window.onload = function () {
        modal2.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal2
    closemodal.onclick = function () {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal2, close it
    window.onclick = function (event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>