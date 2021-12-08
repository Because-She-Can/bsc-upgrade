"use strict";

$(function() {

    var slug = $("#review_slug");
    slug.val($("#slug").val());
    console.log(slug.val($("#slug").val()));

    // $('.dropify').dropify();
    $('.summernote').summernote({
        placeholder: 'Hi, this is summernote. Please, write text here! Super simple WYSIWYG editor on Bootstrap',
        height: 250
    })


    // var form = $("#review_form_create");

    // form.steps({
    //     // headerTag: "h3",
    //     // bodyTag: "fieldset",
    //     transitionEffect: "slideLeft",
    //     onStepChanging: function(event, currentIndex, newIndex) {
    //         // Allways allow previous action even if the current form is not valid!
    //         if (currentIndex > newIndex) {
    //             return true;
    //         }

    //         // Needed in some cases if the user went back (clean up)
    //         if (currentIndex < newIndex) {
    //             // To remove error styles
    //             form.find(".body:eq(" + newIndex + ") label.error").remove();
    //             form.find(".body:eq(" + newIndex + ") .error").removeClass(
    //                 "error"
    //             );
    //         }
    //         // console.log(form);
    //         form.validate().settings.ignore = ":disabled,:hidden";
    //         return form.valid();
    //     },

    //     onFinishing: function(event, currentIndex) {
    //         form.validate().settings.ignore = ":disabled";
    //         return form.valid();
    //     },
    //     onFinished: function(event, currentIndex) {
    //         //ajax
    //         event.preventDefault();
    //         form.preloader();
    //         const formData = new FormData(form[0]);
    //         console.log(formData);

    //         //hide all server side validation messages
    //         $("#review_error").text("");

    //         // for (instance in CKEDITOR.instances) {
    //         //     $('#' + instance).val(CKEDITOR.instances[instance].getData());
    //         // }


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
    //     },
    // });


    $("#review_form_create").submit(function(event) {
        event.preventDefault();

        // Hide all error messages
        $("#review_error").text("");

        $("#review_form_create").preloader();
        $("#reviewSendBtn").prop("disabled", true);

        var form = $("#review_form_create");
        const formData = new FormData(form[0]);

        // var formData = $("#review_form_create").serialize();
        console.log(formData);

        //send ajax request to server
        axios
            .post($("#review_form_create").attr("action"), formData)
            .then(function(response) {
                swal("Success!", "" + response.data.message + "", "success");

                //remove preloader and enable submit button
                $("#review_form_create").preloader("remove");
                // $("#reviewSendBtn").prop("disabled", false);
                // window.location.href = '/admin/reviews';
                location.reload()



            })
            .catch(function(error) {
                console.log(error.response);

                //Display form validation Error Messages from server
                if (error.response.data.errors.review) {
                    $("#review_error").text(
                        error.response.data.errors.review[0]
                    );
                }

                swal("Error!", "" + error.message + "", "error");
                $("#review_form_create").preloader("remove");
                $("#reviewSendBtn").prop("disabled", false);
            });
    });
});

function show(div) {
    div.find(":input").attr("required", true);
    div.show();
}

function hide(div) {
    div.find(":input").attr("required", false);
    div.hide();
}