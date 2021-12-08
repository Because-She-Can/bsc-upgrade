// /*=========================================================================================
//     File Name: wizard-steps.js
//     Description: wizard steps page specific js
//     ----------------------------------------------------------------------------------------
//     Item Name: Frest HTML Admin Template
//     Version: 1.0
//     Author: PIXINVENT
//     Author URL: http://www.themeforest.net/user/pixinvent
// ==========================================================================================*/
// //    Wizard tabs with icons setup
// // ------------------------------
// $(".wizard-horizontal").steps({
//     headerTag: "h6",
//     bodyTag: "fieldset",
//     transitionEffect: "fade",
//     titleTemplate: '<span class="step">#index#</span> #title#',
//     labels: {
//         finish: 'Submit'
//     },
//     onFinished: function(event, currentIndex) {
//         alert("Form submitted.");
//     }
// });
// //        vertical Wizard       //
// // ------------------------------
// $(".wizard-vertical").steps({
//     headerTag: "h3",
//     bodyTag: "fieldset",
//     transitionEffect: "fade",
//     enableAllSteps: true,
//     stepsOrientation: "vertical",
//     labels: {
//         finish: 'Submit'
//     },
//     onFinished: function(event, currentIndex) {
//         alert("Form submitted.");
//     }
// });


// //       Validate steps wizard //
// // -----------------------------
// // Show form
// var stepsValidation = $(".wizard-validation");
// var form = stepsValidation.show();

// stepsValidation.steps({
//     headerTag: "h6",
//     bodyTag: "fieldset",
//     transitionEffect: "fade",
//     titleTemplate: '<span class="step">#index#</span> #title#',
//     labels: {
//         finish: 'Submit'
//     },
//     onStepChanging: function(event, currentIndex, newIndex) {
//         // Allways allow previous action even if the current form is not valid!
//         if (currentIndex > newIndex) {
//             return true;
//         }
//         form.validate().settings.ignore = ":disabled,:hidden";
//         return form.valid();
//     },
//     onFinishing: function(event, currentIndex) {
//         form.validate().settings.ignore = ":disabled";
//         return form.valid();
//     },
//     onFinished: function(event, currentIndex) {
//         $('#form').preloader();
//         // var FormData = $('form').serialize();
//         const formData = new FormData(form[0]);
//         for (var x of formData.entries()) {
//             console.log(x);
//         }

//         //send ajax request to server
//         axios
//             .post($("#review_form_create").attr("action"), formData)
//             .then(function(response) {
//                 swal("Success!", "" + response.data.message + "", "success");

//                 //remove preloader and enable submit button
//                 $("#review_form_create").preloader("remove");
//                 // $("#reviewSendBtn").prop("disabled", false);

//                 //assign slug from response request to slug in image upload form
//                 $("#review_slug").val(response.data.slug);
//                 show($("#image_upload"));
//             })
//             .catch(function(error) {
//                 console.log(error.response);

//                 //Display form validation Error Messages from server
//                 if (error.response.data.errors.review) {
//                     $("#review_error").text(
//                         error.response.data.errors.review[0]
//                     );
//                 }

//                 swal("Error!", "" + error.message + "", "error");
//                 $("#review_form_create").preloader("remove");
//                 $("#reviewSendBtn").prop("disabled", false);
//             });

//         // console.log(formData.entries());
//     }
// });

// // Initialize validation
// stepsValidation.validate({
//     ignore: 'input[type=hidden]', // ignore hidden fields
//     // ignore: ':hidden:not(#summernote),.note-editable.panel-body', // ignore hidden fields
//     errorClass: 'is-invalid',
//     successClass: 'success',
//     highlight: function(element, errorClass) {
//         $(element).removeClass(errorClass);
//     },
//     unhighlight: function(element, errorClass) {
//         $(element).removeClass(errorClass);
//     },
//     errorPlacement: function(error, element) {
//         error.insertAfter(element);
//     },
//     rules: {
//         email: {
//             email: true
//         }
//     }
// });
// // live Icon color change on state change
// // $(document).ready(function() {
// //     $(".current").find(".step-icon").addClass("bx bx-time-five");
// //     $(".current").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
// //         strokeColor: '#5A8DEE'
// //     });
// // });
// // // Icon change on state
// // // if click on next button icon change
// // $(".actions [href='#next']").click(function() {
// //     $(".done").find(".step-icon").removeClass("bx bx-time-five").addClass("bx bx-check-circle");
// //     $(".current").find(".step-icon").removeClass("bx bx-check-circle").addClass("bx bx-time-five");
// //     // live icon color change on next button's on click
// //     $(".current").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
// //         strokeColor: '#5A8DEE'
// //     });
// //     $(".current").prev("li").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
// //         strokeColor: '#39DA8A'
// //     });
// // });
// // $(".actions [href='#previous']").click(function() {
// //     // live icon color change on next button's on click
// //     $(".current").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
// //         strokeColor: '#5A8DEE'
// //     });
// //     $(".current").next("li").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
// //         strokeColor: '#adb5bd'
// //     });
// // });
// // // if click on  submit   button icon change
// // $(".actions [href='#finish']").click(function() {
// //     $(".done").find(".step-icon").removeClass("bx-time-five").addClass("bx bx-check-circle");
// //     $(".last.current.done").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
// //         strokeColor: '#39DA8A'
// //     });
// // });
// // add primary btn class
// $('.actions a[role="menuitem"]').addClass("btn btn-primary");
// $('.icon-tab [role="menuitem"]').addClass("glow ");
// $('.wizard-vertical [role="menuitem"]').removeClass("btn-primary").addClass("btn-light-primary");

/*=========================================================================================
    File Name: wizard-steps.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
//    Wizard tabs with icons setup
// ------------------------------
$(".wizard-horizontal").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function(event, currentIndex) {
        alert("Form submitted.");
    }
});
//        vertical Wizard       //
// ------------------------------
$(".wizard-vertical").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    enableAllSteps: true,
    stepsOrientation: "vertical",
    labels: {
        finish: 'Submit'
    },
    onFinished: function(event, currentIndex) {
        alert("Form submitted.");
    }
});


//       Validate steps wizard //
// -----------------------------
// Show form
var stepsValidation = $(".wizard-validation");
var form = stepsValidation.show();

stepsValidation.steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onStepChanging: function(event, currentIndex, newIndex) {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex) {
            return true;
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function(event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function(event, currentIndex) {
        $('#form').preloader();
        var FormData = $('form').serialize();
        axios.post('/property/add', FormData)
            .then(function(response) {
                console.log(response.data);
                swal("Property Added Successfully!", {
                    icon: "success",
                });
                $('#form').preloader('remove');
                document.getElementById("form").reset();
                // window.location.replace('/property')
            })
            .catch(function(error) {
                console.log(error);
                swal("Oops seems there is an error!", {
                    icon: "error",
                });

            });
    }
});

// Initialize validation
stepsValidation.validate({
    ignore: 'input[type=hidden]', // ignore hidden fields
    errorClass: 'danger',
    successClass: 'success',
    highlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element);
    },
    rules: {
        email: {
            email: true
        }
    }
});
// live Icon color change on state change
$(document).ready(function() {
    $(".current").find(".step-icon").addClass("bx bx-time-five");
    $(".current").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
        strokeColor: '#5A8DEE'
    });
});
// Icon change on state
// if click on next button icon change
$(".actions [href='#next']").click(function() {
    $(".done").find(".step-icon").removeClass("bx bx-time-five").addClass("bx bx-check-circle");
    $(".current").find(".step-icon").removeClass("bx bx-check-circle").addClass("bx bx-time-five");
    // live icon color change on next button's on click
    $(".current").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
        strokeColor: '#5A8DEE'
    });
    $(".current").prev("li").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
        strokeColor: '#39DA8A'
    });
});
$(".actions [href='#previous']").click(function() {
    // live icon color change on next button's on click
    $(".current").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
        strokeColor: '#5A8DEE'
    });
    $(".current").next("li").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
        strokeColor: '#adb5bd'
    });
});
// if click on  submit   button icon change
$(".actions [href='#finish']").click(function() {
    $(".done").find(".step-icon").removeClass("bx-time-five").addClass("bx bx-check-circle");
    $(".last.current.done").find(".fonticon-wrap .livicon-evo").updateLiviconEvo({
        strokeColor: '#39DA8A'
    });
});
// add primary btn class
$('.actions a[role="menuitem"]').addClass("btn btn-primary");
$('.icon-tab [role="menuitem"]').addClass("glow ");
$('.wizard-vertical [role="menuitem"]').removeClass("btn-primary").addClass("btn-light-primary");